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
	<div id="main">
		<div id="inner">
			<img src="<?= base_url('assets/img/logo.png') ?>" class="logo">
			<h3 class="title">Kontrol keuanganmu untuk masa depan.</h3>
			<p class="sub">Copyright &copy; 2019 Naufal Rivaldi. All Rights Reserved.</p>

			<a href="#" class="btn" data-toggle="modal" data-target="#login">Mulai</a>
		</div>
		<div id="illustration">
			<img src="<?= base_url('assets/img/mba.png') ?>" id="mba" class="iconM">
			<img src="<?= base_url('assets/img/su.png') ?>" id="su" class="iconM">
			<img src="<?= base_url('assets/img/kud.png') ?>" id="kud" class="iconM">
			<img src="<?= base_url('assets/img/monitor.png') ?>" id="monitor">
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