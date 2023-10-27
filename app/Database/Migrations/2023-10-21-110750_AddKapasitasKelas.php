<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKapasitasKelas extends Migration
{
    public function up()
    {
        $this->forge->addColumn(
            'kelas',
            [
                'kapasitas' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'null' => false  
                ]
            ]
        );
    }

    public function down()
    {
        $this->forge->dropColumn('kelas', ['kapasitas']);
    }
}
