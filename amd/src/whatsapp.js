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

define('local_whatsappgen/whatsapp', ["jquery"], function($) {
    return {
        init: function(courseid) {


            $(document).ready(function() {
           prepareWhatsApp()

           //If there is any filter or enrollment set, the script is not working. So for this call the function after a button was choosen
           filterbuttons = document.querySelectorAll('.btn.btn-primary');
           filterbuttons.forEach(function(button) {
               button.addEventListener('click', function() {
                       setTimeout(function() {
                           prepareWhatsApp()
                       } , 2500);
               }); 
           }); 

           function prepareWhatsApp() {
               var checkboxes = document.querySelectorAll('input[id^="user"]');
               var allcheckboxeswa = document.getElementById('select-all-participants');

               checkboxes.forEach(function(checkbox) {
                   checkbox.addEventListener('change', function() {
                       hideimage();
                       var checkedCheckboxes = document.querySelectorAll('input[id^="user"]:checked');
                       if (checkedCheckboxes.length > 0) {    
                           showimage();
                           if (walogo) {
                               // Event-Listener for adding the Picture
                               walogo.addEventListener('click', function() {
                                   // Get the function to get the userids from the checkboxes
                                   getCheckedUsers();
                               });
                           }
                       } else {
                           hideimage();
                       }
                   });
               });

               
               allcheckboxeswa.addEventListener('change', function() {               
                   hideimage();
                   if (allcheckboxeswa.checked ) {
                       showimage();
                       if (walogo) {
                           walogo.addEventListener('click', function() {
                               getCheckedUsers();
                           });
                       }
                   } else {
                       hideimage();
                   }
               });
               
               function showimage() {
                   var buttonsDiv = document.querySelector('.btn-group');
                   var img = document.createElement('img');
                   
                   img.src = '../local/whatsappgen/pix/icon.png';
                   img.alt = 'Published by: Creazilla, Author: Simple Icons Collaborators, Source: github.com/simple-icons/simple-icons, Public Domain. Free for editorial, educational, commercial, and/or personal projects. No attribution required.';
                   img.width = 24;
                   img.height = 24;
                   img.style.float = 'right';
                   img.id = 'walogo' ;
                   img.style.cursor = 'pointer';
                   
                   img.addEventListener('mouseover', function() {
                       img.style.width = '30px';  
                       img.style.height = '30px';
                   });

                   img.addEventListener('mouseout', function() {
                       img.style.width = '25px';  
                       img.style.height = '25px';
                   });

                   buttonsDiv.appendChild(img);
               }

               function hideimage() {
                   var logo = document.getElementById('walogo');
                   if (logo) {
                       logo.parentNode.removeChild(logo);
                   }
               }

               function getCheckedUsers() {
                   var checkboxeswa = document.querySelectorAll('input[id^="user"]:checked');
                   var useridwa = [];
                   checkboxeswa.forEach(function(checkboxwa) {
                       useridwa.push(checkboxwa.name.replace('user' , ''));
                   });

                   if (useridwa.length > 0 && courseid) {
                       var redirectUrl = '../local/whatsappgen/local_whatsappgen.php?userid=' + encodeURIComponent(useridwa.join(',')) + '&courseid=' + courseid;
                       window.location = redirectUrl;
                       } else {
                           // Errorf
                           window.alert("Fehler");
                       }
               }
           }
       });
    }
}
});


