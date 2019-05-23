
<?php $nav = $nav_uri = explode('/', $_SERVER['REQUEST_URI']);
// $nav_dok = $nav[count($nav)]
$nav = $nav[3];
// print_r($nav[3]);
?>
<!doctype html>
<html lang="en">

<head>
	<title><?= $judul;  ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>ssets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(); ?>assets/img/favicon.png">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="brand">
		    <a href="index.html"><img src="<?= base_url(); ?>assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
				<!-- <h4>SMK PUSPABANGSA 2</h4> -->
		  </div>
		  <div class="container-fluid">
		    <div class="navbar-btn">
		      <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
		    </div>
		    <div id="navbar-menu">
		      <ul class="nav navbar-nav navbar-right">
		        <!-- NOTIF -->
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
		            <i class="lnr lnr-alarm"></i>
		            <span class="badge bg-danger">5</span>
		          </a>
		          <ul class="dropdown-menu notifications">
		            <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
		            <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
		            <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
		            <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
		            <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
		            <li><a href="#" class="more">See all notifications</a></li>
		          </ul>
		        </li>
		        <!-- END NOTIF -->
		        <!-- OPTIONS -->
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?= base_url(); ?>assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
		          <ul class="dropdown-menu">
		            <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
		            <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
		            <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
		            <li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
		          </ul>
		        </li>
		        <!-- END OPTIONS -->
		      </ul>
		    </div>
		  </div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
		  <div class="sidebar-scroll">
		    <nav>
		      <ul class="nav">
		        <li><a href="<?= base_url(); ?>home" class="<?php echo ($nav == 'home' ? 'active' : '') ?>"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
		        <li><a href="<?= base_url(); ?>user" class="<?php echo ($nav == 'user' ? 'active' : '') ?>"><i class="lnr lnr-users"></i> <span>Data User</span></a></li>
						<li>
							<a href="#subAkad" data-toggle="collapse" class="collapsed <?php echo ($nav == 'guru' ? 'active' : '') ?>"><i class="fa fa-graduation-cap"></i> <span>Akademik</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subAkad" class="collapse ">
								<ul class="nav">
									<li><a href="<?= base_url(); ?>guru" class="<?php echo ($nav == 'guru' ? 'active' : '') ?>"><i class="lnr lnr-user"></i> <span>Data Guru</span></a></li>
									<li><a href="<?= base_url(); ?>siswa/siswa" class="<?php echo ($nav == 'siswa' ? 'active' : '') ?>"><i class="lnr lnr-user"></i> <span>Data Siswa</span></a></li>
									<li>
										<a href="#submenu1" class="collapsed" data-toggle="collapse"><i class="fa fa-globe"></i> Siswa <i class="icon-submenu lnr lnr-chevron-left"></i></a>
										<div id="submenu1" class="collapse" style="margin-left:30px;">
											<ul class="nav">
												<?php foreach ($menu as $key => $jurusan) {  ?>
													<li>
														<a href="#jurusan<?=$key?>" data-toggle="collapse" class="collapsed"><?=$jurusan['name']?> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
														<div id="jurusan<?=$key?>" class="collapse" style="margin-left:30px;">
															<ul class="nav">
																<?php foreach ($jurusan['submenu'] as $key_kelas => $dkelas) {?>
																	<li>
																		<a href="<?=site_url('siswa/index/'.$key_kelas)?>"><?=$dkelas?></a>
																	</li>
																<?php } ?>
															</ul>
														</div>
													</li>
												<?php } ?>
											</ul>
										</div>
									</li>
									<li>
										<a href="#submenu2" class="collapsed" data-toggle="collapse"><i class="fa fa-globe"></i> Nilai <i class="icon-submenu lnr lnr-chevron-left"></i></a>
										<div id="submenu2" class="collapse" style="margin-left:30px;">
											<ul class="nav">
												<?php foreach ($menu as $key => $jurusan) {  ?>
													<li>
														<a href="#jurusan1<?=$key?>" data-toggle="collapse" class="collapsed"><?=$jurusan['name']?> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
														<div id="jurusan1<?=$key?>" class="collapse" style="margin-left:30px;">
															<ul class="nav">
																<?php foreach ($jurusan['submenu'] as $key_kelas => $dkelas) {?>
																	<li>
																		<a href="<?=site_url('nilai/index/'.$key_kelas)?>"><?=$dkelas?></a>
																	</li>
																<?php } ?>
															</ul>
														</div>
													</li>
												<?php } ?>
											</ul>
										</div>
									</li>
									<li><a href="<?= base_url();?>jurusan" class="<?php echo ($nav == 'jurusan' ? 'active' : '') ?>"><i class="fa fa-graduation-cap"></i> <span>Jurusan</span></a>
									<li><a href="<?= base_url();?>kelas" class="<?php echo ($nav == 'kelas' ? 'active' : '') ?>"><i class="lnr lnr-apartment"></i> <span>Kelas</span></a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed <?php echo ($nav == 'guru' ? 'active' : '') ?>"><i class="fa fa-globe"></i> <span>Informasi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="<?= base_url();?>data_profil" class="<?php echo ($nav == 'data_profil' ? 'active' : '') ?>"><i class="fa fa-vcard-o"></i> <span>Data Profil</span></a></li>
									<li><a href="<?= base_url();?>berita" class="<?php echo ($nav == 'berita' ? 'active' : '') ?>"><i class="fa fa-newspaper-o"></i> <span>Berita </span></a></li>
									<li><a href="<?= base_url();?>kalender" class="<?php echo ($nav == 'kalender' ? 'active' : '') ?>"><i class="lnr lnr-calendar-full"></i> <span>Kalender Pendidikan</span></a></li>
									<li><a href="<?= base_url();?>kurikulum" class="<?php echo ($nav == 'kurikulum' ? 'active' : '') ?>"><i class="lnr lnr-calendar-full"></i> <span>Kurikulum</span></a></li>
								</ul>
							</div>
						</li>
		        <li><a href="<?= base_url();?>data_beranda" class="<?php echo ($nav == 'data_beranda' ? 'active' : '') ?>"><i class="fa fa-dashboard"></i> <span>Data Beranda (Slider)</span></a></li>
		        <li><a href="<?= base_url();?>bahan_ajar" class="<?php echo ($nav == 'bahan_ajar' ? 'active' : '') ?>"><i class="fa fa-bookmark-o"></i> <span>Bahan Ajar</span></a></li>
		        <li><a href="<?= base_url();?>ekskul" class="<?php echo ($nav == 'ekskul' ? 'active' : '') ?>"><i class="fa fa-id-badge"></i> <span>Extrakulikuler</span></a></li>
		      </ul>
		    </nav>
		  </div>
		</div>
		<!-- END LEFT SIDEBAR -->
