<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyMessage extends Migration
{
    public function up()
    {
        $addField = [
            'created_at' => [
                'type'      => 'DATETIME',
                'after'     => 'message'
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

        $this->forge->addColumn('message', $addField);
        $this->forge->dropColumn('message', 'time');
    }

    public function down()
    {
        $this->forge->dropColumn('message', ['created_at', 'updated_at', 'deleted_at']);

        $restoreField = [
            'time' => [
                'type'      => 'DATETIME',
                'after'     => 'id'
            ],
        ];

        $this->forge->addColumn('message', $restoreField);
    }
}