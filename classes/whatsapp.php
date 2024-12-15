<?php

defined('MOODLE_INTERNAL') || die();

// Die Forms erstellen https://docs.moodle.org/dev/Form_API
require_once("$CFG->libdir/formslib.php");

class whatsapp_message extends moodleform {


    
    // Add elements to form.
    public function definition() {
        global $DB;
        $userids = optional_param('userid', '1', PARAM_RAW);
        $courseid = optional_param('courseid', '1', PARAM_RAW);
        // A reference to the form is stored in $this->form.
        // A common convention is to store it in a variable, such as `$mform`.
        $mform = $this->_form; // Don't forget the underscore!

        // Add elements to your form.
        $mform->addElement('hidden', 'courseid', $courseid);
        $mform->setType('courseid', PARAM_RAW);

        //Go in class and get Usernames, ID's via the function inside
        $userlistclass = new getusers($DB);
        $useridlist = $userlistclass->userlist($userids);
        $userlistforform = [];
        foreach ($useridlist['userlist'] as $user) {
            $userlistforform[] = $user->id;
        }

        $mform->addElement('hidden', 'userid', implode(',', $userlistforform));
        $mform->setType('userid', PARAM_RAW);


        $mform->addElement('textarea', 'whatsapp_messagetext', get_string('messagetext' , 'local_whatsappgen'));
        $mform->setType('whatsapp_messagetext', PARAM_RAW);
        // Default value.
        $buttons = [];
        $this->add_action_buttons(true, get_string('whatsapp_messagetext_buttons', 'local_whatsappgen') , $buttons);
    }

    // Custom validation should be added here.
    function validation($data, $files) {
        return [];
    }
}



class getusers {
    
    private $DB;

    public function __construct($DB) {
        $this->DB = $DB;
    }

    // Function to get userlist
    public function userlist($userids) {
        //Get setting defaultnumber
        $setting_defaultnumber = $this->DB->get_record('config', ['name' => 'local_whatsappgen_default_number']);

        $userlist_array = explode(',', $userids);
        $userlist = $this->DB->get_records_list('user', 'id', $userlist_array);

        foreach ($userlist as $proofavail) {
            //Key avail ins array hinzufügen.
            if ($setting_defaultnumber->value === 'phone2' && !empty($proofavail->phone2)) {
                $proofavail->avail = 1;
                $proofavail->fontcolor = 'green';
            } else {
                $proofavail->avail = 0;
                $proofavail->fontcolor = 'red';
            }
            if ($setting_defaultnumber->value === 'phone1' && !empty($proofavail->phone1)) {
                $proofavail->avail = 1;
                $proofavail->fontcolor = 'green';
            } else {
                $proofavail->avail = 0;
                $proofavail->fontcolor = 'red';
            }
        }

        return ['userlist' => $userlist];
    }
}

