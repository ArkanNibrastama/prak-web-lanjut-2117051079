
<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>
<div class="container alignment-items-center" 
    style="
        width: 90%;
        height: 100%;
        padding-top: 50px;
        "
>      
    <?php $nama_kelas = session()->getFlashdata('nama_kelas');  ?>
    <form action="<?= base_url('/user/'.$user['id']) ?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>

        <h3 style="text-align:center;color:white; font-size:32px;">Edit Data User</h3>
        <div class="mb-3 d-flex justify-content-center">
            <img class="edit_photo" src="<?= $user['foto'] ?? base_url('/assets/img/placeholder-image.jpg') ?>" alt="">
        </div>
        <div class="mb-3 row d-flex justify-content-center">
            <label for="foto" class="col-sm-10 col-form-label">Foto</label>
            <div class="col-sm-10">
                <input class="form-control <?= (empty(validation_show_error('foto'))) ? '':'is-invalid' ?>" 
                type="file" id="foto" name='foto'>
                <div class="invalid-feedback">
                    <?= validation_show_error('foto') ?>
                </div>
            </div>
        </div>
        <div class="mb-3 row d-flex justify-content-center">
            <label for="nama" class="col-sm-10 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input name="nama" type="text" id="nama" 
                class="form-control <?= (empty(validation_show_error('nama'))) ? '':'is-invalid' ?>"  
                value='<?= $user['nama'] ?>' >
                <div class="invalid-feedback">
                    <?= validation_show_error('nama') ?>
                </div>
            </div>
        </div>
        <div class="mb-3 row d-flex justify-content-center">
            <label for="npm" class="col-sm-10 col-form-label">NPM</label>
            <div class="col-sm-10">
                <input name="npm" type="text" id="npm"
                class="form-control <?= (empty(validation_show_error('npm'))) ? '':'is-invalid' ?>"  
                value='<?= $user['npm'] ?>' >
                <div class="invalid-feedback">
                    <?= validation_show_error('npm') ?>
                </div>
            </div>
        </div>
        <div class="mb-3 row d-flex justify-content-center">
            <label for="kelas" class="col-sm-10 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <!-- <input name="kelas" type="text" class="form-control" id="kelas" rows=5 required> -->
                <select name="kelas" id="kelas"  aria-label="Default select example"
                class="form-control <?= (empty(validation_show_error('kelas'))) ? '':'is-invalid' ?>">
                    
                    <?php
                        foreach ($kelas as $item){
                    ?>  
                        <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php 
                        }
                    ?>
                </select>
                <div class="invalid-feedback">
                    <?= validation_show_error('kelas') ?>
                </div>
            </div>
        </div>

        <div style='margin-top:50px'></div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary w-25 p-2">Submit</button>
        </div>

    </form>
</div>
<?= $this->endSection() ?>