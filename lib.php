<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     local_whatsappgen
 * @category    admin
 * @copyright   2024 Stephan Waetzig
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/user/lib.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->dirroot.'/notes/lib.php');
require_once($CFG->libdir . '/accesslib.php');
require_once($CFG->libdir.'/adminlib.php');
require_once($CFG->libdir . '/pagelib.php');


function local_whatsappgen_extend_settings_navigation(settings_navigation $settingsnav, context $context) {
    global $PAGE , $DB , $USER , $COURSE , $CFG;

    //check if course is there and role is allowed
    
    if ($COURSE->id > 1) {
        $defaultroles = get_config('localwhatsappgen' , 'defaultroles');
        if ($defaultroles === NULL) {
            $setroles = 0;
        } else {
            $setroles = explode(',' ,  $defaultroles);
        }
    
        $context = context_course::instance($COURSE->id);
        $roles = get_user_roles($context, $USER->id, true);
        $access_whatsapp = false;
        foreach ($roles as $role) {
            //$rolestr[] = $role->roleid;
            if (in_array($role->roleid , $setroles)) {
                $access_whatsapp = true;
                break; 
            } else {
                $access_whatsapp = false;
            }
        }
        
        // Open the Javascript, if it's in course
        if ($PAGE->url->compare(new moodle_url('/user/index.php'), URL_MATCH_BASE)) {
                if ($access_whatsapp == true) { 
                    $course = $COURSE->id;
                    
                    $PAGE->requires->js_call_amd('local_whatsappgen/whatsapp', 'init' , [
                        $course,
                    ]);
            }
        }
    }
}
