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

$string['pluginname'] = 'Генератор WhatsApp';
$string['privacy:metadata'] = 'Цей плагін не зберігає персональні дані.';
$string['addwhatsapp'] = 'Додати повідомлення WhatsApp';
$string['error'] = 'Фатальна помилка у генераторі WhatsApp. Будь ласка, зверніться до адміністратора/підтримки';
$string['whatsapp_messagetext'] = 'Текст вашого повідомлення';
$string['whatsapp_messagetext_buttons'] = 'Згенерувати';
$string['create_message'] = 'Створити нове повідомлення';
$string['messagetext'] = 'Ваше повідомлення WhatsApp';
$string['limituser'] = 'Максимальна кількість повідомлень, що створюються одночасно';
$string['limituserdescription'] = 'Будь ласка, виберіть максимальну кількість повідомлень, що створюються одночасно. Рекомендуємо 10. Більша кількість може вплинути на продуктивність вашого комп’ютера';
$string['defaultnumber'] = 'Номер WhatsApp за замовчуванням';
$string['defaultnumberdescription'] = 'Виберіть поле за замовчуванням для номера WhatsApp у профілі користувача.';
$string['defaultdbtracking'] = 'Відстеження в таблиці бази даних whatsappgen_messages';
$string['defaultdbtrackingdescription'] = 'Опціонально оберіть для відстеження створених повідомлень у whatsappgen_messages.';
$string['defaultroles'] = 'Дозволені ролі';
$string['defaultrolesdescription'] = 'Ролі, яким дозволено використовувати плагін. Зверніть увагу, що ці ролі зможуть бачити контактні номери.';
$string['limittext'] = 'Кількість вибраних користувачів перевищує ліміт у ';
$string['labelselect'] = 'Повідомлення буде згенеровано для учасників, позначених зеленим кольором.';
$string['cancelmessage'] = 'Немає повідомлень для цих учасників';
$string['nonumber'] = 'Немає доступного номера';
$string['placeholders'] = 'Огляд заповнювачів';
$string['phfirstname'] = '%%firstname%% &rarr; ім’я учасника';
$string['phlastname'] = '%%lastname%% &rarr; прізвище учасника';
$string['phemail'] = '%%email%% &rarr; електронна адреса учасника';
$string['phgroups'] = '%%groupname%% &rarr; всі групи у цьому курсі, в яких зареєстрований учасник';
$string['phfullname'] = '%%fullname%% &rarr; повна назва цього курсу';
$string['phshortname'] = '%%shortname%% &rarr; коротка назва цього курсу';
$string['textformatting'] = 'Огляд форматування тексту';
$string['tfbolt'] = '*Текст* &rarr; жирний: ';
$string['tfitalic'] = '_Текст_ &rarr; курсив: ';
$string['tfstrikethrough'] = '~Текст~ &rarr; перекреслений: ';
$string['tfmonospace'] = '```Текст``` &rarr; формат з однаковим інтервалом: ';
$string['licenceinfo'] = 'Умови';
$string['licenceinfodescription'] = 'Я розумію, що автор цього плагіна не несе відповідальності за будь-які правопорушення. Будь ласка, дотримуйтесь умов ліцензії WhatsApp.<br>Будь ласка, перевірте <a href="https://www.whatsapp.com/legal" target="_blank">правові умови WhatsApp</a>';
