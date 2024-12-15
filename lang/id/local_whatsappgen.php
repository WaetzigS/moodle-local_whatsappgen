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

$string['pluginname'] = 'Generator WhatsApp';
//$string['defaultapp'] = 'Gunakan Aplikasi Desktop WhatsApp sebagai default';
//$string['defaultappdescription'] = 'Jika dicentang, aplikasi desktop WhatsApp adalah default. Jika tidak dicentang, WhatsApp Web adalah default';
$string['addwhatsapp'] = 'Tambahkan Pesan WhatsApp';
$string['error'] = 'Kesalahan fatal dalam generator WhatsApp. Silakan hubungi admin/dukungan';
$string['whatsapp_messagetext'] = 'Teks pesan Anda';
$string['whatsapp_messagetext_buttons'] = 'Buat';
$string['create_message'] = 'Buat pesan baru';
$string['messagetext'] = 'Pesan WhatsApp Anda';
$string['limituser'] = 'Maksimum pesan yang dihasilkan sekaligus';
$string['limituserdescription'] = 'Pilih jumlah maksimum pesan yang dihasilkan sekaligus. Kami merekomendasikan 10. Lebih banyak dapat mempengaruhi kinerja komputer Anda';
$string['defaultnumber'] = 'Nomor WhatsApp Default';
$string['defaultnumberdescription'] = 'Pilih bidang default untuk nomor WhatsApp di profil pengguna.';
$string['defaultdbtracking'] = 'Pelacakan dalam tabel notifikasi database';
$string['defaultdbtrackingdescription'] = 'Opsional, pilih untuk melacak pesan yang dihasilkan dalam tabel notifikasi.';
$string['defaultroles'] = 'Peran yang Diperbolehkan';
$string['defaultrolesdescription'] = 'Peran yang diizinkan untuk menggunakan plugin ini. Harap dicatat bahwa peran ini akan dapat melihat nomor kontak.';
$string['limittext'] = 'Jumlah pengguna yang dipilih melebihi batas ';
$string['labelselect'] = 'Pesan akan dibuat untuk peserta yang diberi tanda hijau.';
$string['cancelmessage'] = 'Tidak ada pesan untuk peserta ini';
$string['nonumber'] = 'Tidak ada nomor yang tersedia';
$string['placeholders'] = 'Ikhtisar placeholder';
$string['phfirstname'] = '%%firstname%% &rarr; nama depan peserta';
$string['phlastname'] = '%%lastname%% &rarr; nama belakang peserta';
$string['phemail'] = '%%email%% &rarr; alamat email peserta';
$string['phgroups'] = '%%groupname%% &rarr; semua grup dalam kursus ini di mana peserta terdaftar';
$string['phfullname'] = '%%fullname%% &rarr; nama lengkap kursus ini';
$string['phshortname'] = '%%shortname%% &rarr; nama pendek kursus ini';
$string['textformatting'] = 'Ikhtisar format teks';
$string['tfbolt'] = '*Teks* &rarr; tebal: ';
$string['tfitalic'] = '_Teks_ &rarr; miring: ';
$string['tfstrikethrough'] = '~Teks~ &rarr; coret: ';
$string['tfmonospace'] = '```Teks``` &rarr; format monospace: ';
$string['licenceinfo'] = 'Ketentuan';
$string['licenceinfodescription'] = 'Saya mengerti bahwa penulis plugin ini tidak bertanggung jawab atas pelanggaran hukum apa pun. Silakan patuhi ketentuan lisensi WhatsApp.<br>Periksa <a href="https://www.whatsapp.com/legal" target="_blank">ketentuan hukum WhatsApp</a>';
