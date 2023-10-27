<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>

    <div class="container-header">
        <h1>List Kelas</h1>
        <a class="btn btn-primary" href="<?= base_url('/kelas/create') ?>">Tambah Kelas</a>
    </div>
    <div class="container" 
    style="
    margin-top: 25px; 
    width: 90%;
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
                    <th class="col justify-content-center text-center">Nama Kelas</th>
                    <th class="col justify-content-center text-center">Kapasitas</th>
                    <th class="col justify-content-center text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($kelas as $k){
                ?>
                    <tr>
                        <td class="col justify-content-center align-middle text-center"><?= $k['id'] ?></td>
                        <td class="col justify-content-center align-middle text-center"><?= $k['nama_kelas'] ?></td>
                        <td class="col justify-content-center align-middle text-center"><?= $k['kapasitas'] ?></td>
                        <td class="col justify-content-center align-middle text-center">
                            <a class="btn btn-warning" href="<?= base_url('kelas/'.$k['id'].'/edit') ?>">Edit</a>
                            <form action="<?= base_url('kelas/'.$k['id']) ?>" method="post" style="display: inline-block;">
                                <input type="hidden" name='_method' value="DELETE">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

<?= $this->endSection() ?>