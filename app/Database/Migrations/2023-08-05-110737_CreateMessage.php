<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMessage extends Migration
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
            'time' => [
                'type'          => 'DATETIME',
                'default'       => date('Y-m-d H:i:s'),
            ],
            'name' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'country' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'age' => [
                'type'          => 'INT',
                'constraint'    => 11,
            ],
            'message' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('message');
    }

    public function down()
    {
        $this->forge->dropTable('message');
    }
}