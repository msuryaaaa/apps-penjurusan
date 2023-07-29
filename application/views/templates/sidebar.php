<body class="hold-transition sidebar-mini">

	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
						<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
						<span class="d-none d-md-inline"><?= ucfirst($this->fungsi->user_login()->nama) ?></span>
					</a>
					<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<li class="user-header bg-primary">
							<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

							<p>
								<?= $this->fungsi->user_login()->nama ?>
								<small><?= $this->fungsi->user_login()->level == 1 ? 'BK' : 'Siswa'  ?> , SMAN 15 Bandung</small>
							</p>
						</li>

						<li class="user-footer">
							<a href="<?= site_url('auth/logout') ?>" class="btn btn-danger btn-flat float-right">Logout</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>

		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a href="<?= base_url('dashboard') ?>" class="brand-link">
				<img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Apps Penjurusan</span>
			</a>

			<div class="sidebar">

				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-header">MAIN NAVIGATION</li>
						<?php if ($this->fungsi->user_login()->level == 1) { ?>
							<li class="nav-item">
								<a href="<?= site_url('dashboard') ?>" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Dashboard</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link ">
									<i class="nav-icon fas fa-users"></i>
									<p>Data Training</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('jurusan') ?>" class="nav-link ">
									<i class="nav-icon fas fa-database"></i>
									<p>Data Jurusan</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link ">
									<i class="nav-icon fas fa-book"></i>
									<p>Hasil Penjurusan</p>
								</a>
							</li>
							<li class="nav-header">FORM SISWA</li>
							<li class="nav-header">SETTINGS</li>
							<li class="nav-item">
								<a href="<?= site_url('user') ?>" class="nav-link">
									<i class="nav-icon fas fa-user"></i>
									<p>Users</p>
								</a>
							</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</aside>

		<div class="content-wrapper">
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Halaman <?= $title; ?></h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
								<li class="breadcrumb-item active"><?= $title; ?></li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">