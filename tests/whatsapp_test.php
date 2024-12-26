<?php

require_once('../../../config.php');
require_once($CFG->dirroot . '/local/whatsappgen/classes/whatsapp.php');

defined('MOODLE_INTERNAL') || die();

class local_whatsappgen_getusers_test extends advanced_testcase {

    protected function setUp(): void {
        $this->resetAfterTest(true);
    }

    public function test_userlist_with_valid_data() {
        global $DB;

        // Simuliere die get_record-Methode.
        $DB->expects($this->once())
            ->method('get_record')
            ->with($this->equalTo('config'), $this->equalTo(['name' => 'local_whatsappgen_default_number']))
            ->willReturn((object) ['value' => 'phone2']);

        // Simuliere die get_records_list-Methode.
        $DB->expects($this->once())
            ->method('get_records_list')
            ->with($this->equalTo('user'), $this->equalTo('id'), $this->equalTo([1, 2]))
            ->willReturn([
                (object) ['id' => 1, 'phone2' => '123456', 'phone1' => ''],
                (object) ['id' => 2, 'phone2' => '', 'phone1' => '654321']
            ]);

        // Erstelle eine Instanz der Whatsapp-Klasse.
        $whatsapp = new getusers($DB);

        // Führe die userlist-Methode aus.
        $result = $whatsapp->userlist('1,2');

        // Überprüfe das Ergebnis.
        $this->assertCount(2, $result['userlist']);
        $this->assertEquals(1, $result['userlist'][1]->avail);
        $this->assertEquals('green', $result['userlist'][1]->fontcolor);
        $this->assertEquals(0, $result['userlist'][2]->avail);
        $this->assertEquals('red', $result['userlist'][2]->fontcolor);
    }
}
