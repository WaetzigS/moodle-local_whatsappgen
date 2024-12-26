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

$string['pluginname'] = 'WhatsApp Rafallinn';
$string['privacy:metadata'] = 'Þessi viðbót geymir engar persónuupplýsingar.';
$string['addwhatsapp'] = 'Bæta við WhatsApp skilaboðum';
$string['error'] = 'Alvarleg villa í WhatsApp rafallinum. Vinsamlegast hafðu samband við kerfisstjóra/þjónustuaðila';
$string['whatsapp_messagetext'] = 'Texti skilaboðanna þinna';
$string['whatsapp_messagetext_buttons'] = 'Búa til';
$string['create_message'] = 'Búa til ný skilaboð';
$string['messagetext'] = 'Þín WhatsApp skilaboð';
$string['limituser'] = 'Hámarksfjöldi skilaboða sem eru búin til í einu';
$string['limituserdescription'] = 'Vinsamlegast veldu hámarksfjölda skilaboða sem eru búin til í einu. Við mælum með 10. Meira magn getur haft áhrif á afköst tölvunnar þinnar';
$string['defaultnumber'] = 'Sjálfgefið WhatsApp númer';
$string['defaultnumberdescription'] = 'Veldu sjálfgefna reitinn fyrir WhatsApp númer í notendaprófílnum.';
$string['defaultdbtracking'] = 'Eftirlit í gagnagrunnstöflu whatsappgen_messages';
$string['defaultdbtrackingdescription'] = 'Veldu valfrjálst að fylgjast með búnum skilaboðum í whatsappgen_messages.';
$string['defaultroles'] = 'Heimilað hlutverk';
$string['defaultrolesdescription'] = 'Hlutverk sem mega nota viðbótina. Vinsamlegast athugið að þessi hlutverk munu sjá tengiliðanúmer.';
$string['limittext'] = 'Fjöldi valinna notenda fer yfir mörk ';
$string['labelselect'] = 'Skilaboðin verða búin til fyrir þátttakendur sem eru merktir með grænum.';
$string['cancelmessage'] = 'Engin skilaboð fyrir þessa þátttakendur';
$string['nonumber'] = 'Ekkert númer tiltækt';
$string['placeholders'] = 'Yfirlit yfir staðarmerki';
$string['phfirstname'] = '%%firstname%% &rarr; fornafn þátttakanda';
$string['phlastname'] = '%%lastname%% &rarr; eftirnafn þátttakanda';
$string['phemail'] = '%%email%% &rarr; netfang þátttakanda';
$string['phgroups'] = '%%groupname%% &rarr; allir hópar í þessu námskeiði þar sem þátttakandi er skráður';
$string['phfullname'] = '%%fullname%% &rarr; fullt nafn þessa námskeiðs';
$string['phshortname'] = '%%shortname%% &rarr; stutt nafn þessa námskeiðs';
$string['textformatting'] = 'Yfirlit yfir textaform';
$string['tfbolt'] = '*Texti* &rarr; feitletraður: ';
$string['tfitalic'] = '_Texti_ &rarr; skáletraður: ';
$string['tfstrikethrough'] = '~Texti~ &rarr; yfirstrikaður: ';
$string['tfmonospace'] = '```Texti``` &rarr; fastbilform: ';
$string['licenceinfo'] = 'Skilmálar';
$string['licenceinfodescription'] = 'Ég skil að höfundur þessarar viðbótar ber enga ábyrgð á neinum lögbrotum. Vinsamlegast fylgdu skilmálum WhatsApp leyfis.<br>Vinsamlegast skoðaðu <a href="https://www.whatsapp.com/legal" target="_blank">löglegu skilmála WhatsApp</a>';
