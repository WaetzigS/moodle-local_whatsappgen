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

$string['pluginname'] = 'WhatsAppジェネレーター';
$string['privacy:metadata'] = 'このプラグインは個人情報を保存しません。';
$string['addwhatsapp'] = 'WhatsAppメッセージを追加';
$string['error'] = 'WhatsAppジェネレーターの致命的なエラーです。管理者/サポートに連絡してください';
$string['whatsapp_messagetext'] = 'メッセージのテキスト';
$string['whatsapp_messagetext_buttons'] = '生成';
$string['create_message'] = '新しいメッセージを作成';
$string['messagetext'] = 'あなたのWhatsAppメッセージ';
$string['limituser'] = '一度に生成される最大メッセージ数';
$string['limituserdescription'] = '一度に生成される最大メッセージ数を選択してください。10を推奨します。これ以上はコンピュータのパフォーマンスに影響を与える可能性があります';
$string['defaultnumber'] = 'デフォルトのWhatsApp番号';
$string['defaultnumberdescription'] = 'ユーザープロファイルのWhatsApp番号のデフォルトフィールドを選択します。';
$string['defaultdbtracking'] = 'データベーステーブルwhatsappgen_messagesでの追跡';
$string['defaultdbtrackingdescription'] = 'オプションで、生成されたメッセージをwhatsappgen_messagesで追跡します。';
$string['defaultroles'] = '許可された役割';
$string['defaultrolesdescription'] = 'プラグインの使用を許可された役割。これらの役割は連絡先番号を表示できることに注意してください。';
$string['limittext'] = '選択されたユーザーの数が制限を超えています ';
$string['labelselect'] = 'メッセージは、緑でマークされた参加者に生成されます。';
$string['cancelmessage'] = 'これらの参加者にはメッセージがありません';
$string['nonumber'] = '利用可能な番号がありません';
$string['placeholders'] = 'プレースホルダーの概要';
$string['phfirstname'] = '%%firstname%% &rarr; 参加者の名前';
$string['phlastname'] = '%%lastname%% &rarr; 参加者の姓';
$string['phemail'] = '%%email%% &rarr; 参加者のメールアドレス';
$string['phgroups'] = '%%groupname%% &rarr; このコースで参加者が登録されているすべてのグループ';
$string['phfullname'] = '%%fullname%% &rarr; このコースのフルネーム';
$string['phshortname'] = '%%shortname%% &rarr; このコースの略称';
$string['textformatting'] = 'テキストフォーマットの概要';
$string['tfbolt'] = '*テキスト* &rarr; 太字: ';
$string['tfitalic'] = '_テキスト_ &rarr; 斜体: ';
$string['tfstrikethrough'] = '~テキスト~ &rarr; 打消し: ';
$string['tfmonospace'] = '```テキスト``` &rarr; モノスペースフォーマット: ';
$string['licenceinfo'] = '条件';
$string['licenceinfodescription'] = 'このプラグインの作成者は、いかなる法的侵害にも責任を負わないことを理解しています。WhatsAppのライセンス条件を遵守してください。<br>WhatsAppの<a href="https://www.whatsapp.com/legal" target="_blank">法的条件</a>を確認してください';
