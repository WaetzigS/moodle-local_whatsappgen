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
 * @package    loca_whatsappgen
 * @copyright  2024 Stephan Waetzig
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'WhatsApp Generatoru';
//$string['defaultapp'] = 'WhatsApp Desktop Proqramını standart olaraq istifadə edin';
//$string['defaultappdescription'] = 'Əgər seçilibsə, WhatsApp Desktop proqramı standartdır. Əgər seçilməyibsə, WhatsApp Web standartdır';
$string['addwhatsapp'] = 'WhatsApp Mesajı Əlavə et';
$string['error'] = 'WhatsApp Generatorunda fatal səhv. Zəhmət olmasa admin ilə əlaqə saxlayın';
$string['whatsapp_messagetext'] = 'Mesaj mətniniz';
$string['whatsapp_messagetext_buttons'] = 'Yarat';
$string['create_message'] = 'Yeni mesaj yarat';
$string['messagetext'] = 'Sizin WhatsApp Mesajınız';
$string['limituser'] = 'Eyni anda yaradılan maksimal mesaj sayı';
$string['limituserdescription'] = 'Zəhmət olmasa, eyni anda yaradılan maksimal mesaj sayını seçin. Biz 10 tövsiyə edirik. Daha çox say kompüterinizin performansını təsir edə bilər';
$string['defaultnumber'] = 'Standart WhatsApp Nömrəsi';
$string['defaultnumberdescription'] = 'İstifadəçi profilində WhatsApp nömrəsi üçün standart sahəni seçin.';
$string['defaultdbtracking'] = 'Bildirişlər cədvəlində izləmə';
$string['defaultdbtrackingdescription'] = 'Seçim olaraq, yaradılan mesajları bildirişlər cədvəlində izləmək üçün seçin.';
$string['defaultroles'] = 'İcazəli Rollar';
$string['defaultrolesdescription'] = 'Plugin istifadə etmək üçün icazəli rollar. Qeyd edək ki, bu rollar kontakt nömrələrini görə biləcəklər.';
$string['limittext'] = 'Seçilən istifadəçilərin sayı limitdən artıqdır ';
$string['labelselect'] = 'Mesaj yaşıl rənglə işarələnmiş iştirakçılar üçün yaradılacaq.';
$string['cancelmessage'] = 'Bu iştirakçılar üçün mesajlar yoxdur';
$string['nonumber'] = 'Nömrə mövcud deyil';
$string['placeholders'] = 'Yerləşdiricilərin icmalı';
$string['phfirstname'] = '%%firstname%% &rarr; iştirakçının adı';
$string['phlastname'] = '%%lastname%% &rarr; iştirakçının soyadı';
$string['phemail'] = '%%email%% &rarr; iştirakçının e-poçt ünvanı';
$string['phgroups'] = '%%groupname%% &rarr; iştirakçının yazıldığı bu kursun bütün qrupları';
$string['phfullname'] = '%%fullname%% &rarr; bu kursun tam adı';
$string['phshortname'] = '%%shortname%% &rarr; bu kursun qısa adı';
$string['textformatting'] = 'Mətn formatlaşdırmasının icmalı';
$string['tfbolt'] = '*Mətn* &rarr; qalın: ';
$string['tfitalic'] = '_Mətn_ &rarr; italic: ';
$string['tfstrikethrough'] = '~Mətn~ &rarr; üstündən xətt çəkilmiş: ';
$string['tfmonospace'] = '```Mətn``` &rarr; monospace formatı: ';
$string['licenceinfo'] = 'Şərtlər';
$string['licenceinfodescription'] = 'Bu plagin müəllifinin hər hansı hüquqi pozuntuya görə məsuliyyət daşımadığını başa düşürəm. Zəhmət olmasa, WhatsApp lisenziya şərtlərinə riayət edin.<br>Zəhmət olmasa <a href="https://www.whatsapp.com/legal" target="_blank">WhatsApp hüquqi şərtlərini</a> yoxlayın';





