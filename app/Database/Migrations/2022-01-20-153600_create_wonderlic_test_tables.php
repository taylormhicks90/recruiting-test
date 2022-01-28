<?php

namespace App\Database\Migrations;

use phpDocumentor\Reflection\Type;

class create_wonderlic_test_tables extends \CodeIgniter\Database\Migration
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
        $this->forge->createTable('tests', true);

        /*
        * Test Questions
        */
        $this->forge->addField([
            'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'question' => ['type' => 'varchar', 'constraint' => 1000],
            'response_1' => ['type' => 'varchar', 'constraint' => 1000],
            'response_2' => ['type' => 'varchar', 'constraint' => 1000],
            'response_3' => ['type' => 'varchar', 'constraint' => 1000],
            'response_4' => ['type' => 'varchar', 'constraint' => 1000],
            'correct_response' => ['type' => 'enum', 'constraint' => ['1','2','3','4']],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('test_questions', true);

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
        $this->forge->addForeignKey('test_id', 'tests','id','','CASCADE');
        $this->forge->addForeignKey('question_id', 'test_questions','id','','CASCADE');
        $this->forge->createTable('test_responses', true);
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        // TODO: Implement down() method.
    }
}