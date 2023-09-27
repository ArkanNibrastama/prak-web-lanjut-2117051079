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
        <img src="<?php echo base_url('./assets/img/profile.jpg'); ?>" alt="photo profile">
        <h3>Perkenalkan, Saya</h3>
        <h1><?= $nama ?></h1>
        <p>Kelas <?= $kelas ?></p>
        <p>NPM <?= $npm ?></p>
        <br>
        <p>Jurusan Ilmu Komputer</p>
        <p>Universitas Lampung</p>
    </div>
    <?= $this->endSection() ?>
<!-- 
</body>
</html> -->