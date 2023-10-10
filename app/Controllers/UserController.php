<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    
    public $userModel;
    public $kelasModel;
    protected $helpers=['form'];

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data=[
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];

        return view('list_user', $data);
    }

    public function profile($nama="", $kelas="", $npm=""){

        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];

        return view('profile', $data);

    }

    public function create(){

        $kelas = $this->kelasModel->getKelas();

        $data =[
            'title' => 'Create User',
            'kelas' => $kelas
        ];


        return view('create_user', $data);
    }

    public function store(){

        // get nama kelas based on selected id kelas
        if($this->request->getVar('kelas') != ''){
            $kelas_select = $this->kelasModel->where('id', $this->request->getVar('kelas'))->first();
            $nama_kelas = $kelas_select['nama_kelas'];
        }else{
            $nama_kelas = '';
        }

        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $nama_foto = $foto->getRandomName();

        // validation
        if(!$this->validate([
            'nama' => 'required|alpha_space',
            'npm' => 'required|is_unique[user.npm]|integer|min_length[10]',
            'kelas' => 'required',
            'foto' => 'uploaded[foto]|is_image[foto]'
        ])){

            session()->setFlashdata('nama_kelas');
            return redirect()->back()->withInput()->with('nama_kelas', $nama_kelas);
        }

        //up img

        if($foto->move($path, $nama_foto)){
            $foto = base_url($path.$nama_foto);
        }

        // save data
        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' => $this->request->getVar('kelas'),
            'foto' => $foto
        ]);

        return redirect()->to('/user');
        
        // show to profile page...
        // $showed_data = [
        //     'nama' => $this->request->getVar('nama'),
        //     'npm' => $this->request->getVar('npm'),
        //     'kelas' => $nama_kelas,
        //     'title' => 'Profile'
        // ];
        // return view('profile', $showed_data);
    }

    public function show($id){

            $user = $this->userModel->getUser($id);

            $data = [
                'title' => 'Profile',
                'user' => $user
            ];

            return view('profile', $data);

    }

    public function edit($id){

        $user = $this->userModel->getUser($id);
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas
        ];

        return view('edit_user', $data);

    }

    public function update($id){

        // get nama kelas based on selected id kelas
        if($this->request->getVar('kelas') != ''){
            $kelas_select = $this->kelasModel->where('id', $this->request->getVar('kelas'))->first();
            $nama_kelas = $kelas_select['nama_kelas'];
        }else{
            $nama_kelas = '';
        }

        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');

        // validation
        // if(!$this->validate([
        //     'nama' => 'required|alpha_space',
        //     'npm' => 'required|is_unique[user.npm]|integer|min_length[10]',
        //     'kelas' => 'required',
        //     'foto' => 'uploaded[foto]|is_image[foto]'
        // ])){

        //     session()->setFlashdata('nama_kelas');
        //     return redirect()->back()->withInput()->with('nama_kelas', $nama_kelas);
        // }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $this->request->getVar('kelas'),
        ];

        if ($foto->isValid()){
            $nama_foto = $foto->getRandomName();
            //up img

            if($foto->move($path, $nama_foto)){
                $foto = base_url($path.$nama_foto);

                $data['foto'] = $foto;

            }
        }

        $result = $this->userModel->updateUser($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Menyimpan Data!');
        }

        return redirect()->to('/user');

    }

    public function destroy($id){

        $result = $this->userModel->deleteUser($id);

        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }

        return redirect()->to(base_url('/user'))->with('success', 'Berhasil menghapus data');

    }
     
}
