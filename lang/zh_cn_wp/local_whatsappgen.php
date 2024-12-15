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

$string['pluginname'] = 'WhatsApp 生成器';
//$string['defaultapp'] = '默认使用 WhatsApp 桌面应用程序';
//$string['defaultappdescription'] = '如果选中，默认使用 WhatsApp 桌面应用程序。如果未选中，则默认使用 WhatsApp Web';
$string['addwhatsapp'] = '添加 WhatsApp 消息';
$string['error'] = 'WhatsApp 生成器中的致命错误。请联系管理员/支持';
$string['whatsapp_messagetext'] = '您的消息文本';
$string['whatsapp_messagetext_buttons'] = '生成';
$string['create_message'] = '创建新消息';
$string['messagetext'] = '您的 WhatsApp 消息';
$string['limituser'] = '一次生成的最大消息数';
$string['limituserdescription'] = '请选择一次生成的最大消息数。我们建议 10 条。更多可能会影响计算机性能';
$string['defaultnumber'] = '默认 WhatsApp 号码';
$string['defaultnumberdescription'] = '选择用户资料中 WhatsApp 号码的默认字段。';
$string['defaultdbtracking'] = '在数据库通知表中跟踪';
$string['defaultdbtrackingdescription'] = '可选，选择在通知表中跟踪生成的消息。';
$string['defaultroles'] = '允许的角色';
$string['defaultrolesdescription'] = '允许使用插件的角色。请注意，这些角色将能够看到联系号码。';
$string['limittext'] = '选定用户的数量超过了限制 ';
$string['labelselect'] = '信息将为标记为绿色的参与者生成。';
$string['cancelmessage'] = '这些参与者没有消息';
$string['nonumber'] = '没有可用号码';
$string['placeholders'] = '占位符概述';
$string['phfirstname'] = '%%firstname%% &rarr; 参与者的名字';
$string['phlastname'] = '%%lastname%% &rarr; 参与者的姓氏';
$string['phemail'] = '%%email%% &rarr; 参与者的电子邮件地址';
$string['phgroups'] = '%%groupname%% &rarr; 参与者在此课程中注册的所有组';
$string['phfullname'] = '%%fullname%% &rarr; 该课程的全名';
$string['phshortname'] = '%%shortname%% &rarr; 该课程的简称';
$string['textformatting'] = '文本格式概述';
$string['tfbolt'] = '*文本* &rarr; 粗体: ';
$string['tfitalic'] = '_文本_ &rarr; 斜体: ';
$string['tfstrikethrough'] = '~文本~ &rarr; 删除线: ';
$string['tfmonospace'] = '```文本``` &rarr; 等宽字体格式: ';
$string['licenceinfo'] = '条款';
$string['licenceinfodescription'] = '我明白此插件的作者不对任何法律违规行为负责。请遵守 WhatsApp 的许可条款。<br>请查看 <a href="https://www.whatsapp.com/legal" target="_blank">WhatsApp 的法律条款</a>';
