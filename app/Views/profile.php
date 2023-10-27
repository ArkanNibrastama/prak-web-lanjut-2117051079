

    <?= $this->extend('layouts/app'); ?>

    <?= $this->section('content') ?>
    <div class="content">
        <img class="foto_profile" src="<?= $user['foto'] ?? base_url('/assets/img/placeholder-image.jpg') ?>" alt="">
        <h3>Perkenalkan, Saya</h3>
        <h1><?= $user['nama'] ?></h1>
        <p style="color:white;">Kelas <?= $user['nama_kelas'] ?></p>
        <p style="color:white;">NPM <?= $user['npm'] ?></p>
        <br>
        <p>Jurusan Ilmu Komputer</p>
        <p>Universitas Lampung</p>
    </div>
    <?= $this->endSection() ?>
