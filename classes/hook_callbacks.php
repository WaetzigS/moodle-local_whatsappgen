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

use core\hook\output\before_footer_html_generation;
use html_writer;

defined('MOODLE_INTERNAL') || die();


class hook_callbacks {

    public static function before_footer(before_footer_html_generation $hook) {
        global $PAGE , $USER , $COURSE;

        //check if course is there and role is allowed
        if ($PAGE->url->compare(new \moodle_url('/user/index.php'), URL_MATCH_BASE)) {
            if ($COURSE->id > 1) {
                $defaultroles = get_config('local_whatsappgen' , 'defaultroles');
                if ($defaultroles === NULL) {
                    $setroles = 0;
                } else {
                    $setroles = explode(',' ,  $defaultroles);
                }
                
                $context = \context_course::instance($COURSE->id);;
                $roles = get_user_roles($context, $USER->id, true);
                $access_whatsapp = false;
                foreach ($roles as $role) {
                    if (in_array($role->roleid , $setroles)) {
                        $access_whatsapp = true;
                        break; 
                    } else {
                        $access_whatsapp = false;
                    }
                }
            if ($access_whatsapp) {
                echo html_writer::tag('div', '', ['id' => 'whatsapplogo']);
                $PAGE->requires->js_call_amd("local_whatsappgen/whatsapp", 'init', [$COURSE->id]);
            }
        }
    }
}
}