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
$string['privacy:metadata'] = 'Denne pluginen lagrer ingen personlige data.';
$string['addwhatsapp'] = 'Legg til WhatsApp-melding';
$string['error'] = 'Fatal feil i WhatsApp-generatoren. Vennligst kontakt admin/support';
$string['whatsapp_messagetext'] = 'Din meldingstekst';
$string['whatsapp_messagetext_buttons'] = 'Generer';
$string['create_message'] = 'Opprett en ny melding';
$string['messagetext'] = 'Din WhatsApp-melding';
$string['limituser'] = 'Maksimalt genererte meldinger samtidig';
$string['limituserdescription'] = 'Vennligst velg maksimalt antall meldinger som genereres samtidig. Vi anbefaler 10. Flere kan påvirke datamaskinens ytelse';
$string['defaultnumber'] = 'Standard WhatsApp-nummer';
$string['defaultnumberdescription'] = 'Velg standardfeltet for WhatsApp-nummeret i brukerprofilen.';
$string['defaultdbtracking'] = 'Rastreamento na tabela de banco de dados whatsappgen_messages';
$string['defaultdbtrackingdescription'] = 'Opcionalmente, escolha rastrear as mensagens geradas em whatsappgen_messages.';
$string['defaultroles'] = 'Tillatte roller';
$string['defaultrolesdescription'] = 'Roller som er tillatt å bruke pluginen. Vennligst merk at disse rollene vil kunne se kontakttelefonnumrene.';
$string['limittext'] = 'Antall valgte brukere overskrider grensen på ';
$string['labelselect'] = 'Meldingen vil bli generert for deltakere merket i grønt.';
$string['cancelmessage'] = 'Ingen meldinger for disse deltakerne';
$string['nonumber'] = 'Ingen nummer tilgjengelig';
$string['placeholders'] = 'Oversikt over plassholdere';
$string['phfirstname'] = '%%firstname%% &rarr; fornavn på deltakeren';
$string['phlastname'] = '%%lastname%% &rarr; etternavn på deltakeren';
$string['phemail'] = '%%email%% &rarr; e-postadresse til deltakeren';
$string['phgroups'] = '%%groupname%% &rarr; alle grupper i dette kurset der deltakeren er registrert';
$string['phfullname'] = '%%fullname%% &rarr; fullt navn på dette kurset';
$string['phshortname'] = '%%shortname%% &rarr; kort navn på dette kurset';
$string['textformatting'] = 'Oversikt over tekstformatering';
$string['tfbolt'] = '*Tekst* &rarr; fet: ';
$string['tfitalic'] = '_Tekst_ &rarr; kursiv: ';
$string['tfstrikethrough'] = '~Tekst~ &rarr; gjennomstreket: ';
$string['tfmonospace'] = '```Tekst``` &rarr; monospace-format: ';
$string['licenceinfo'] = 'Vilkår';
$string['licenceinfodescription'] = 'Jeg forstår at forfatteren av denne pluginen ikke påtar seg noe ansvar for juridiske overtredelser. Vennligst følg WhatsApps lisensvilkår.<br>Vennligst sjekk <a href="https://www.whatsapp.com/legal" target="_blank">WhatsApps juridiske vilkår</a>';
