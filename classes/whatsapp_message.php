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

namespace local_whatsappgen;
use moodleform;

defined('MOODLE_INTERNAL') || die();

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





