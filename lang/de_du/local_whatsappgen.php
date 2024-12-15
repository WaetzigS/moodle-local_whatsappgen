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

$string['pluginname'] = 'WhatsApp-Generator';
//$string['defaultapp'] = 'WhatsApp Desktop-Anwendung als Standard verwenden';
//$string['defaultappdescription'] = 'Wenn aktiviert, ist die WhatsApp Desktop-Anwendung Standard. Wenn deaktiviert, ist WhatsApp Web Standard';
$string['addwhatsapp'] = 'WhatsApp-Nachricht hinzufügen';
$string['error'] = 'Schwerwiegender Fehler im WhatsApp-Generator. Bitte kontaktieren Sie den Administratoren / Support';
$string['whatsapp_messagetext'] = 'Ihr Nachrichtentext';
$string['whatsapp_messagetext_buttons'] = 'Generieren';
$string['create_message'] = 'Neue Nachricht erstellen';
$string['messagetext'] = 'Ihre WhatsApp-Nachricht';
$string['limituser'] = 'Maximal gleichzeitig generierte Nachrichten';
$string['limituserdescription'] = 'Bitte wählen Sie die maximal gleichzeitig generierten Nachrichten. Wir empfehlen 10. Höhere Werte können die Computerleistung beeinträchtigen';
$string['defaultnumber'] = 'Standard-WhatsApp-Nummer';
$string['defaultnumberdescription'] = 'Wählen Sie das Standardfeld für die WhatsApp-Nummer im Benutzerprofil aus.';
$string['defaultdbtracking'] = 'Verfolgung in der Datenbanktabelle Benachrichtigungen';
$string['defaultdbtrackingdescription'] = 'Optional wählen, um generierte Nachrichten in der Benachrichtigungstabelle zu verfolgen.';
$string['defaultroles'] = 'Zulässige Rollen';
$string['defaultrolesdescription'] = 'Rollen, die das Plugin verwenden dürfen. Bitte beachten Sie, dass diese Rollen die Kontaktnummern sehen können.';
$string['limittext'] = 'Die Anzahl der ausgewählten Benutzer überschreitet das Limit von ';
$string['labelselect'] = 'Für die grün markierten Teilnehmenden wird die Nachricht generiert';
$string['cancelmessage'] = 'Keine Nachrichten für diese Teilnehmenden';
$string['nonumber'] = 'Keine Nummer verfügbar';
$string['placeholders'] = 'Überblick über Platzhalter';
$string['phfirstname'] = '%%firstname%% &rarr; Vorname des Teilnehmenden';
$string['phlastname'] = '%%lastname%% &rarr; Nachname des Teilnehmenden';
$string['phemail'] = '%%email%% &rarr; E-Mail-Adresse des Teilnehmenden';
$string['phgroups'] = '%%groupname%% &rarr; alle Gruppen in diesem Kurs, in denen der Teilnehmende eingeschrieben ist';
$string['phfullname'] = '%%fullname%% &rarr; vollständiger Name dieses Kurses';
$string['phshortname'] = '%%shortname%% &rarr; Kurzname dieses Kurses';
$string['textformatting'] = 'Überblick über Format';
$string['tfbolt'] = '*Text* &rarr; fett: ';
$string['tfitalic'] = '_Text_ &rarr; kursiv: ';
$string['tfstrikethrough'] = '~Text~ &rarr; durchgestrichen: ';
$string['tfmonospace'] = '```Text``` &rarr; Monospace-Format: ';
$string['licenceinfo'] = 'Bedingungen';
$string['licenceinfodescription'] = 'Ich verstehe, dass der Autor dieses Plugins keine Verantwortung für rechtliche Verstöße übernimmt. Bitte beachten Sie die Lizenzbedingungen von WhatsApp.<br>Bitte prüfen Sie die <a href="https://www.whatsapp.com/legal" target="_blank">rechtlichen Bedingungen von WhatsApp</a>';







