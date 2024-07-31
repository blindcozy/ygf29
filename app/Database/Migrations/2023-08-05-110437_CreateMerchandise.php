<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMerchandise extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'price' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'picture' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'materials' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('merchandise');
    }

    public function down()
    {
        $this->forge->dropTable('merchandise');
    }
}