<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyPress extends Migration
{
    public function up()
    {
        $addField = [
            'created_at' => [
                'type'      => 'DATETIME',
                'after'     => 'content'
            ],
            'updated_at' => [
                'type'      => 'DATETIME',
                'after'     => 'created_at'
            ],
            'deleted_at' => [
                'type'      => 'DATETIME',
                'after'     => 'updated_at'
            ],
        ];

        $this->forge->addColumn('press', $addField);
    }

    public function down()
    {
        $this->forge->dropColumn('press', ['created_at', 'updated_at', 'deleted_at']);
    }
}