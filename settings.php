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
 * Settings for Whatsapp Message Generator
 *
 * @copyright Stephan Waetzig
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package   local_whatsappgen
 */

defined('MOODLE_INTERNAL') || die;

require_once($CFG->libdir . '/accesslib.php');

if ($hassiteconfig) {
    
    //Just bring the Plugin-Name
    $settings = new admin_settingpage('local_whatsappgen', new lang_string('pluginname', 'local_whatsappgen'));

    // Option 1 bis maximal 100            
    $options_limituser = [] ;
    for ($i = 1; $i <=100 ; $i++) {
        $options_limituser[$i] = (string)$i;
    }

    $settings->add(new admin_setting_configselect('local_whatsappgen/limituser', get_string('limituser', 'local_whatsappgen'),
                       get_string('limituserdescription', 'local_whatsappgen'), '10' ,  $options_limituser));

    // Option for phone 1 and 2             
    $options_defaultnumber = [
        'phone1' => get_string('phone1') ,
        'phone2' => get_string('phone2') 
    ];

    $settings->add(new admin_setting_configselect('local_whatsappgen/defaultnumber', get_string('defaultnumber', 'local_whatsappgen'),
                       get_string('defaultnumberdescription', 'local_whatsappgen'), 'phone1' ,  $options_defaultnumber));
    
     // Option for roles   
    $roles = role_get_names();
    $options_defaultroles = [];
     foreach ($roles as $role) {
        $options_defaultroles[$role->id] = $role->shortname;
     }
    $settings->add(new admin_setting_configmultiselect('local_whatsappgen/defaultroles', get_string('defaultroles', 'local_whatsappgen'),
                        get_string('defaultrolesdescription', 'local_whatsappgen'), [] ,  $options_defaultroles));           
 
    $settings->add(new admin_setting_configcheckbox('local_whatsappgen/trackingdb', get_string('defaultdbtracking', 'local_whatsappgen'),
                    get_string('defaultdbtrackingdescription', 'local_whatsappgen') , 0));

    $settings->add(new admin_setting_heading('local_whatsappgen/licence' , get_string('licenceinfo', 'local_whatsappgen') , 
                    get_string('licenceinfodescription', 'local_whatsappgen') ));
    
    $ADMIN->add('localplugins', $settings);

    if ($ADMIN->fulltree) {
        // TODO: Define actual plugin settings page and add it to the tree - {@link https://docs.moodle.org/dev/Admin_settings}.
    }
   
}
