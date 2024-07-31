<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSchedule extends Migration
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
                'type'          => 'DATETIME'
            ],
            'content' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('schedule');
    }

    public function down()
    {
        $this->forge->dropTable('schedule');
    }
}