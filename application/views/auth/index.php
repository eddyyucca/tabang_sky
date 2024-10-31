<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tabang Sky</title>

	<!-- icon -->
	<link rel="shortcut icon" href=" <?= base_url('assets/') ?>icon.ico">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url('assets');?>/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?=base_url('assets');?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url('assets');?>/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
	<style>
		body {
			background-image: url(<?= base_url('assets/Tabang_Sky_Cafe_Interior.jpg') ?>);
			/* Ganti dengan path ke gambar Anda */
			background-size: cover;
			/* Ini akan memastikan gambar menutupi seluruh layar */
			background-position: center;
			/* Ini akan menempatkan gambar di tengah */
			background-repeat: no-repeat;
			/* Ini mencegah gambar berulang */
		}

 .card {
            border-radius: 10px !important;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
        }

	</style>
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<img src="<?= base_url('assets/logo_tabang_sky.png') ?>" width="70%">
		</div>
		<!-- /.login-logo -->
		<?php
    if ($this->session->flashdata('pesan') == "pass_salah") { ?>
		<div class="alert alert-danger" role="alert">
			Incorrect Password!
		</div>
		<?php } elseif ($this->session->flashdata('pesan') == "keluar_akun") { ?>
		<div class="alert alert-success" role="alert">
			You Have Successfully Logged Out!
		</div>
		<?php } elseif ($this->session->flashdata('pesan') == "n_login") { ?>
		<div class="alert alert-warning" role="alert">
			You must log in first!
		</div>
		<?php } ?>

		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Please Login</p>
				<form action="<?= base_url('login/auth')?>" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="username" placeholder="Username">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" name="password" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<div class="icheck-primary">
								<input type="checkbox" id="remember">
								<label for="remember">
									Remember Me
								</label>
							</div>
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
				<!-- /.social-auth-links -->
				<hr>
				<footer class="text-center mt-2">
    <p>Copyright © 2024 <a href="https://github.com/eddyyucca" target="_blank">eddyyucca</a>. <br> All rights reserved.</p>
</footer>

			</div>
			<!-- /.login-card-body -->
		</div>
	</div>


	<!-- /.login-box -->
	<!-- jQuery -->
	<script src="<?=base_url('assets');?>/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?=base_url('assets');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url('assets');?>/dist/js/adminlte.min.js"></script>

</body>

</html>
