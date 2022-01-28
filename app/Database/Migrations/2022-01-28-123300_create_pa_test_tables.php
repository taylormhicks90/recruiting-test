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
            'x_axis' => ['type' => 'int','constraint' => 2,'unsigned' => true],
            'y_axis' => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pa_assesment', true);
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        // TODO: Implement down() method.
    }
}