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

$string['pluginname'] = 'Generador de WhatsApp';
//$string['defaultapp'] = 'Usar la aplicación de escritorio de WhatsApp como predeterminada';
//$string['defaultappdescription'] = 'Si está marcado, la aplicación de escritorio de WhatsApp será la predeterminada. Si no está marcado, WhatsApp Web será la predeterminada';
$string['addwhatsapp'] = 'Añadir mensaje de WhatsApp';
$string['error'] = 'Error fatal en el generador de WhatsApp. Por favor, contacte al administrador/soporte';
$string['whatsapp_messagetext'] = 'El texto de su mensaje';
$string['whatsapp_messagetext_buttons'] = 'Generar';
$string['create_message'] = 'Crear un nuevo mensaje';
$string['messagetext'] = 'Su mensaje de WhatsApp';
$string['limituser'] = 'Máximo de mensajes generados a la vez';
$string['limituserdescription'] = 'Por favor, elija el número máximo de mensajes generados a la vez. Recomendamos 10. Un número mayor puede afectar el rendimiento de su computadora';
$string['defaultnumber'] = 'Número de WhatsApp predeterminado';
$string['defaultnumberdescription'] = 'Seleccione el campo predeterminado para el número de WhatsApp en el perfil del usuario.';
$string['defaultdbtracking'] = 'Seguimiento en la tabla de notificaciones de la base de datos';
$string['defaultdbtrackingdescription'] = 'Opcionalmente, elija seguir los mensajes generados en la tabla de notificaciones.';
$string['defaultroles'] = 'Roles permitidos';
$string['defaultrolesdescription'] = 'Roles permitidos para usar el plugin. Tenga en cuenta que estos roles podrán ver los números de contacto.';
$string['limittext'] = 'El número de usuarios seleccionados excede el límite de ';
$string['labelselect'] = 'El mensaje se generará para los participantes marcados en verde.';
$string['cancelmessage'] = 'No hay mensajes para estos participantes';
$string['nonumber'] = 'No hay número disponible';
$string['placeholders'] = 'Descripción de los marcadores de posición';
$string['phfirstname'] = '%%firstname%% &rarr; nombre del participante';
$string['phlastname'] = '%%lastname%% &rarr; apellido del participante';
$string['phemail'] = '%%email%% &rarr; dirección de correo electrónico del participante';
$string['phgroups'] = '%%groupname%% &rarr; todos los grupos en este curso donde el participante está inscrito';
$string['phfullname'] = '%%fullname%% &rarr; nombre completo de este curso';
$string['phshortname'] = '%%shortname%% &rarr; nombre corto de este curso';
$string['textformatting'] = 'Descripción de la formateo del texto';
$string['tfbolt'] = '*Texto* &rarr; en negrita: ';
$string['tfitalic'] = '_Texto_ &rarr; en cursiva: ';
$string['tfstrikethrough'] = '~Texto~ &rarr; tachado: ';
$string['tfmonospace'] = '```Texto``` &rarr; formato monoespacio: ';
$string['licenceinfo'] = 'Condiciones';
$string['licenceinfodescription'] = 'Entiendo que el autor de este plugin no asume ninguna responsabilidad por cualquier infracción legal. Por favor, cumpla con los términos de licencia de WhatsApp.<br>Por favor, revise los <a href="https://www.whatsapp.com/legal" target="_blank">términos legales de WhatsApp</a>';
