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
//$string['defaultapp'] = 'Utilizați aplicația de desktop WhatsApp ca implicită';
//$string['defaultappdescription'] = 'Dacă este bifat, aplicația de desktop WhatsApp este implicită. Dacă nu este bifat, WhatsApp Web este implicit';
$string['addwhatsapp'] = 'Adăugați mesaj WhatsApp';
$string['error'] = 'Eroare fatală în generatorul WhatsApp. Vă rugăm să contactați administratorul/suportul';
$string['whatsapp_messagetext'] = 'Textul mesajului dvs.';
$string['whatsapp_messagetext_buttons'] = 'Generați';
$string['create_message'] = 'Creați un mesaj nou';
$string['messagetext'] = 'Mesajul dvs. WhatsApp';
$string['limituser'] = 'Mesaje generate maxim simultan';
$string['limituserdescription'] = 'Vă rugăm să alegeți numărul maxim de mesaje generate simultan. Recomandăm 10. Mai multe pot afecta performanța computerului dvs.';
$string['defaultnumber'] = 'Număr WhatsApp implicit';
$string['defaultnumberdescription'] = 'Selectați câmpul implicit pentru numărul WhatsApp în profilul utilizatorului.';
$string['defaultdbtracking'] = 'Urmărire în tabelul de notificări al bazei de date';
$string['defaultdbtrackingdescription'] = 'Opțional, alegeți să urmăriți mesajele generate în tabelul de notificări.';
$string['defaultroles'] = 'Roluri permise';
$string['defaultrolesdescription'] = 'Roluri permise să utilizeze pluginul. Vă rugăm să rețineți că aceste roluri vor putea vedea numerele de contact.';
$string['limittext'] = 'Numărul de utilizatori selectați depășește limita de ';
$string['labelselect'] = 'Mesajul va fi generat pentru participanții marcați cu verde.';
$string['cancelmessage'] = 'Nu există mesaje pentru acești participanți';
$string['nonumber'] = 'Nu există niciun număr disponibil';
$string['placeholders'] = 'Prezentare generală a substituenților';
$string['phfirstname'] = '%%firstname%% &rarr; prenumele participantului';
$string['phlastname'] = '%%lastname%% &rarr; numele de familie al participantului';
$string['phemail'] = '%%email%% &rarr; adresa de email a participantului';
$string['phgroups'] = '%%groupname%% &rarr; toate grupurile din acest curs în care participantul este înscris';
$string['phfullname'] = '%%fullname%% &rarr; numele complet al acestui curs';
$string['phshortname'] = '%%shortname%% &rarr; numele scurt al acestui curs';
$string['textformatting'] = 'Prezentare generală a formatarea textului';
$string['tfbolt'] = '*Text* &rarr; îngroșat: ';
$string['tfitalic'] = '_Text_ &rarr; cursiv: ';
$string['tfstrikethrough'] = '~Text~ &rarr; tăiat: ';
$string['tfmonospace'] = '```Text``` &rarr; format monospațiu: ';
$string['licenceinfo'] = 'Condiții';
$string['licenceinfodescription'] = 'Înțeleg că autorul acestui plugin nu își asumă nicio responsabilitate pentru încălcările legale. Vă rugăm să respectați termenii de licențiere ai WhatsApp.<br>Vă rugăm să verificați <a href="https://www.whatsapp.com/legal" target="_blank">termenii legali ai WhatsApp</a>';
