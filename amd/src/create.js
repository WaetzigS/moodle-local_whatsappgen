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
 * Code for WhatsApp Message generating
 *
 * @package     local_whatsappgen
 * @category    admin
 * @copyright   2024 Stephan Waetzig
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('local_whatsappgen/create', ["jquery"], function($) {
    return {
        init: function(data) {
            $(document).ready(function() {
                data.forEach(function(item) {
                    var url = 'https://wa.me/' + item.phonenumber + '?text=' + encodeURIComponent(item.text);
                    window.open(url, "_blank");
                });
            });
        }
    }
});