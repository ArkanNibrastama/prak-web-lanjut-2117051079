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
        top:50%;
        transform:translate(-50%, -45%);
        border-radius:15px;
        padding:15px;
        padding-bottom: 35px;
        color: white;
        background-color: #fdfeff47;
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);"
    >
        <form action="<?= base_url('user/store') ?>" method="post">
            <h3 style="text-align:center;">Input your profile</h3>
            <div class="mb-3 row d-flex justify-content-center">
                <label for="nama" class="col-sm-10 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input name="nama" type="text" class="form-control" id="nama" required>
                </div>
            </div>
            <div class="mb-3 row d-flex justify-content-center">
                <label for="npm" class="col-sm-10 col-form-label">NPM</label>
                <div class="col-sm-10">
                    <input name="npm" type="number" class="form-control" id="npm" required>
                </div>
            </div>
            <div class="mb-3 row d-flex justify-content-center">
                <label for="kelas" class="col-sm-10 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input name="kelas" type="text" class="form-control" id="kelas" rows=5 required>
                </div>
            </div>

            <div style='margin-top:50px'></div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-3 w-25 p-2">Submit</button>
            </div>

        </form>
    </div>


    <!-- <form action="<?= base_url('/user/store') ?>" method="post">
        <label>Nama :   </label>
        <input type="text" name="nama"/>
        <br><br>
        <label>NPM  :   </label>
        <input type="text" name="npm"/>
        <br><br>
        <label>Kelas    :   </label>
        <input type="text" name="kelas"/>
        <br><br>
        <input type="submit" value="Submit">
    </form> -->
</body>
</html>