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

$string['pluginname'] = 'WhatsApp-generator';
$string['privacy:metadata'] = 'Deze plugin slaat geen persoonlijke gegevens op.';
$string['addwhatsapp'] = 'WhatsApp-bericht toevoegen';
$string['error'] = 'Fatale fout in WhatsApp-generator. Neem contact op met de admin/ondersteuning';
$string['whatsapp_messagetext'] = 'Uw berichttekst';
$string['whatsapp_messagetext_buttons'] = 'Genereren';
$string['create_message'] = 'Een nieuw bericht maken';
$string['messagetext'] = 'Uw WhatsApp-bericht';
$string['limituser'] = 'Maximaal gegenereerde berichten tegelijk';
$string['limituserdescription'] = 'Kies het maximale aantal berichten dat tegelijk wordt gegenereerd. Wij raden 10 aan. Meer kan de prestaties van uw computer beïnvloeden';
$string['defaultnumber'] = 'Standaard WhatsApp-nummer';
$string['defaultnumberdescription'] = 'Kies het standaardveld voor het WhatsApp-nummer in het gebruikersprofiel.';
$string['defaultdbtracking'] = 'Tracking in de databastabel whatsappgen_messages';
$string['defaultdbtrackingdescription'] = 'Optioneel selecteren om gegenereerde berichten bij te houden in whatsappgen_messages.';
$string['defaultroles'] = 'Toegestane Rollen';
$string['defaultrolesdescription'] = 'Rollen die de plugin mogen gebruiken. Houd er rekening mee dat deze rollen de contactnummers kunnen zien.';
$string['limittext'] = 'Het aantal geselecteerde gebruikers overschrijdt de limiet van ';
$string['labelselect'] = 'Het bericht wordt gegenereerd voor deelnemers die in het groen zijn gemarkeerd.';
$string['cancelmessage'] = 'Geen berichten voor deze deelnemers';
$string['nonumber'] = 'Er is geen nummer beschikbaar';
$string['placeholders'] = 'Overzicht van placeholders';
$string['phfirstname'] = '%%firstname%% &rarr; voornaam van de deelnemer';
$string['phlastname'] = '%%lastname%% &rarr; achternaam van de deelnemer';
$string['phemail'] = '%%email%% &rarr; e-mailadres van de deelnemer';
$string['phgroups'] = '%%groupname%% &rarr; alle groepen in deze cursus waarin de deelnemer is ingeschreven';
$string['phfullname'] = '%%fullname%% &rarr; volledige naam van deze cursus';
$string['phshortname'] = '%%shortname%% &rarr; korte naam van deze cursus';
$string['textformatting'] = 'Overzicht van tekstopmaak';
$string['tfbolt'] = '*Tekst* &rarr; vetgedrukt: ';
$string['tfitalic'] = '_Tekst_ &rarr; cursief: ';
$string['tfstrikethrough'] = '~Tekst~ &rarr; doorgehaald: ';
$string['tfmonospace'] = '```Tekst``` &rarr; monospace-opmaak: ';
$string['licenceinfo'] = 'Voorwaarden';
$string['licenceinfodescription'] = 'Ik begrijp dat de auteur van deze plugin geen verantwoordelijkheid aanvaardt voor enige juridische overtredingen. Houd u aan de licentievoorwaarden van WhatsApp.<br>Bekijk de <a href="https://www.whatsapp.com/legal" target="_blank">juridische voorwaarden van WhatsApp</a>';



