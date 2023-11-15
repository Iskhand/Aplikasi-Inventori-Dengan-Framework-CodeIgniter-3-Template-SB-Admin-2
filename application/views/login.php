<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="icon" href="<?=base_url('sb-admin/img/favicon.png')?>" type="favicon">

	<title>Administrator - Login</title>
	<link href="<?= base_url('sb-admin') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url('sb-admin') ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
        .bg-login-image {
            background-image: url("<?= base_url('sb-admin/img/logo.png'); ?>");
            background-repeat: no-repeat; 
            background-size: 85%;
        }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                            <div class="text-center mb-4">
                                <h1 class="h4 text-gray-900">.: Aplikasi SIM Inventaris Barang :.</h1>
                                <span class="text-muted">Perlengkapan dan Inventarisasi Aset</span>
			                            </div>
																		<div class="row">
																			<div class="col-lg-12">
																				<div class="p-5">
																					<div class="text-center">
																					<?php if ($this->session->flashdata('success')) : ?>
																						<div class="alert alert-success alert-dismissible fade show" role="alert">
																							<?= $this->session->flashdata('success') ?>
																							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																								<span aria-hidden="true">&times;</span>
																							</button>
																						</div>
																					<?php elseif($this->session->flashdata('error')) : ?>
																						<div class="alert alert-danger alert-dismissible fade show" role="alert">
																							<?= $this->session->flashdata('error') ?>
																							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																								<span aria-hidden="true">&times;</span>
																							</button>
																						</div>
																					<?php endif ?>
																					</div>
																					<form class="user" method="POST" action="<?= base_url('login/proses_login') ?>">
																						<div class="form-group">
																							<input type="text" class="form-control" id="username" placeholder="Masukkan Username" autocomplete="off" required name="username">
																						</div>
																						<div class="form-group">
																							<input type="password" class="form-control" id="password" placeholder="Masukkan Password" required name="password">
																						</div>
																						<div class="form-group">
																							<select name="role" id="role" class="form-control" required>
																								<!-- <option value="">Masuk Sebagai</option> -->
																								<option value="admin">Admin</option>
																								<option value="petugas">Petugas</option>
																							</select>
																						</div>
																						<button type="submit" class="btn btn-primary btn-block" name="login">
																							Login
																						</button>
																					</form>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

															</div>

														</div>

													</div>

	<script src="<?= base_url('sb-admin') ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/js/sb-admin-2.min.js"></script>
</body>

</html>
