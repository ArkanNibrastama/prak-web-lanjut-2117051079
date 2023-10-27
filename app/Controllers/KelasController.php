<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class KelasController extends BaseController
{
    public $kelasModel;
    protected $helpers=['form'];

    public function __construct(){
        $this->kelasModel = new KelasModel();
    }
    public function index()
    {
        // opt : di db kelas ditambahin "kapasitas"
        //jadi waktu banyak user yang daftar itu > dari kapasitas kelas, maka akan muncul error => "kelas sudah penuh"
    
        $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getKelas(),
            'page' =>'kelas',
        ];

        return view('list_kelas',$data);
    
    }

    public function create(){

        $data =[
            'title' => 'Create Kelas',
            'page' =>'kelas',
        ];


        return view('create_kelas', $data);
    }

    public function store(){

        if(!$this->validate([
            'nama_kelas' => 'required|is_unique[kelas.nama_kelas]',
            'kapasitas' => 'required|integer',
        ])){

            return redirect()->back()->withInput();
        }

        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'kapasitas' => $this->request->getVar('kapasitas'),
        ];

        $this->kelasModel->saveKelas($data);

        return redirect()->to('/kelas');

    }

    public function edit($id){

        $kelas = $this->kelasModel->getKelas($id);

        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $kelas,
            'page' =>'kelas',
        ];

        return view('edit_kelas', $data);

    }

    public function update($id){

        $origin_kelas = $this->kelasModel->getKelas($id);

        if($origin_kelas['nama_kelas'] == $this->request->getVar('nama_kelas')){
            $is_unique = '';
        }else{
            $is_unique = '|is_unique[kelas.nama_kelas]';
        }

        // validation
        if(!$this->validate([

            'nama_kelas' => 'required'.$is_unique,
            'kapasitas' => 'required|integer',
        ])){
            return redirect()->back()->withInput();
        }

        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'kapasitas' => $this->request->getVar('kapasitas'),
        ];
        
        $result = $this->kelasModel->updateKelas($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Menyimpan Data!');
        }

        return redirect()->to('/kelas');

    }

    public function destroy($id){

        $result = $this->kelasModel->deleteKelas($id);

        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }

        return redirect()->to(base_url('/kelas'))->with('success', 'Berhasil menghapus data');

    }


}
