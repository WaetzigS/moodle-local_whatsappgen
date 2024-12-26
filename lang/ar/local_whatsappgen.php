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

$string['pluginname'] = 'مولد واتساب';
$string['privacy:metadata'] = 'هذا المكون الإضافي لا يخزن أي بيانات شخصية.';
$string['addwhatsapp'] = 'إضافة رسالة واتساب';
$string['error'] = 'خطأ فادح في مولد واتساب. يرجى الاتصال بالدعم الفني';
$string['whatsapp_messagetext'] = 'نص رسالتك';
$string['whatsapp_messagetext_buttons'] = 'توليد';
$string['create_message'] = 'إنشاء رسالة جديدة';
$string['messagetext'] = 'رسالة واتساب الخاصة بك';
$string['limituser'] = 'الحد الأقصى للرسائل المولدة مرة واحدة';
$string['limituserdescription'] = 'يرجى اختيار الحد الأقصى للرسائل المولدة في وقت واحد. نحن نوصي بـ 10. يمكن أن يؤثر العدد الأكبر على أداء جهاز الكمبيوتر الخاص بك';
$string['defaultnumber'] = 'رقم واتساب الافتراضي';
$string['defaultnumberdescription'] = 'اختر الحقل الافتراضي لرقم واتساب في الملف الشخصي للمستخدم.';
$string['defaultdbtracking'] = 'التتبع في جدول قاعدة البيانات whatsappgen_messages';
$string['defaultdbtrackingdescription'] = 'اختيارياً، اختر لتتبع الرسائل المولدة في whatsappgen_messages.';
$string['defaultroles'] = 'الأدوار المسموح بها';
$string['defaultrolesdescription'] = 'الأدوار المسموح لها باستخدام الإضافة. يرجى ملاحظة أن هذه الأدوار ستتمكن من رؤية أرقام الاتصال.';
$string['limittext'] = 'عدد المستخدمين المحددين يتجاوز الحد المسموح به وهو ';
$string['labelselect'] = 'سيتم إنشاء الرسالة للمشاركين المميزين باللون الأخضر.';
$string['cancelmessage'] = 'لا توجد رسائل لهؤلاء المشاركين';
$string['nonumber'] = 'لا يوجد رقم متاح';
$string['placeholders'] = 'نظرة عامة على العناصر النائبة';
$string['phfirstname'] = '%%firstname%% &rarr; الاسم الأول للمشارك';
$string['phlastname'] = '%%lastname%% &rarr; اسم العائلة للمشارك';
$string['phemail'] = '%%email%% &rarr; عنوان البريد الإلكتروني للمشارك';
$string['phgroups'] = '%%groupname%% &rarr; جميع المجموعات في هذا الدورة التي سجل فيها المشارك';
$string['phfullname'] = '%%fullname%% &rarr; الاسم الكامل لهذا الدورة';
$string['phshortname'] = '%%shortname%% &rarr; الاسم المختصر لهذا الدورة';
$string['textformatting'] = 'نظرة عامة على تنسيق النص';
$string['tfbolt'] = '*النص* &rarr; عريض: ';
$string['tfitalic'] = '_النص_ &rarr; مائل: ';
$string['tfstrikethrough'] = '~النص~ &rarr; مشطوب: ';
$string['tfmonospace'] = '```النص``` &rarr; صيغة الحروف المتباعدة: ';
$string['licenceinfo'] = 'الشروط';
$string['licenceinfodescription'] = 'أفهم أن مؤلف هذه الإضافة لا يتحمل أي مسؤولية عن أي انتهاكات قانونية. يرجى الالتزام بشروط ترخيص واتساب.<br>يرجى مراجعة <a href="https://www.whatsapp.com/legal" target="_blank">الشروط القانونية لواتساب</a>';






