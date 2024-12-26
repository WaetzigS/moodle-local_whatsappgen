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

$string['pluginname'] = 'Générateur WhatsApp';
$string['privacy:metadata'] = 'Ce plugin ne stocke aucune donnée personnelle.';
$string['addwhatsapp'] = 'Ajouter un message WhatsApp';
$string['error'] = 'Erreur fatale dans le générateur WhatsApp. Veuillez contacter l\'admin / le support';
$string['whatsapp_messagetext'] = 'Le texte de votre message';
$string['whatsapp_messagetext_buttons'] = 'Générer';
$string['create_message'] = 'Créer un nouveau message';
$string['messagetext'] = 'Votre message WhatsApp';
$string['limituser'] = 'Messages maximum générés en une fois';
$string['limituserdescription'] = 'Veuillez choisir le nombre maximum de messages générés en une fois. Nous recommandons 10. Plus peut affecter les performances de votre ordinateur';
$string['defaultnumber'] = 'Numéro WhatsApp par défaut';
$string['defaultnumberdescription'] = 'Sélectionnez le champ par défaut pour le numéro WhatsApp dans le profil de l\'utilisateur.';
$string['defaultdbtracking'] = 'Suivi dans la table de base de données whatsappgen_messages';
$string['defaultdbtrackingdescription'] = 'Choisissez facultativement de suivre les messages générés dans whatsappgen_messages.';
$string['defaultroles'] = 'Rôles autorisés';
$string['defaultrolesdescription'] = 'Rôles autorisés à utiliser le plugin. Veuillez noter que ces rôles pourront voir les numéros de contact.';
$string['limittext'] = 'Le nombre d\'utilisateurs sélectionnés dépasse la limite de ';
$string['labelselect'] = 'Le message sera généré pour les participants marqués en vert.';
$string['cancelmessage'] = 'Pas de messages pour ces participants';
$string['nonumber'] = 'Aucun numéro disponible';
$string['placeholders'] = 'Aperçu des placeholders';
$string['phfirstname'] = '%%firstname%% &rarr; prénom du participant';
$string['phlastname'] = '%%lastname%% &rarr; nom de famille du participant';
$string['phemail'] = '%%email%% &rarr; adresse e-mail du participant';
$string['phgroups'] = '%%groupname%% &rarr; tous les groupes de ce cours où le participant est inscrit';
$string['phfullname'] = '%%fullname%% &rarr; nom complet de ce cours';
$string['phshortname'] = '%%shortname%% &rarr; nom abrégé de ce cours';
$string['textformatting'] = 'Aperçu de la mise en forme du texte';
$string['tfbolt'] = '*Texte* &rarr; en gras: ';
$string['tfitalic'] = '_Texte_ &rarr; en italique: ';
$string['tfstrikethrough'] = '~Texte~ &rarr; barré: ';
$string['tfmonospace'] = '```Texte``` &rarr; format monospace: ';
$string['licenceinfo'] = 'Conditions';
$string['licenceinfodescription'] = 'Je comprends que l\'auteur de ce plugin n\'assume aucune responsabilité pour toute violation légale. Veuillez respecter les conditions de licence de WhatsApp.<br>Veuillez consulter les <a href="https://www.whatsapp.com/legal" target="_blank">conditions légales de WhatsApp</a>';



