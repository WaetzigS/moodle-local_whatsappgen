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

$string['pluginname'] = 'Generatore di WhatsApp';
//$string['defaultapp'] = 'Usa l\'applicazione desktop di WhatsApp come predefinita';
//$string['defaultappdescription'] = 'Se selezionato, l\'applicazione desktop di WhatsApp è predefinita. Se non selezionato, WhatsApp Web è predefinito';
$string['addwhatsapp'] = 'Aggiungi messaggio WhatsApp';
$string['error'] = 'Errore fatale nel generatore di WhatsApp. Si prega di contattare l\'amministratore/assistenza';
$string['whatsapp_messagetext'] = 'Testo del tuo messaggio';
$string['whatsapp_messagetext_buttons'] = 'Genera';
$string['create_message'] = 'Crea un nuovo messaggio';
$string['messagetext'] = 'Il tuo messaggio WhatsApp';
$string['limituser'] = 'Messaggi massimi generati alla volta';
$string['limituserdescription'] = 'Si prega di scegliere il numero massimo di messaggi generati alla volta. Raccomandiamo 10. Un numero maggiore può influire sulle prestazioni del computer';
$string['defaultnumber'] = 'Numero WhatsApp predefinito';
$string['defaultnumberdescription'] = 'Seleziona il campo predefinito per il numero di WhatsApp nel profilo utente.';
$string['defaultdbtracking'] = 'Tracciamento nella tabella delle notifiche del database';
$string['defaultdbtrackingdescription'] = 'Opzionalmente, scegli di tracciare i messaggi generati nella tabella delle notifiche.';
$string['defaultroles'] = 'Ruoli consentiti';
$string['defaultrolesdescription'] = 'Ruoli autorizzati a utilizzare il plugin. Si prega di notare che questi ruoli saranno in grado di vedere i numeri di contatto.';
$string['limittext'] = 'Il numero di utenti selezionati supera il limite di ';
$string['labelselect'] = 'Il messaggio sarà generato per i partecipanti contrassegnati in verde.';
$string['cancelmessage'] = 'Nessun messaggio per questi partecipanti';
$string['nonumber'] = 'Nessun numero disponibile';
$string['placeholders'] = 'Panoramica dei segnaposto';
$string['phfirstname'] = '%%firstname%% &rarr; nome del partecipante';
$string['phlastname'] = '%%lastname%% &rarr; cognome del partecipante';
$string['phemail'] = '%%email%% &rarr; indirizzo email del partecipante';
$string['phgroups'] = '%%groupname%% &rarr; tutti i gruppi in questo corso in cui il partecipante è iscritto';
$string['phfullname'] = '%%fullname%% &rarr; nome completo di questo corso';
$string['phshortname'] = '%%shortname%% &rarr; nome breve di questo corso';
$string['textformatting'] = 'Panoramica della formattazione del testo';
$string['tfbolt'] = '*Testo* &rarr; grassetto: ';
$string['tfitalic'] = '_Testo_ &rarr; corsivo: ';
$string['tfstrikethrough'] = '~Testo~ &rarr; barrato: ';
$string['tfmonospace'] = '```Testo``` &rarr; formato monospazio: ';
$string['licenceinfo'] = 'Condizioni';
$string['licenceinfodescription'] = 'Capisco che l\'autore di questo plugin non si assume alcuna responsabilità per eventuali violazioni legali. Si prega di rispettare i termini di licenza di WhatsApp.<br>Si prega di controllare i <a href="https://www.whatsapp.com/legal" target="_blank">termini legali di WhatsApp</a>';
