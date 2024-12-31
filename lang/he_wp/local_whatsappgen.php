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

$string['pluginname'] = 'מחולל WhatsApp';
$string['privacy:metadata:local_whatsappgen'] = 'מידע שנשמר על ידי WhatsApp.';
$string['privacy:metadata:local_whatsappgen:useridfrom'] = 'מזהה המשתמש ששלח את ההודעה.';
$string['privacy:metadata:local_whatsappgen:userid_to'] = 'מזהה המשתמש שקיבל את ההודעה.';
$string['privacy:metadata:local_whatsappgen:message'] = 'תוכן ההודעה.';
$string['privacy:metadata:local_whatsappgen:timecreated'] = 'תאריך יצירת ההודעה.';
$string['addwhatsapp'] = 'הוסף הודעת WhatsApp';
$string['error'] = 'שגיאה חמורה במחולל WhatsApp. אנא פנה לתמיכה';
$string['whatsapp_messagetext'] = 'טקסט ההודעה שלך';
$string['whatsapp_messagetext_buttons'] = 'צור';
$string['create_message'] = 'צור הודעה חדשה';
$string['messagetext'] = 'ההודעה שלך ב-WhatsApp';
$string['limituser'] = 'מספר הודעות מרבי ליצירה בו זמנית';
$string['limituserdescription'] = 'אנא בחר את המספר המרבי של הודעות שנוצרות בו זמנית. אנו ממליצים על 10. מספר גדול יותר יכול להשפיע על ביצועי המחשב שלך';
$string['defaultnumber'] = 'מספר WhatsApp ברירת מחדל';
$string['defaultnumberdescription'] = 'בחר את השדה ברירת מחדל עבור מספר WhatsApp בפרופיל המשתמש.';
$string['defaultdbtracking'] = 'מעקב בטבלת בסיס הנתונים whatsappgen_messages';
$string['defaultdbtrackingdescription'] = 'בחר באופן אופציונלי לעקוב אחר הודעות שנוצרו בטבלת whatsappgen_messages.';
$string['defaultroles'] = 'תפקידים מותרים';
$string['defaultrolesdescription'] = 'תפקידים המורשים להשתמש בתוסף. שים לב שהתפקידים הללו יוכלו לראות את מספרי הקשר.';
$string['limittext'] = 'מספר המשתמשים שנבחרו עולה על המגבלה של ';
$string['labelselect'] = 'ההודעה תיווצר עבור המשתתפים המסומנים בירוק';
$string['cancelmessage'] = 'אין הודעות למשתתפים אלו';
$string['nonumber'] = 'אין מספר זמין';
$string['placeholders'] = 'סקירה כללית של המציבים';
$string['phfirstname'] = '%%firstname%% &rarr; שם פרטי של המשתתף';
$string['phlastname'] = '%%lastname%% &rarr; שם משפחה של המשתתף';
$string['phemail'] = '%%email%% &rarr; כתובת דוא"ל של המשתתף';
$string['phgroups'] = '%%groupname%% &rarr; כל הקבוצות בקורס זה בהן המשתתף נרשם';
$string['phfullname'] = '%%fullname%% &rarr; שם מלא של קורס זה';
$string['phshortname'] = '%%shortname%% &rarr; שם קצר של קורס זה';
$string['textformatting'] = 'סקירה כללית של עיצוב הטקסט';
$string['tfbolt'] = '*טקסט* &rarr; מודגש: ';
$string['tfitalic'] = '_טקסט_ &rarr; נטוי: ';
$string['tfstrikethrough'] = '~טקסט~ &rarr; מחוק: ';
$string['tfmonospace'] = '```טקסט``` &rarr; תצורת רווחים קבועה: ';
$string['licenceinfo'] = 'תנאים';
$string['licenceinfodescription'] = 'אני מבין כי מחבר התוסף הזה אינו נושא באחריות כלשהי להפרות חוקיות. אנא שמרו על תנאי הרישוי של WhatsApp.<br>אנא בדוק את <a href="https://www.whatsapp.com/legal" target="_blank">התנאים המשפטיים של WhatsApp</a>';


