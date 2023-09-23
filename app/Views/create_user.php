<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body style="background-image: url(<?= base_url('./assets/img/bg.png') ?>)">

    <div class="row alignment-items-center" 
        style="position:absolute; 
        background-color:white;
        width:60%;
        left:50%;
        top:45%;
        transform:translate(-50%, -45%);
        border-radius:15px;
        padding:25px;
        padding-bottom: 35px;
        color: white;
        background-color: #fdfeff47;
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(25px);"
    >   
        <?php $validation = \Config\Services::validation(); ?>
        <form action="<?= base_url('user/store') ?>" method="post">
            <h3 style="text-align:center;">Input your profile</h3>
            <div class="mb-3 row d-flex justify-content-center">
                <label for="nama" class="col-sm-10 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input name="nama" type="text" id="nama" 
                    class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid':'' ?>"  
                    value="<?= isset($old_nama)?$old_nama:'' ?>" >
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
            </div>
            <div class="mb-3 row d-flex justify-content-center">
                <label for="npm" class="col-sm-10 col-form-label">NPM</label>
                <div class="col-sm-10">
                    <input name="npm" type="text" id="npm"
                     class="form-control <?= ($validation->hasError('npm'))?'is-invalid':'' ?>"  
                     value="<?= isset($old_npm)?$old_npm:'' ?>" >
                    <div class="invalid-feedback">
                        <?= $validation->getError('npm'); ?>
                    </div>
                </div>
            </div>
            <div class="mb-3 row d-flex justify-content-center">
                <label for="kelas" class="col-sm-10 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <!-- <input name="kelas" type="text" class="form-control" id="kelas" rows=5 required> -->
                    <select name="kelas" id="kelas"  aria-label="Default select example"
                    class="form-control <?= ($validation->hasError('kelas'))?'is-invalid':'' ?>">
                        <option selected hidden value="<?= isset($old_kelas)?$old_kelas:'' ?>"><?= isset($old_nama_kelas)?$old_nama_kelas:'Pilih Kelas' ?></option>
                        <?php
                            foreach ($kelas as $item){
                        ?>  
                            <option value="<?= $item['id'] ?>">
                                <?= $item['nama_kelas'] ?>
                            </option>
                        <?php 
                            }
                        ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('kelas'); ?>
                    </div>
                </div>
            </div>

            <div style='margin-top:50px'></div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-25 p-2">Submit</button>
            </div>

        </form>
    </div>

</body>
</html>