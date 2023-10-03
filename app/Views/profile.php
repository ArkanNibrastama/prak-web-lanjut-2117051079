<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="<?php echo base_url('./assets/css/style.css'); ?>">
</head>
<body> -->

    <?= $this->extend('layouts/app'); ?>

    <?= $this->section('content') ?>
    <div class="content">
        <img class="foto_profile" src="<?= $user['foto'] ?? base_url('/assets/img/placeholder-image.jpg') ?>" alt="">
        <h3>Perkenalkan, Saya</h3>
        <h1><?= $user['nama'] ?></h1>
        <p>Kelas <?= $user['nama_kelas'] ?></p>
        <p>NPM <?= $user['npm'] ?></p>
        <br>
        <p>Jurusan Ilmu Komputer</p>
        <p>Universitas Lampung</p>
    </div>
    <?= $this->endSection() ?>
<!-- 
</body>
</html> -->