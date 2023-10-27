<?php

namespace App\Database\Seeds;

use App\Models\KelasModel;
use CodeIgniter\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $kelasModel = new KelasModel();

        $kelasModel->save([
            'nama_kelas' => 'A',
            'kapasitas'=> 10,
        ]);
        $kelasModel->save([
            'nama_kelas' => 'B',
            'kapasitas'=> 10,
        ]);
        $kelasModel->save([
            'nama_kelas' => 'C',
            'kapasitas'=> 10,
        ]);
        $kelasModel->save([
            'nama_kelas' => 'D',
            'kapasitas'=> 10,
        ]);
    }
}
