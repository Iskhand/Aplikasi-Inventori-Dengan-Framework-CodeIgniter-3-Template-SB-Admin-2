<nav style="background-color: #15161A;" class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>
					<!-- <button class="btn btn-link rounded-circle">
						<i class="fab fa-whatsapp" style="color: greenyellow;"></i>
					</button> -->
					<!-- <a style="text-align: center; margin-top: 1%;" href="https://api.whatsapp.com/send/?phone=628971681850&type=phone_number&app_absent" target="_blank"><i class="fab fa-whatsapp" style="color: greenyellow;"></i><h6 style="color: black;">admin</h6></a> -->
					<!-- <?php
                date_default_timezone_set('Asia/Jakarta');
                echo "<font color='yellow' face='arial bold'>";
                echo date('d-M-Y H:i');
                echo " WIB";
                echo "</font>";
              ?> -->
          <div class="topbar-divider d-none d-sm-block"></div>
          <marquee><font size="4" style="color: white;" face="Copperplate Gothic Bold"><img style="width: 50px;" src="<?=base_url('sb-admin/img/train.gif')?>">- Sistem Informasi Inventaris UNU Blitar <b style="color: aquamarine;"><i>Perlengkapan dan Inventarisasi Aset -</b></i><img style="width: 50px;" src="<?=base_url('sb-admin/img/train.gif')?>"></font></marquee>
					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

						<div class="topbar-divider d-none d-sm-block"></div>
						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span style="color: yellow;" class="mr-2 d-none d-lg-inline text-black-600 small"><?= $this->session->login['nama'] ?></span>
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="<?= base_url('logout') ?>">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>
					</ul>
				</nav>