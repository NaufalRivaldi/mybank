<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X UA-Compatible" content="ie=edge">
	
	<title><?= APP_NAME ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css') ?>">
	<link rel="icon" href="<?= base_url('assets/img/icon.png') ?>">
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <center>
                    <img src="<?= base_url('assets/img/icon.png') ?>" alt="logo" width="20%">
                </center>
                <div class="card">
                <div class="card-header">
                    <center>
                        <h5><?= APP_NAME ?> - Daftar</h5>
                    </center>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="username" class="col-md-3 col-form-label">Username</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-md-3 col-form-label">Nama Lengkap</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <center>
                    <p>
                        Copyright &copy; 2019 Naufal Rivaldi. All Rights Reserved.
                    </p>
                </center>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

	<!-- modal -->
	<?php $this->load->view('_part/modal.php'); ?>
	<!-- modal -->

	<!-- js -->
	<?php $this->load->view('_part/js.php'); ?>
	<!-- js -->
</body>
</html>