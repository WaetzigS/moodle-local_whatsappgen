<?php
defined('MOODLE_INTERNAL') || die();

//Moodle standard for users

$capabilities = [
    'local/whatsappgen:receivenotifications' => [
        'captype' => 'write',
        'contextlevel' => CONTEXT_USER,
        'archetypes' => [
            'user' => CAP_ALLOW, 
        ],
    ],
];