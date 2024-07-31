<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePress extends Migration
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
            'title' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'slug' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'image' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'intro' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'content' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('press');
    }

    public function down()
    {
        $this->forge->dropTable('press');
    }
}