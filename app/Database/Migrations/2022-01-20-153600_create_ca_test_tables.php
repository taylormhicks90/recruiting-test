<?php /** @noinspection PhpIllegalPsrClassPathInspection */

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class create_ca_test_tables extends Migration
{

    /**
     * @inheritDoc
     */
    public function up()
    {
        /*
         * Tests
         */
        $this->forge->addField([
            'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'candidate_id' => ['type' => 'varchar', 'constraint' => 255],
            'start_time' => ['type' => 'datetime'],
            'end_time' => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ca_tests', true);

        /*
        * Test Questions
        */
        $this->forge->addField([
            'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'image' => ['type' => 'varchar', 'constraint' => 1000, 'null' => true],
            'question' => ['type' => 'varchar', 'constraint' => 1000],
            'response_1' => ['type' => 'varchar', 'constraint' => 1000],
            'response_2' => ['type' => 'varchar', 'constraint' => 1000],
            'response_3' => ['type' => 'varchar', 'constraint' => 1000],
            'response_4' => ['type' => 'varchar', 'constraint' => 1000],
            'correct_response' => ['type' => 'enum', 'constraint' => ['1','2','3','4']],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ca_test_questions', true);

        /*
         * Test Responses
         */
        $this->forge->addField([
            'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'test_id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'question_id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'response' => ['type' => 'enum', 'constraint' => ['1', '2', '3' ,'4']],
            'response_time' => ['type' => 'datetime'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('test_id', 'ca_tests','id','','CASCADE');
        $this->forge->addForeignKey('question_id', 'ca_test_questions','id','','CASCADE');
        $this->forge->createTable('ca_test_responses', true);
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        $this->forge->dropTable('ca_tests');
        $this->forge->dropTable('ca_test_responses');
        $this->forge->dropTable('ca_test_questions');
    }
}