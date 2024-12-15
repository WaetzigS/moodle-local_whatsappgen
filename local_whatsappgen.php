<?php

require_once('../../config.php');
require_once($CFG->libdir . '/formslib.php');
require_once($CFG->dirroot . '/local/whatsappgen/classes/whatsapp.php');
require_once($CFG->libdir . '/pagelib.php');

require_login();

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

        $userids = optional_param('userid', '', PARAM_RAW);
        $courseid = optional_param('courseid', '', PARAM_RAW);
      
        $PAGE->set_url(new moodle_url('/local/whatsappgen/local_whatsappgen.php'));
        $PAGE->set_context(\context_system::instance());
        $PAGE->set_title(get_string('pluginname', 'local_whatsappgen'));
        $PAGE->set_pagelayout('standard');
        //$PAGE->set_heading(get_string('create_message', 'local_whatsappgen'));
        $PAGE->set_cacheable(true);

        //Check, if you are over the limit, if not then continue
        $setting_local_whatsapp_limit = $DB->get_record('config', ['name' => 'local_whatsappgen_limituser']);
        $userid_limitcheck = explode(',', $userids);

        if (count($userid_limitcheck) > intval($setting_local_whatsapp_limit->value)) {
            
            redirect($CFG->wwwroot . '/user/index.php?id=' . $courseid, get_string('limittext', 'local_whatsappgen') . $setting_local_whatsapp_limit->value, null, \core\output\notification::NOTIFY_WARNING);
            die();
        } else {
            
            //Bcs of the function in the class its converting it to an array
            $userlistclass = new getusers($DB);
            $usernameslist = $userlistclass->userlist($userids);

            //Get Data from user out of the function userlist and get the phonenumbers
            $setting_defaultnumber = $DB->get_record('config', ['name' => 'local_whatsappgen_default_number']);

            //Get the forms
            $mform = new whatsapp_message();

            // If cancel, then redirect to course, else create the message
            if ($mform->is_cancelled()) {
                    redirect($CFG->wwwroot . '/user/index.php?id=' . $courseid , get_string('cancelmessage', 'local_whatsappgen'), null, \core\output\notification::NOTIFY_INFO);
                    die();
            } else if ($data = $mform->get_data()) {
                global $CFG , $DB , $USER;

                // For Database entry
                $messaginguser = $USER->id;

                //get course id 
                $courseid_fromform = $data->courseid;

                // Get all the values from one query
                $userdata = $DB->get_records_sql(
                    'SELECT 
                        us.id as id ,
                        us.firstname as firstname , 
                        us.lastname as lastname ,
                        us.phone1 as phone1 ,
                        us.phone2 as phone2 ,
                        us.email as email ,
                        us.country as country , 
                        (SELECT group_concat(grou.name) 
                         	FROM mdl_groups grou 
                         	JOIN mdl_groups_members member ON member.userid = us.id AND member.groupid = grou.id
                         WHERE
                         	grou.id = member.groupid AND
                         	member.userid = us.id AND
                         	grou.courseid = :courseid
                        ) as groupname
                    FROM
                        {user} us 

                    WHERE
                        us.id IN ( ' . $data->userid .  ' )' , 
                        [
                            'courseid' => $courseid_fromform , 
                        ]
                );

                
                //Get setting Tracking in DB
                $setting_dbtracking = '';
                $setting_dbtracking = $DB->get_record('config', ['name' => 'local_whatsappgen_trackingdb']);
                $setting_dbtracking = intval($setting_dbtracking->value);

                //Get the message text --> make an /n, bcs that  solves the linebreak-problem
                $whatsapp_message = nl2br(htmlspecialchars($data->whatsapp_messagetext));

                //clear the javascript chache
                $CFG->cachejs = false;
                
                //Import the country codes from ym json
                $country_json = 'phonecountry.json';
                $json_content = file_get_contents($country_json);
                $country_codes = json_decode($json_content, true);

                //Now render it all
                echo '<script>';
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

                    if (strpos($formattedText , '%%groupname%%') !== false) {
                        $formattedText = str_replace('%%groupname%%', $waaccount->groupname, $formattedText);
                    }

                    if (strpos($formattedText , '%%coursefullname%%') !== false) {
                        $coursefullname = $DB->get_record('course', ['id' => $courseid_fromform])->fullname;
                        $formattedText = str_replace('%%coursefullname%%', $coursefullname , $formattedText);
                    }

                    if (strpos($formattedText , '%%courseshortname%%') !== false) {
                        $courseshortname = $DB->get_record('course', ['id' => $courseid_fromform])->shortname;
                        $formattedText = str_replace('%%courseshortname%%', $courseshortname , $formattedText);
                    }
                                      
                    // Replace <br /> with a new line character
                    $formattedText = str_replace("<br />", "\n", $formattedText);
                    
                    // Encode text, thats like Mailto
                    $encodedText = urlencode($formattedText);
                    
                    // Get Telephone or Smartphonenumber from settings
                    $phonenumerunformat = '';
                    if ($setting_defaultnumber->value === 'phone2') {
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
                        // Create the WhatsApp URL
                        $url = 'https://wa.me/' . $phonenumber . '?text=' . $encodedText;
                        // Output JavaScript code to open the link in a new tab
                        echo 'window.open("' . $url . '", "_blank");';
                    }

                    //Insert in notification
                    if ($setting_dbtracking > 0) {
                        $insert_notification = new stdClass();
                        $insert_notification->useridfrom = $messaginguser;
                        $insert_notification->useridto = $waaccount->id;
                        $insert_notification->fullmessage = $formattedText;
                        $insert_notification->component = 'local_whatsappgen';
                        $insert_notification->contexturl = $CFG->wwwroot . '/user/index.php?id=' . $courseid_fromform;
                        $insert_notification->timecreated = time();
                        $insert_notification->customdata = '["phone"."' . $setting_defaultnumber->value . '"]';
                        try {
                            $DB->insert_record('notifications' , $insert_notification , false);
                        } catch (dml_exception $e) {
                        }
                    }

                }
                
                // Add a delay before redirecting
                echo 'setTimeout(function() { window.location.href = "' . htmlspecialchars($CFG->wwwroot . '/user/index.php?id=' . $courseid_fromform, ENT_QUOTES, 'UTF-8') . '"; }, 2000);';
                echo '</script>';
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
                'phgroups' => get_string('phgroups', 'local_whatsappgen'),
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

// Instanziiere die Klasse
$whatsapp = new whatsapp();
$content = $whatsapp->get_content();

echo $OUTPUT->header();
echo $content->text;

