<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKelasTable extends Migration
{
    public function up()
    {
        //yang di-running tiap migrate
        
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'constraint' => 5, // max. length inputannya; INT(5)
                'unsigned' => true, //biar nilainya always positive
                'auto_increment' => true
            ],
            'nama_kelas' => [
                'type' => 'VARCHAR',
                'constraint' => 10
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]

        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('kelas');
    }

    public function down()
    {
        //kebalikan dari up, biasanya untuk nge-roll back
        $this->forge->dropTable('kelas', true);
    }
}
