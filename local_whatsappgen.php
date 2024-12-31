<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *  WhatsApp Message Generator
 *
 * @package    local_whatsappgen
 * @copyright  2024 Stephan Waetzig
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');

use local_whatsappgen\whatsapp_message;
use local_whatsappgen\getusers;


//Proof if user is availble to use whatsapp gen again, bs with link he could use it
global $USER;
$courseidforproof = optional_param('courseid', '', PARAM_SEQUENCE);
$setroles = explode(',' , get_config('local_whatsappgen' , 'defaultroles'));
$context = context_course::instance($courseidforproof);
$roles = get_user_roles($context, $USER->id, true);
foreach ($roles as $role) {
    if (in_array($role->roleid , $setroles)) {
        break; 
    } else {
        redirect($CFG->wwwroot , get_string('error', 'local_whatsappgen'), null, \core\output\notification::NOTIFY_ERROR);
    }
}



class whatsapp {
    function instance_allow_multiple() {
        return true;
    }

    function has_config() {
        return true;
    }

    // Create the content
    public function get_content() {
        global $CFG, $DB, $userids, $courseid, $PAGE, $OUTPUT, $mform;

        

        $userids = optional_param('userid', '', PARAM_SEQUENCE);
        $courseid = optional_param('courseid', '', PARAM_SEQUENCE);
      
        $PAGE->set_url(new moodle_url('/local/whatsappgen/local_whatsappgen.php'));
        $PAGE->set_context(\context_system::instance());
        $PAGE->set_title(get_string('pluginname', 'local_whatsappgen'));
        $PAGE->set_pagelayout('standard');

        //Check, if you are over the limit, if not then continue
        $setting_local_whatsapp_limit = get_config('local_whatsappgen' , 'limituser');
        $userid_limitcheck = explode(',', $userids);

        if (count($userid_limitcheck) > intval($setting_local_whatsapp_limit)) {
            
            redirect($CFG->wwwroot . '/user/index.php?id=' . $courseid, get_string('limittext', 'local_whatsappgen') . $setting_local_whatsapp_limit, null, \core\output\notification::NOTIFY_WARNING);
            die();
        } else {
            
            //Bcs of the function in the class its converting it to an array
            $userlistclass = new getusers($DB);
            $usernameslist = $userlistclass->userlist($userids);

            //Get Data from user out of the function userlist and get the phonenumbers
            $setting_defaultnumber =  get_config('local_whatsappgen' , 'ddefaultnumber');

            //Get the forms
            $mform = new whatsapp_message();

            // If cancel, then redirect to course, else create the message
            if ($mform->is_cancelled()) {
                    redirect($CFG->wwwroot . '/user/index.php?id=' . $courseid , get_string('cancelmessage', 'local_whatsappgen'), null, \core\output\notification::NOTIFY_INFO);
                    die();
            } else if ($data = $mform->get_data()) {
                global $CFG , $DB , $USER , $PAGE;

                // For Database entry
                $messaginguser = $USER->id;

                //get course id 
                $courseid_fromform = $data->courseid;

                //Get the comma sperated userids in a array
                $userids = explode(',', $data->userid); 
                //make them to a list
                list($sql_condition, $sql_params_in) = $DB->get_in_or_equal($userids, SQL_PARAMS_NAMED, 'userid');

                // create the query -> groups we make it in the foreach
                $sql = 'SELECT us.id AS id , 
                               us.firstname AS firstname , 
                               us.lastname AS lastname ,
                               us.phone1 AS phone1 ,
                               us.phone2 AS phone2 ,
                               us.email AS email ,
                               us.country AS country 
                        FROM {user} us 
                        WHERE us.id ' . $sql_condition ;  
                
                $userdata = $DB->get_records_sql($sql, $sql_params_in);

                //Get setting Tracking in DB
                $setting_dbtracking = '';
                $setting_dbtracking = get_config('local_whatsappgen' , 'trackingdb');
                $setting_dbtracking = intval($setting_dbtracking);

                //Get the message text --> make an /n, bcs that  solves the linebreak-problem
                $whatsapp_message = nl2br(htmlspecialchars($data->whatsapp_messagetext));
                
                //Import the country codes from ym json
                $country_json = 'phonecountry.json';
                $json_content = file_get_contents($country_json);
                $country_codes = json_decode($json_content, true);

                $collectDataforjs = [];
                

                //Now render it all
                foreach($userdata as $waaccount) {
                                    
                    //Get Text
                    $formattedText = $whatsapp_message;

                    
                    // Replace placeholders
                    if (strpos($formattedText , '%%firstname%%') !== false) {
                        $formattedText = str_replace('%%firstname%%', $waaccount->firstname, $formattedText);
                    }

                    if (strpos($formattedText , '%%lastname%%') !== false) {
                        $formattedText = str_replace('%%lastname%%', $waaccount->lastname, $formattedText);
                    }
                    
                    if (strpos($formattedText , '%%email%%') !== false) {
                        $formattedText = str_replace('%%email%%', $waaccount->email, $formattedText);
                    }
                
                    if (strpos($formattedText , '%%coursefullname%%') !== false) {
                        $coursefullname = $DB->get_record('course', ['id' => $courseid_fromform])->fullname;
                        $formattedText = str_replace('%%coursefullname%%', $coursefullname , $formattedText);
                    }

                    if (strpos($formattedText , '%%courseshortname%%') !== false) {
                        $courseshortname = $DB->get_record('course', ['id' => $courseid_fromform])->shortname;
                        $formattedText = str_replace('%%courseshortname%%', $courseshortname , $formattedText);
                    }
                                      
                    // Replace <br /> with a new line character -> the text will be encoded in js 
                    $formattedText = str_replace("<br />", "\n", $formattedText);
                    
                    
                    // Get Telephone or Smartphonenumber from settings
                    $phonenumerunformat = '';
                    if ($setting_defaultnumber === 'phone2') {
                        $phonenumerunformat = $waaccount->phone2;
                    } else {
                        $phonenumerunformat = $waaccount->phone1;
                    }

                    // Format the phone number (trim, remove special characters, use country code)
                    $phonenumber = preg_replace('/\D/', '', $phonenumerunformat);
                    if (substr($phonenumber, 0, 2) === '00') {
                        $phonenumber = substr($phonenumber, 2);
                    } elseif (substr($phonenumber, 0, 1) === '0') {
                        foreach ($country_codes as $code) {
                            if ($code['country'] === $waaccount->country) {
                                $phonenumber = $code['code'] . substr($phonenumber, 1);
                            }
                        }
                    }
                    
                    //Proof, if user has nuumber and create message
                    if (!empty($phonenumber)) {
                        // Hier jetzt die create js mit den inits aufrufen
                        
                        $collectDataforjs[] = [
                            'phonenumber' => $phonenumber,
                            'text' => $formattedText
                        ];
                        
  
                    }
                    //Insert in generated WhatsApp messages
                    if ($setting_dbtracking > 0) {
                        $insert_tracking = new stdClass();
                        $insert_tracking->useridfrom = $messaginguser;
                        $insert_tracking->course = $courseid_fromform;
                        $insert_tracking->useridto = $waaccount->id;
                        $insert_tracking->message = $formattedText;
                        $insert_tracking->timecreated = time();
                        try {
                            $DB->insert_record('whatsappgen_messages' , $insert_tracking , false);
                        } catch (dml_exception $e) {
                        }
                    }
                }
                //Out of foreach -> I want to go to js and create the messages there
                $PAGE->requires->js_call_amd("local_whatsappgen/create", 'init', [$collectDataforjs]);
                $PAGE->requires->js_init_code('window.location.href = "' . $CFG->wwwroot . '/user/index.php?id=' . $courseid . '";');
                
            }

            //Bring Values into the mustache-file
            $templatecontext = (object)[
                'userlist' => array_values($usernameslist['userlist']),
                'whatsapp_inputform' => $mform->render(),
                'labelselect' => get_string('labelselect', 'local_whatsappgen'),
                'placeholders' => get_string('placeholders', 'local_whatsappgen'),
                'phfirstname' => get_string('phfirstname', 'local_whatsappgen'),
                'phlastname' => get_string('phlastname', 'local_whatsappgen'),
                'phemail' => get_string('phemail', 'local_whatsappgen'),
                'phfullname' => get_string('phfullname', 'local_whatsappgen'),
                'phshortname' => get_string('phshortname', 'local_whatsappgen'),
                'textformatting' => get_string('textformatting', 'local_whatsappgen'),
                'tfbolt' => get_string('tfbolt', 'local_whatsappgen'),
                'tfitalic' => get_string('tfitalic', 'local_whatsappgen'),
                'tfstrikethrough' => get_string('tfstrikethrough', 'local_whatsappgen'),
                'tfmonospace' => get_string('tfmonospace', 'local_whatsappgen'),
                'header' => get_string('create_message', 'local_whatsappgen')


            ];
            $content = new stdClass;
            $content->text = $OUTPUT->render_from_template('local_whatsappgen/whatsapp', $templatecontext);
            return $content;
        }
    }
}

$whatsapp = new whatsapp();
$content = $whatsapp->get_content();

echo $OUTPUT->header();
echo $content->text;
echo $OUTPUT->footer();

