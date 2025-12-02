<?php
// local/whatsapp/test.php

require_once('../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once('lib.php'); // Falls deine Plugin-Logik hier benötigt wird

$courseid = required_param('courseid', PARAM_INT);
$userids_string = required_param('userids', PARAM_RAW); // Kommagetrennte Liste der User-IDs

if (!$course = $DB->get_record('course', ['id' => $courseid])) {
    print_error('invalidcourseid');
}

// Sicherstellen, dass der Benutzer die Berechtigung zur Ausführung von Bulk-Aktionen hat.
// Hier solltest du die tatsächlichen Berechtigungen für deine Aktion prüfen (z.B. enrol/manual:enrol oder eine eigene Capability).
require_capability('moodle/course:viewparticipants', context_course::instance($courseid)); // Mindest-Capability

// Header und Navigation
$context = context_course::instance($courseid);
$PAGE->set_context($context);
$PAGE->set_course($course);
$PAGE->set_url('/local/whatsapp/test.php', ['courseid' => $courseid]);
$PAGE->set_title(get_string('whatsappgenaction', 'local_whatsapp'));
$PAGE->set_heading($course->fullname . ' : ' . get_string('whatsappgenaction', 'local_whatsapp'));

echo $OUTPUT->header();

// ----------------------------------------------------
// Logik zur Verarbeitung der ausgewählten Benutzer
// ----------------------------------------------------

$userids = explode(',', $userids_string);
$userids = array_map('intval', $userids);
$userids = array_filter($userids); // Entferne leere oder 0-Werte

echo $OUTPUT->box_start();
echo '<h2>' . get_string('whatsappgenaction', 'local_whatsapp') . '</h2>';
echo '<p>Kurs-ID: ' . $courseid . '</p>';

if (!empty($userids)) {
    echo '<p>Folgende Benutzer-IDs wurden ausgewählt und an ' . $CFG->wwwroot . '/local/whatsapp/test.php übergeben:</p>';
    echo '<ul>';
    foreach ($userids as $userid) {
        // Hier könntest du z.B. die Benutzerdaten abrufen und die WhatsApp-Logik starten
        echo '<li>User ID: ' . $userid . '</li>';
    }
    echo '</ul>';
    echo '<p>Gesamtanzahl ausgewählter Benutzer: ' . count($userids) . '</p>';
} else {
    echo '<p>Es wurden keine Benutzer ausgewählt.</p>';
}

echo $OUTPUT->box_end();
echo $OUTPUT->footer();

// ----------------------------------------------------
// Ende der Logik
// ----------------------------------------------------