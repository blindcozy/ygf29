<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateArtist extends Migration
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
            'photo' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'about' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'performed' => [
                'type'          => 'INT',
                'constraint'    => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('artist');
    }

    public function down()
    {
        $this->forge->dropTable('artist');
    }
}