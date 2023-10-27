
<?= $this->extend('layouts/app'); ?>

<?= $this->section('content') ?>
<div class="container alignment-items-center" 
    style="position:absolute; 
    width:60%;
    left:50%;
    top:45%;
    transform:translate(-50%, -45%);"
>      
    <form action="<?= base_url('/kelas/'.$kelas['id']) ?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>

        <h3 style="text-align:center;">Edit Data Kelas</h3>
        <div class="mb-3 row d-flex justify-content-center">
            <label for="nama_kelas" class="col-sm-10 col-form-label">Nama Kelas</label>
            <div class="col-sm-10">
                <input name="nama_kelas" type="text" id="nama_kelas" 
                class="form-control <?= (empty(validation_show_error('nama_kelas'))) ? '':'is-invalid' ?>"  
                value='<?= $kelas['nama_kelas'] ?>' >
                <div class="invalid-feedback">
                    <?= validation_show_error('nama_kelas') ?>
                </div>
            </div>
        </div>
        <div class="mb-3 row d-flex justify-content-center">
            <label for="kapasitas" class="col-sm-10 col-form-label">Kapasitas</label>
            <div class="col-sm-10">
                <input name="kapasitas" type="number" id="kapasitas"
                class="form-control <?= (empty(validation_show_error('kapasitas'))) ? '':'is-invalid' ?>"  
                value='<?= $kelas['kapasitas'] ?>' >
                <div class="invalid-feedback">
                    <?= validation_show_error('kapasitas') ?>
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