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


class getusers {
    
    private $DB;

    public function __construct($DB) {
        $this->DB = $DB;
    }

    // Function to get userlist
    public function userlist($userids) {
        //Get setting defaultnumber
        $setting_defaultnumber = get_config('local_whatsappgen' , 'defaultnumber');


        $userlist_array = explode(',', $userids);
        $userlist = $this->DB->get_records_list('user', 'id', $userlist_array);



        foreach ($userlist as $proofavail) {
            //Key avail ins array hinzufügen.
            if (trim($setting_defaultnumber) === 'phone2' ) {
                if ($proofavail->phone2 != '' && !empty($proofavail->phone2)) {
                    $proofavail->avail = 1;
                    $proofavail->fontcolor = 'green';
                } else {
                    $proofavail->avail = 0;
                    $proofavail->fontcolor = 'red';
                }
            } else {
                if ($proofavail->phone1 != '' && !empty($proofavail->phone1)) {
                    $proofavail->avail = 1;
                    $proofavail->fontcolor = 'green';
                } else {
                    $proofavail->avail = 0;
                    $proofavail->fontcolor = 'red';
                }
            }
        }
        return ['userlist' => $userlist];
    }
}