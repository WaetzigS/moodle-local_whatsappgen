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

$string['pluginname'] = 'Gerador de WhatsApp';
$string['privacy:metadata'] = 'Este plugin não armazena dados pessoais.';
$string['addwhatsapp'] = 'Adicionar mensagem WhatsApp';
$string['error'] = 'Erro fatal no gerador de WhatsApp. Por favor, contacte o administrador/suporte';
$string['whatsapp_messagetext'] = 'O texto da sua mensagem';
$string['whatsapp_messagetext_buttons'] = 'Gerar';
$string['create_message'] = 'Criar uma nova mensagem';
$string['messagetext'] = 'A sua mensagem WhatsApp';
$string['limituser'] = 'Mensagens geradas no máximo ao mesmo tempo';
$string['limituserdescription'] = 'Por favor, escolha o número máximo de mensagens geradas ao mesmo tempo. Recomendamos 10. Mais do que isso pode afetar o desempenho do seu computador';
$string['defaultnumber'] = 'Número WhatsApp predefinido';
$string['defaultnumberdescription'] = 'Selecione o campo predefinido para o número WhatsApp no perfil do utilizador.';
$string['defaultdbtracking'] = 'Rastreio na tabela de notificações da base de dados';
$string['defaultdbtrackingdescription'] = 'Opcionalmente, escolha rastrear mensagens geradas na tabela de notificações.';
$string['defaultroles'] = 'Papéis permitidos';
$string['defaultrolesdescription'] = 'Papéis permitidos para utilizar o plugin. Note que esses papéis poderão ver os números de contacto.';
$string['limittext'] = 'O número de utilizadores selecionados excede o limite de ';
$string['labelselect'] = 'A mensagem será gerada para os participantes marcados em verde.';
$string['cancelmessage'] = 'Sem mensagens para estes participantes';
$string['nonumber'] = 'Nenhum número disponível';
$string['placeholders'] = 'Visão geral dos marcadores de posição';
$string['phfirstname'] = '%%firstname%% &rarr; primeiro nome do participante';
$string['phlastname'] = '%%lastname%% &rarr; apelido do participante';
$string['phemail'] = '%%email%% &rarr; endereço de email do participante';
$string['phgroups'] = '%%groupname%% &rarr; todos os grupos deste curso em que o participante está inscrito';
$string['phfullname'] = '%%fullname%% &rarr; nome completo deste curso';
$string['phshortname'] = '%%shortname%% &rarr; nome curto deste curso';
$string['textformatting'] = 'Visão geral da formatação de texto';
$string['tfbolt'] = '*Texto* &rarr; negrito: ';
$string['tfitalic'] = '_Texto_ &rarr; itálico: ';
$string['tfstrikethrough'] = '~Texto~ &rarr; riscado: ';
$string['tfmonospace'] = '```Texto``` &rarr; formato monoespaço: ';
$string['licenceinfo'] = 'Condições';
$string['licenceinfodescription'] = 'Eu entendo que o autor deste plugin não assume qualquer responsabilidade por infrações legais. Por favor, siga os termos de licenciamento do WhatsApp.<br>Por favor, verifique os <a href="https://www.whatsapp.com/legal" target="_blank">termos legais do WhatsApp</a>';
