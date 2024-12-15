<?php
defined('MOODLE_INTERNAL') || die();

//require_once($CFG->dirroot.'/user/index.php');
require_once($CFG->dirroot.'/user/lib.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->dirroot.'/notes/lib.php');
require_once($CFG->libdir . '/accesslib.php');
require_once($CFG->libdir.'/adminlib.php');
require_once($CFG->libdir . '/pagelib.php');


function local_whatsappgen_extend_settings_navigation(settings_navigation $settingsnav, context $context) {
    global $PAGE , $DB , $USER , $COURSE , $CFG;

    //check if role is allowed
    if ($DB->get_record('config' , ['name' => 'local_whatsappgen_default_roles']) === NULL) {
        $setroles = 0;
    } else {
        $setroles = explode(',' , $DB->get_record('config' , ['name' => 'local_whatsappgen_default_roles'])->value);
    }
    
    $context = context_course::instance($COURSE->id);
    $roles = get_user_roles($context, $USER->id, true);
    $access_whatsapp = false;
    foreach ($roles as $role) {
        //$rolestr[] = $role->roleid;
        if (in_array($role->roleid , $setroles)) {
            $access_whatsapp = true;
            break; 
        } else {
            $access_whatsapp = false;
        }
    }
    
    // Open the Javascript, if it's in course
    if ($PAGE->url->compare(new moodle_url('/user/index.php'), URL_MATCH_BASE)) {
            if ($access_whatsapp == true) { 
                $course = $COURSE->id;


                $CFG->cachejs = false;
                
                $PAGE->requires->js_call_amd('local_whatsappgen/whatsapp', 'init' , [
                    $course,
                ]);
        }
    }
}
