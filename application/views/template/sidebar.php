<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?= base_url('assets/') ?>logo_app.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Menambahkan Logo di Sini -->
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="<?= base_url('assets/logo_buma_tabang.png') ?>" alt="Logo" style="height: 30px;">
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url('Home') ?>" class="brand-link">
				<img src="<?= base_url('assets/') ?>logo_app.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
					style="opacity: .8">
				<span class="brand-text font-weight-light">SafetyAlertPro</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url('assets/') ?>profil-1.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="<?= base_url('home') ?>" class="d-block"><?= $username ?></a>
					</div>
				</div>
				<!-- SidebarSearch Form -->
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar">
								<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fas fa-truck-moving"> </i>
								<p>
									Data Unit
									<i class="fas fa-angle-left right"> </i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('unit') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"> </i>
										<p>All Unit</p>
									</a>
								</li>
							</ul>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('unit/idwp') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"> </i>
										<p>Unit IDWP</p>
									</a>
								</li>
							</ul>
						</li>
						</li>

						<li class="nav-item">
							<a href="<?= base_url('unit/unit_to_submission') ?>" class="nav-link">
								<i class="fas fa-tasks"> </i>
								<p>
									Re-Commissioning
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fas fa-arrow-alt-circle-up"> </i>
								<p>
									Unit Follow Up
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('unit/unit_fu') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Follow Up Open</p>
									</a>
								<li class="nav-item">
									<a href="<?= base_url('unit/unit_fu_close') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Follow Up Close</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('unit/submission') ?>" class="nav-link">
							<i class="fas fa-check"> </i>
								<p>
									Submission To Owner
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('unit/stickers_ready') ?>" class="nav-link">
								<i class="fas fa-check-double"> </i>
								<p>
									Stiker Ready
								</p>
							</a>
						</li>

            <li class="nav-item">
							<a href="#" class="nav-link">
							<i class="fas fa-history"> </i>
								<p>
									History
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('home/will_be_published') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Unit History</p>
									</a>
								<li class="nav-item">
									<a href="<?= base_url('home/will_be_published') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Collection History</p>
									</a>
								</li>
							</ul>
						</li>
						<hr class="custom-hr">

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fas fa-chart-pie"></i>
								<p>
									Laporan
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('home/will_be_published') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Unit Re-Commisioning</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('home/will_be_published') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Unit Ready</p>
									</a>
								</li>
							</ul>
						</li>
						<?php
         
          if($level == 'admin'): ?>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fas fa-users"> </i>
								<p>
									User Login
									<i class="right fas fa-angle-left"> </i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('users') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"> </i>
										<p>User</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('users/reset_password') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"> </i>
										<p>User Password</p>
									</a>
								</li>
							</ul>
						</li>
						<?php endif; ?>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="fas fa-envelope"> </i>
								<p>
									Email
									<i class="fas fa-angle-left right"> </i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('email/data_email') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"> </i>
										<p>List Email</p>
									</a>
								</li>
							</ul>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('email/setting_email') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"> </i>
										<p>Setting Email</p>
									</a>
								</li>
							</ul>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('send_email') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"> </i>
										<p>Send Email Re-Com</p>
									</a>
								</li>
							</ul>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('send_email/send_fu') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"> </i>
										<p>Send Email F/U</p>
									</a>
								</li>
							</ul>
						</li>
						<!-- <li class="nav-item">
            <a href="#" class="nav-link">
           <i class="fas fa-calendar-times"> </i>
              <p>
                Penjadwalan
                <i class="fas fa-angle-left right"> </i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"> </i>
                  <p>Kosong</p>
                </a>
              </li>
  
            </ul>
          </li> -->
						</li>

						<li class="nav-header">
							<hr>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-widget="fullscreen" href="#">
								<i class="fas fa-expand-arrows-alt"> </i>
								<p>
									Fullscreen
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('login/keluar') ?>" class="nav-link">
								<i class="fas fa-sign-out-alt"> </i>
								<p>
									Logout
								</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
