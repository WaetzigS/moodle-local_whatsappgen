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

$string['pluginname'] = 'WhatsApp Generator';
//$string['defaultapp'] = 'Brug WhatsApp Desktop-applikation som standard';
//$string['defaultappdescription'] = 'Hvis markeret, er WhatsApp Desktop-applikationen standard. Hvis ikke markeret, er WhatsApp Web standard';
$string['addwhatsapp'] = 'Tilføj WhatsApp-besked';
$string['error'] = 'Fatal fejl i WhatsApp-generatoren. Kontakt venligst admin/support';
$string['whatsapp_messagetext'] = 'Din beskedtekst';
$string['whatsapp_messagetext_buttons'] = 'Generér';
$string['create_message'] = 'Opret en ny besked';
$string['messagetext'] = 'Din WhatsApp-besked';
$string['limituser'] = 'Maksimalt genererede beskeder ad gangen';
$string['limituserdescription'] = 'Vælg venligst det maksimale antal genererede beskeder ad gangen. Vi anbefaler 10. Flere kan påvirke din computers ydeevne';
$string['defaultnumber'] = 'Standard WhatsApp-nummer';
$string['defaultnumberdescription'] = 'Vælg standardfeltet for WhatsApp-nummer i brugerprofilen.';
$string['defaultdbtracking'] = 'Sporing i databasen tabel Notifikationer';
$string['defaultdbtrackingdescription'] = 'Valgfrit, vælg at spore genererede beskeder i notifikationstabellen.';
$string['defaultroles'] = 'Tilladte roller';
$string['defaultrolesdescription'] = 'Roller, der har tilladelse til at bruge pluginet. Bemærk venligst, at disse roller kan se kontaktoplysninger.';
$string['limittext'] = 'Antallet af valgte brugere overskrider grænsen på ';
$string['labelselect'] = 'Beskeden vil blive genereret til deltagere markeret med grønt.';
$string['cancelmessage'] = 'Ingen beskeder til disse deltagere';
$string['nonumber'] = 'Intet nummer tilgængeligt';
$string['placeholders'] = 'Oversigt over pladsholdere';
$string['phfirstname'] = '%%firstname%% &rarr; deltagerens fornavn';
$string['phlastname'] = '%%lastname%% &rarr; deltagerens efternavn';
$string['phemail'] = '%%email%% &rarr; deltagerens e-mailadresse';
$string['phgroups'] = '%%groupname%% &rarr; alle grupper i dette kursus, hvor deltageren er tilmeldt';
$string['phfullname'] = '%%fullname%% &rarr; fulde navn på dette kursus';
$string['phshortname'] = '%%shortname%% &rarr; korte navn på dette kursus';
$string['textformatting'] = 'Oversigt over tekstformatering';
$string['tfbolt'] = '*Tekst* &rarr; fed skrift: ';
$string['tfitalic'] = '_Tekst_ &rarr; kursiv: ';
$string['tfstrikethrough'] = '~Tekst~ &rarr; gennemstreget: ';
$string['tfmonospace'] = '```Tekst``` &rarr; monospace-format: ';
$string['licenceinfo'] = 'Betingelser';
$string['licenceinfodescription'] = 'Jeg forstår, at forfatteren af dette plugin ikke påtager sig noget ansvar for juridiske overtrædelser. Overhold venligst WhatsApp\'s licensbetingelser.<br>Se venligst <a href="https://www.whatsapp.com/legal" target="_blank">WhatsApps juridiske betingelser</a>';





