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

$string['pluginname'] = 'WhatsApp Generátor';
//$string['defaultapp'] = 'Használja a WhatsApp Desktop alkalmazást alapértelmezettként';
//$string['defaultappdescription'] = 'Ha be van jelölve, a WhatsApp Desktop alkalmazás az alapértelmezett. Ha nincs bejelölve, akkor a WhatsApp Web az alapértelmezett';
$string['addwhatsapp'] = 'WhatsApp üzenet hozzáadása';
$string['error'] = 'Végzetes hiba a WhatsApp generátorban. Kérjük, lépjen kapcsolatba a támogatással';
$string['whatsapp_messagetext'] = 'Az üzenet szövege';
$string['whatsapp_messagetext_buttons'] = 'Generálás';
$string['create_message'] = 'Új üzenet létrehozása';
$string['messagetext'] = 'A WhatsApp üzenete';
$string['limituser'] = 'Egyszerre létrehozott maximális üzenetek';
$string['limituserdescription'] = 'Kérjük, válassza ki az egyszerre létrehozott maximális üzenetek számát. Javasoljuk, hogy legyen 10. Több üzenet ronthatja a számítógép teljesítményét';
$string['defaultnumber'] = 'Alapértelmezett WhatsApp szám';
$string['defaultnumberdescription'] = 'Válassza ki az alapértelmezett mezőt a WhatsApp szám számára a felhasználói profilban.';
$string['defaultdbtracking'] = 'Követés az Értesítések adatbázis táblában';
$string['defaultdbtrackingdescription'] = 'Opcionálisan válassza ki, hogy a létrehozott üzenetek követése az értesítések táblában történjen.';
$string['defaultroles'] = 'Engedélyezett szerepkörök';
$string['defaultrolesdescription'] = 'A plugin használatára jogosult szerepkörök. Kérjük, vegye figyelembe, hogy ezek a szerepkörök láthatják a kapcsolattartási számokat.';
$string['limittext'] = 'A kiválasztott felhasználók száma meghaladja a korlátot: ';
$string['labelselect'] = 'Az üzenet a zölddel jelölt résztvevők számára lesz generálva.';
$string['cancelmessage'] = 'Nincs üzenet ezeknek a résztvevőknek';
$string['nonumber'] = 'Nincs elérhető szám';
$string['placeholders'] = 'Helykitöltők áttekintése';
$string['phfirstname'] = '%%firstname%% &rarr; a résztvevő keresztneve';
$string['phlastname'] = '%%lastname%% &rarr; a résztvevő vezetékneve';
$string['phemail'] = '%%email%% &rarr; a résztvevő e-mail címe';
$string['phgroups'] = '%%groupname%% &rarr; az összes csoport ebben a kurzusban, amelyekbe a résztvevő beiratkozott';
$string['phfullname'] = '%%fullname%% &rarr; a kurzus teljes neve';
$string['phshortname'] = '%%shortname%% &rarr; a kurzus rövid neve';
$string['textformatting'] = 'Szövegformázás áttekintése';
$string['tfbolt'] = '*Szöveg* &rarr; félkövér: ';
$string['tfitalic'] = '_Szöveg_ &rarr; dőlt: ';
$string['tfstrikethrough'] = '~Szöveg~ &rarr; áthúzott: ';
$string['tfmonospace'] = '```Szöveg``` &rarr; monospace formátum: ';
$string['licenceinfo'] = 'Feltételek';
$string['licenceinfodescription'] = 'Megértem, hogy a plugin szerzője nem vállal felelősséget a jogsértésekért. Kérjük, tartsa be a WhatsApp licencfeltételeit.<br>Kérjük, olvassa el a <a href="https://www.whatsapp.com/legal" target="_blank">WhatsApp jogi feltételeit</a>';
