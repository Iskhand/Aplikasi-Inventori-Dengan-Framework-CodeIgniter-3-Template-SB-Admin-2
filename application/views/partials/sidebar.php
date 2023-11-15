<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
			<a style="background-color: #1E252D;" class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
				<div>
					<img style="width: 40px; height: 40px;"src="<?= base_url('sb-admin/img/logo.png'); ?>" alt="">
				</div>
				<div class="sidebar-brand-text mx-3">INVENTARIS <sup>UNU BLITAR</sup></div>
			</a>
			<hr class="sidebar-divider my-0" >
			<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('dashboard') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span >Dashboard</span></a>
			</li>
			<hr class="sidebar-divider">

			<div class="sidebar-heading">
				Master
			</div>

			<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('barang') ?>">
					<i class="fas fa-fw fa-box"></i>
					<span>Stok Barang</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'customer' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('customer') ?>">
					<i class="fas fa-fw fa-users"></i>
					<span>Data Pengambil</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'supplier' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('supplier') ?>">
					<i class="fas fa-fw fa-user"></i>
					<span>Data Sumber Barang</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'petugas' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('petugas') ?>">
					<i class="fas fa-fw fa-users"></i>
					<span>Data User</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">
	
			<div class="sidebar-heading">
				Transaksi
			</div>

			<li class="nav-item <?= $aktif == 'penerimaan' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('penerimaan') ?>">
				<i class="fas fa-fw fa-arrow-circle-down"></i>
					<span>Barang Masuk</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'pengeluaran' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('pengeluaran') ?>">
				<i class="fas fa-fw fa-arrow-circle-up"></i>
					<span>Barang Keluar</span></a>
			</li>

			<hr class="sidebar-divider">
			<?php if ($this->session->login['role'] == 'admin'): ?>
				<!-- Heading -->
				<div class="sidebar-heading">
					Pengaturan
				</div>

				<li class="nav-item <?= $aktif == 'pengguna' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('pengguna') ?>">
						<i class="fas fa-fw fa-users"></i>
						<span>Manajemen Pengguna</span></a>
				</li>

				<li class="nav-item <?= $aktif == 'web' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('web') ?>">
						<i class="fas fa-fw fa-building"></i>
						<span>Profil SIM</span></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('logout') ?>">
						<i class="fas fa-sign-out-alt"></i>
						<span>Logout</span></a>
				</li>
			<?php elseif ($this->session->login['role'] == 'petugas'): ?>
				<div class="sidebar-heading">
					Service
				</div>
				<li class="nav-item">
					<a class="nav-link" href="https://api.whatsapp.com/send/?phone=628971681850&type=phone_number&app_absent" target="_blank">
					<i class="fab fa-whatsapp"></i>
						<span>contact</span></a>
				</li>
			<?php endif?>
			<hr class="sidebar-divider d-none d-md-block">
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>