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

$string['pluginname'] = 'โปรแกรมสร้าง WhatsApp';
$string['privacy:metadata'] = 'ปลั๊กอินนี้ไม่เก็บข้อมูลส่วนตัวใด ๆ';
$string['addwhatsapp'] = 'เพิ่มข้อความ WhatsApp';
$string['error'] = 'ข้อผิดพลาดร้ายแรงในโปรแกรมสร้าง WhatsApp กรุณาติดต่อผู้ดูแลระบบ/ฝ่ายสนับสนุน';
$string['whatsapp_messagetext'] = 'ข้อความของคุณ';
$string['whatsapp_messagetext_buttons'] = 'สร้าง';
$string['create_message'] = 'สร้างข้อความใหม่';
$string['messagetext'] = 'ข้อความ WhatsApp ของคุณ';
$string['limituser'] = 'จำนวนข้อความสูงสุดที่สร้างได้ในครั้งเดียว';
$string['limituserdescription'] = 'กรุณาเลือกจำนวนข้อความสูงสุดที่สามารถสร้างได้ในครั้งเดียว เราขอแนะนำ 10 ข้อความ หากมากกว่านี้อาจส่งผลต่อประสิทธิภาพของคอมพิวเตอร์';
$string['defaultnumber'] = 'หมายเลข WhatsApp เริ่มต้น';
$string['defaultnumberdescription'] = 'เลือกฟิลด์เริ่มต้นสำหรับหมายเลข WhatsApp ในโปรไฟล์ผู้ใช้';
$string['defaultdbtracking'] = 'การติดตามในตารางฐานข้อมูล whatsappgen_messages';
$string['defaultdbtrackingdescription'] = 'เลือกตัวเลือกนี้เพื่อติดตามข้อความที่สร้างขึ้นใน whatsappgen_messages.';
$string['defaultroles'] = 'บทบาทที่อนุญาต';
$string['defaultrolesdescription'] = 'บทบาทที่อนุญาตให้ใช้ปลั๊กอินได้ กรุณาทราบว่าบทบาทเหล่านี้จะสามารถเห็นหมายเลขติดต่อได้';
$string['limittext'] = 'จำนวนผู้ใช้ที่เลือกเกินขีดจำกัดที่กำหนดไว้ ';
$string['labelselect'] = 'ข้อความจะถูกสร้างขึ้นสำหรับผู้เข้าร่วมที่ทำเครื่องหมายเป็นสีเขียว';
$string['cancelmessage'] = 'ไม่มีข้อความสำหรับผู้เข้าร่วมเหล่านี้';
$string['nonumber'] = 'ไม่มีหมายเลขที่พร้อมใช้งาน';
$string['placeholders'] = 'ภาพรวมของ Placeholder';
$string['phfirstname'] = '%%firstname%% &rarr; ชื่อผู้เข้าร่วม';
$string['phlastname'] = '%%lastname%% &rarr; นามสกุลผู้เข้าร่วม';
$string['phemail'] = '%%email%% &rarr; ที่อยู่อีเมลของผู้เข้าร่วม';
$string['phgroups'] = '%%groupname%% &rarr; กลุ่มทั้งหมดในหลักสูตรนี้ที่ผู้เข้าร่วมลงทะเบียน';
$string['phfullname'] = '%%fullname%% &rarr; ชื่อเต็มของหลักสูตรนี้';
$string['phshortname'] = '%%shortname%% &rarr; ชื่อย่อของหลักสูตรนี้';
$string['textformatting'] = 'ภาพรวมของการจัดรูปแบบข้อความ';
$string['tfbolt'] = '*ข้อความ* &rarr; หนา: ';
$string['tfitalic'] = '_ข้อความ_ &rarr; เอียง: ';
$string['tfstrikethrough'] = '~ข้อความ~ &rarr; ขีดทับ: ';
$string['tfmonospace'] = '```ข้อความ``` &rarr; รูปแบบ monospace: ';
$string['licenceinfo'] = 'เงื่อนไข';
$string['licenceinfodescription'] = 'ผมเข้าใจว่าผู้เขียนปลั๊กอินนี้ไม่รับผิดชอบต่อการละเมิดกฎหมายใด ๆ กรุณาปฏิบัติตามเงื่อนไขการให้บริการของ WhatsApp.<br>กรุณาตรวจสอบ <a href="https://www.whatsapp.com/legal" target="_blank">เงื่อนไขทางกฎหมายของ WhatsApp</a>';
