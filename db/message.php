<?php
defined('MOODLE_INTERNAL') || die();

$messageproviders = array (
    // Ordinary single forum posts.
    'posts' => array(
        'defaults' => array(
            'airnotifier' => MESSAGE_PERMITTED + MESSAGE_DEFAULT_ENABLED,
        ),
    ),

    // Forum digest messages.
    'digests' => array(
    ),
);