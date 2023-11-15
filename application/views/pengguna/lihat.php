<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?=base_url('sb-admin/img/favicon.png')?>" type="favicon">
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		<?php $this->load->view('partials/sidebar.php') ?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('pengguna') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						
						<a href="<?= base_url('pengguna/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a>
					</div>
				</div>
				<hr>
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
				<div class="card shadow">
					<div class="card-header"><strong>Daftar Pengguna</strong></div>
					<div class="card-body">
						<div class="table-responsive">
							<table style="color: black;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead style="text-align: center; color: white;" class="bg-gradient-primary">
									<tr>
										<td>No</td>
										<td>Kode</td>
										<td>Nama</td>
										<td>Username</td>
										<td>Password</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($all_pengguna as $pengguna): ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $pengguna->kode ?></td>
											<td><?= $pengguna->nama ?></td>
											<td><?= $pengguna->username ?></td>
											<td><?= $pengguna->password ?></td>
											<td>
												<a href="<?= base_url('pengguna/ubah/' . $pengguna->id) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a>
												<!-- <a onclick="return confirm('apakah anda yakin?')" href="<?= base_url('pengguna/hapus/' . $pengguna->id) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus</a> -->
											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>				
				</div>
				</div>
			</div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
	<script src="<?= base_url('sb-admin/js/demo/datatables-demo.js') ?>"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>
</html>