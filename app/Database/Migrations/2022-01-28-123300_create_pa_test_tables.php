<?php

namespace App\Database\Migrations;

class create_pa_test_tables extends \CodeIgniter\Database\Migration
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
            'a_answers' => ['type' => 'varchar','constraint' => 500],
            'b_answers' => ['type' => 'varchar','constraint' => 500],
            'c_answers' => ['type' => 'varchar','constraint' => 500],
            'd_answers' => ['type' => 'varchar','constraint' => 500],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pa_assessment', true);
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        $this->forge->dropTable('pa_assessment');
    }
}