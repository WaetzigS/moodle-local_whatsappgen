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

defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'WhatsApp Generator';
$string['privacy:metadata'] = 'This plugin does not store any personal data.';
$string['addwhatsapp'] = 'Add WhatsApp Message';
$string['error'] = 'Fatal error in WhatsApp generator. Please contact the admin / support';
$string['whatsapp_messagetext'] = 'Your message text';
$string['whatsapp_messagetext_buttons'] = 'Generate';
$string['create_message'] = 'Create a new message';
$string['messagetext'] = 'Your WhatsApp-Message';
$string['limituser'] = 'Maximum generated messages at once';
$string['limituserdescription'] = 'Please choose the maximum generated messages at one time. We require 10. More can effect your Computer performance';
$string['defaultnumber'] = 'Default WhatsApp Number';
$string['defaultnumberdescription'] = 'Select the default field for the WhatsApp number in the user profile.';
$string['defaultdbtracking'] = 'Tracking in Database table whatsappgen_messages';
$string['defaultdbtrackingdescription'] = 'Optionally, select to track generated messages in the notifications table.';
$string['defaultroles'] = 'Allowed Roles';
$string['defaultrolesdescription'] = 'Roles allowed to use the plugin. Please note that these roles will be able to see the contact numbers.';
$string['limittext'] = 'The number of selected users exceeds the limit of ';
$string['labelselect'] = 'The message will be generated for participants marked in green.';
$string['cancelmessage'] = 'No messages for the participants';
$string['nonumber'] = 'There is no number available';
$string['placeholders'] = 'Overview of Placeholders';
$string['phfirstname'] = '%%firstname%% &rarr; first name of the participant';
$string['phlastname'] = '%%lastname%% &rarr; last name of the participant';
$string['phemail'] = '%%email%% &rarr; email-address of the participant';
$string['phgroups'] = '%%groupname%% &rarr; all the groups in this course where the participant is enrolled';
$string['phfullname'] = '%%fullname%% &rarr; fullname of this course';
$string['phshortname'] = '%%shortname%% &rarr; shortname of this course';
$string['textformatting'] = 'Overview of Text Formatting';
$string['tfbolt'] = '*Text* &rarr; bolt: ';
$string['tfitalic'] = '_Text_ &rarr; italic: ';
$string['tfstrikethrough'] = '~Text~ &rarr; score out: ';
$string['tfmonospace'] = '```Text``` &rarr; into monospace format: ';
$string['licenceinfo'] = 'Conditions';
$string['licenceinfodescription'] = 'I undersatand, the author of this plugin assumes no responsibility for any legal infringements. Please adhere to WhatsApp licensing terms.<br>Please check the <a href="https://www.whatsapp.com/legal" target="_blank">legal of Whatsapp</a>';





