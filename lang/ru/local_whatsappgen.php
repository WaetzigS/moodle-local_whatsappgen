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
$string['privacy:metadata'] = 'Этот плагин не хранит персональные данные.';
$string['addwhatsapp'] = 'Добавить сообщение WhatsApp';
$string['error'] = 'Фатальная ошибка в генераторе WhatsApp. Пожалуйста, свяжитесь с администратором/поддержкой';
$string['whatsapp_messagetext'] = 'Текст вашего сообщения';
$string['whatsapp_messagetext_buttons'] = 'Создать';
$string['create_message'] = 'Создать новое сообщение';
$string['messagetext'] = 'Ваше сообщение в WhatsApp';
$string['limituser'] = 'Максимальное количество сообщений, создаваемых за раз';
$string['limituserdescription'] = 'Пожалуйста, выберите максимальное количество сообщений, создаваемых за раз. Мы рекомендуем 10. Большее количество может повлиять на производительность вашего компьютера';
$string['defaultnumber'] = 'Номер WhatsApp по умолчанию';
$string['defaultnumberdescription'] = 'Выберите поле по умолчанию для номера WhatsApp в профиле пользователя.';
$string['defaultdbtracking'] = 'Отслеживание в таблице базы данных whatsappgen_messages';
$string['defaultdbtrackingdescription'] = 'Опционально выберите для отслеживания созданных сообщений в whatsappgen_messages.';
$string['defaultroles'] = 'Разрешенные роли';
$string['defaultrolesdescription'] = 'Роли, которым разрешено использовать плагин. Обратите внимание, что эти роли смогут видеть контактные номера.';
$string['limittext'] = 'Количество выбранных пользователей превышает лимит в ';
$string['labelselect'] = 'Сообщение будет сгенерировано для участников, отмеченных зеленым цветом.';
$string['cancelmessage'] = 'Нет сообщений для этих участников';
$string['nonumber'] = 'Нет доступного номера';
$string['placeholders'] = 'Обзор заполнительных символов';
$string['phfirstname'] = '%%firstname%% &rarr; имя участника';
$string['phlastname'] = '%%lastname%% &rarr; фамилия участника';
$string['phemail'] = '%%email%% &rarr; электронный адрес участника';
$string['phgroups'] = '%%groupname%% &rarr; все группы на этом курсе, в которых зарегистрирован участник';
$string['phfullname'] = '%%fullname%% &rarr; полное название этого курса';
$string['phshortname'] = '%%shortname%% &rarr; краткое название этого курса';
$string['textformatting'] = 'Обзор форматирования текста';
$string['tfbolt'] = '*Текст* &rarr; жирный: ';
$string['tfitalic'] = '_Текст_ &rarr; курсив: ';
$string['tfstrikethrough'] = '~Текст~ &rarr; зачеркнутый: ';
$string['tfmonospace'] = '```Текст``` &rarr; моноширинный формат: ';
$string['licenceinfo'] = 'Условия';
$string['licenceinfodescription'] = 'Я понимаю, что автор этого плагина не несет ответственности за любые правонарушения. Пожалуйста, соблюдайте лицензионные условия WhatsApp.<br>Пожалуйста, ознакомьтесь с <a href="https://www.whatsapp.com/legal" target="_blank">юридическими условиями WhatsApp</a>';
