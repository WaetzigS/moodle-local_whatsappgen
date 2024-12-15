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

$string['pluginname'] = 'WhatsApp Генератор';
//$string['defaultapp'] = 'Използвайте WhatsApp Desktop като стандартно приложение';
//$string['defaultappdescription'] = 'Ако е отметнато, WhatsApp Desktop приложението е по подразбиране. Ако не е отметнато, WhatsApp Web е по подразбиране';
$string['addwhatsapp'] = 'Добави WhatsApp съобщение';
$string['error'] = 'Фатална грешка в WhatsApp генератора. Моля, свържете се с администратора / поддръжката';
$string['whatsapp_messagetext'] = 'Текст на вашето съобщение';
$string['whatsapp_messagetext_buttons'] = 'Генерирай';
$string['create_message'] = 'Създайте ново съобщение';
$string['messagetext'] = 'Вашето WhatsApp съобщение';
$string['limituser'] = 'Максимален брой генерирани съобщения наведнъж';
$string['limituserdescription'] = 'Моля, изберете максималния брой генерирани съобщения наведнъж. Препоръчваме 10. По-голям брой може да повлияе на производителността на компютъра ви';
$string['defaultnumber'] = 'Стандартен WhatsApp номер';
$string['defaultnumberdescription'] = 'Изберете стандартното поле за WhatsApp номера в потребителския профил.';
$string['defaultdbtracking'] = 'Проследяване в таблицата за известия в базата данни';
$string['defaultdbtrackingdescription'] = 'Опционално, изберете да проследявате генерираните съобщения в таблицата за известия.';
$string['defaultroles'] = 'Позволени роли';
$string['defaultrolesdescription'] = 'Ролите, които имат право да използват плъгина. Моля, обърнете внимание, че тези роли ще могат да виждат контактните номера.';
$string['limittext'] = 'Броят на избраните потребители надвишава лимита от ';
$string['labelselect'] = 'Съобщението ще бъде генерирано за участниците, маркирани в зелено';
$string['cancelmessage'] = 'Няма съобщения за тези участници';
$string['nonumber'] = 'Няма наличен номер';
$string['placeholders'] = 'Преглед на заместителите';
$string['phfirstname'] = '%%firstname%% &rarr; първо име на участника';
$string['phlastname'] = '%%lastname%% &rarr; фамилно име на участника';
$string['phemail'] = '%%email%% &rarr; имейл адрес на участника';
$string['phgroups'] = '%%groupname%% &rarr; всички групи в този курс, в които участникът е записан';
$string['phfullname'] = '%%fullname%% &rarr; пълно име на този курс';
$string['phshortname'] = '%%shortname%% &rarr; кратко име на този курс';
$string['textformatting'] = 'Преглед на форматирането на текста';
$string['tfbolt'] = '*Текст* &rarr; удебелен: ';
$string['tfitalic'] = '_Текст_ &rarr; курсив: ';
$string['tfstrikethrough'] = '~Текст~ &rarr; задраскан: ';
$string['tfmonospace'] = '```Текст``` &rarr; формат с еднакъв интервал: ';
$string['licenceinfo'] = 'Условия';
$string['licenceinfodescription'] = 'Разбирам, че авторът на този плъгин не носи отговорност за каквито и да било правни нарушения. Моля, спазвайте условията за лицензиране на WhatsApp.<br>Моля, проверете <a href="https://www.whatsapp.com/legal" target="_blank">правните условия на WhatsApp</a>';




