<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link rel="icon" href="<?=base_url('sb-admin/img/favicon.png')?>" type="favicon">
	<link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col text-center">
			<h3 class="h3 text-dark text-center"><?= $title ?></h3>
		</div>
	</div>
	<hr>
	<div class="row">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<td>No</td>
					<td>Kode Barang</td>
					<td>Nama Barang</td>
					<td>Stok</td>
					<td>Keterangan / Lokasi</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($all_barang as $barang): ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $barang->kode_barang ?></td>
						<td><?= $barang->nama_barang ?></td>
						<td><?= $barang->stok ?> <?= strtoupper($barang->satuan) ?></td>
						<td><?= $barang->keterangan ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>