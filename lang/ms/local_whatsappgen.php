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

$string['pluginname'] = 'Generator WhatsApp';
$string['privacy:metadata:local_whatsappgen'] = 'Maklumat yang disimpan oleh WhatsApp.';
$string['privacy:metadata:local_whatsappgen:useridfrom'] = 'ID pengguna yang menghantar mesej.';
$string['privacy:metadata:local_whatsappgen:userid_to'] = 'ID pengguna yang menerima mesej.';
$string['privacy:metadata:local_whatsappgen:message'] = 'Kandungan mesej.';
$string['privacy:metadata:local_whatsappgen:timecreated'] = 'Tarikh penciptaan mesej.';
$string['addwhatsapp'] = 'Tambah Mesej WhatsApp';
$string['error'] = 'Ralat fatal dalam generator WhatsApp. Sila hubungi admin/sokongan';
$string['whatsapp_messagetext'] = 'Teks mesej anda';
$string['whatsapp_messagetext_buttons'] = 'Hasilkan';
$string['create_message'] = 'Buat mesej baru';
$string['messagetext'] = 'Mesej WhatsApp anda';
$string['limituser'] = 'Jumlah maksimum mesej yang dihasilkan sekaligus';
$string['limituserdescription'] = 'Sila pilih jumlah maksimum mesej yang dihasilkan sekaligus. Kami mengesyorkan 10. Lebih banyak boleh mempengaruhi prestasi komputer anda';
$string['defaultnumber'] = 'Nombor WhatsApp Lalai';
$string['defaultnumberdescription'] = 'Pilih medan lalai untuk nombor WhatsApp dalam profil pengguna.';
$string['defaultdbtracking'] = 'Penjejakan dalam jadual pangkalan data whatsappgen_messages';
$string['defaultdbtrackingdescription'] = 'Pilih secara opsional untuk menjejak mesej yang dijana dalam whatsappgen_messages.';
$string['defaultroles'] = 'Peranan yang Dibenarkan';
$string['defaultrolesdescription'] = 'Peranan yang dibenarkan menggunakan plugin. Sila ambil perhatian bahawa peranan ini akan dapat melihat nombor hubungan.';
$string['limittext'] = 'Bilangan pengguna yang dipilih melebihi had ';
$string['labelselect'] = 'Mesej akan dijana untuk peserta yang ditanda hijau.';
$string['cancelmessage'] = 'Tiada mesej untuk peserta ini';
$string['nonumber'] = 'Tiada nombor tersedia';
$string['placeholders'] = 'Tinjauan placeholder';
$string['phfirstname'] = '%%firstname%% &rarr; nama pertama peserta';
$string['phlastname'] = '%%lastname%% &rarr; nama belakang peserta';
$string['phemail'] = '%%email%% &rarr; alamat e-mel peserta';
$string['phgroups'] = '%%groupname%% &rarr; semua kumpulan dalam kursus ini di mana peserta telah mendaftar';
$string['phfullname'] = '%%fullname%% &rarr; nama penuh kursus ini';
$string['phshortname'] = '%%shortname%% &rarr; nama pendek kursus ini';
$string['textformatting'] = 'Tinjauan Pemformatan Teks';
$string['tfbolt'] = '*Teks* &rarr; tebal: ';
$string['tfitalic'] = '_Teks_ &rarr; italic: ';
$string['tfstrikethrough'] = '~Teks~ &rarr; coret: ';
$string['tfmonospace'] = '```Teks``` &rarr; format monospace: ';
$string['licenceinfo'] = 'Syarat-syarat';
$string['licenceinfodescription'] = 'Saya faham bahawa penulis plugin ini tidak bertanggungjawab atas sebarang pelanggaran undang-undang. Sila patuhi syarat pelesenan WhatsApp.<br>Sila semak <a href="https://www.whatsapp.com/legal" target="_blank">syarat undang-undang WhatsApp</a>';
