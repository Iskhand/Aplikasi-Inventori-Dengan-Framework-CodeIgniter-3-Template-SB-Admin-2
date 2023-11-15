<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?=base_url('sb-admin/img/favicon.png')?>" type="favicon">
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col text-center">
			<h3 class="h3 text-dark"><?= $title ?></h3>
			<!-- <h4 class="h4 text-dark "><strong><?= $perusahaan->nama_perusahaan ?></strong></h4> -->
		</div>
	</div>
	<hr>
	<div class="row">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<td>No Keluar</td>
					<td>Nama Barang</td>
					<td>Jumlah</td>
					<td>Nama Petugas</td>
					<td>Nama Pengambil</td>
					<td>Tanggal Keluar</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($all_pengeluaran as $pengeluaran): ?>
					<tr>
						<td><?= $pengeluaran->no_keluar ?></td>
						<td><?= $pengeluaran->nama_barang ?></td>
						<td><?= $pengeluaran->jumlah ?></td>
						<td><?= $pengeluaran->nama_petugas ?></td>
						<td><?= $pengeluaran->nama_customer ?></td>
						<td><?= $pengeluaran->tgl_keluar ?> Pukul <?= $pengeluaran->jam_keluar ?></td>
						<td><?= $pengeluaran->keterangan ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>