<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>

    <div class="container-header">
        <h1>List Data Users</h1>
        <a class="btn btn-primary" href="<?= base_url('/user/create') ?>">Add Data</a>
    </div>
    <div class="container" 
    style="
    margin-top: 25px; 
    width: 70%;
    height: 500px;
    padding-top: 50px;
    padding-bottom: 50px;
    overflow-x: hidden;
    overflow-y: auto;
    ">
        <table class="table table-bordered" style="color:white;">
            <thead>
                <tr>
                    <th class="col justify-content-center text-center">ID</th>
                    <th class="col justify-content-center text-center">Nama</th>
                    <th class="col justify-content-center text-center">NPM</th>
                    <th class="col justify-content-center text-center">Kelas</th>
                    <th class="col justify-content-center text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($users as $user){
                ?>
                    <tr>
                        <td class="col justify-content-center align-middle text-center"><?= $user['id'] ?></td>
                        <td class="col justify-content-center align-middle"><?= $user['nama'] ?></td>
                        <td class="col justify-content-center align-middle text-center"><?= $user['npm'] ?></td>
                        <td class="col justify-content-center align-middle text-center"><?= $user['nama_kelas'] ?></td>
                        <td class="col justify-content-center align-middle text-center">
                            <a class="btn btn-success" href="<?= base_url('user/'.$user['id']) ?>">Detail</a>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

<?= $this->endSection() ?>