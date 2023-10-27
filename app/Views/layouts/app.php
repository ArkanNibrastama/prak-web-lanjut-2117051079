<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/style2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/style.css'); ?>">

</head>
<body style="background-image: url(<?= base_url('./assets/img/bg.png') ?>)">

    <div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
            <div class="img bg-wrap text-center py-4" style="background-image: url(<?= base_url('./assets/img/bg_1.jpg') ?>);">
                <div class="user-logo">
                    <img class="photo_sidebar"src="<?= base_url('./assets/img/profile.jpg') ?>">
                    <br><br>
                    <h3>M. Arkan Nibrastama</h3>
                    <p>2117051079</p>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="<?= ($page == 'home')?'active':'' ?>">
                    <a href="<?= base_url('/') ?>"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li class="<?= ($page == 'user')?'active':'' ?>">
                    <a href="<?= base_url('/user') ?>"><span class="fa fa-gift mr-3"></span> User</a>
                </li>
                <li class="<?= ($page == 'kelas')?'active':'' ?>">
                    <a href="<?= base_url('/kelas') ?>"><span class="fa fa-trophy mr-3"></span> Kelas</a>
                </li>
            </ul>
    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <?= $this->renderSection('content'); ?>
        </div>
	</div>
        

    <script src="<?= base_url('./assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('./assets/js/popper.js') ?>"></script>
    <script src="<?= base_url('./assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('./assets/js/main.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>