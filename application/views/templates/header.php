<?php 	$nav = $nav_uri = explode('/', $_SERVER['REQUEST_URI']);
	// $nav_dok = $nav[count($nav)]
	$nav = $nav[2];
	// echo $nav; exit();
	 ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?= $judul; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="<?= base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.desoslide.css">
	<link href="<?= base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?= base_url(); ?>assets/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/logo_.ico">
</head>

<body>

  	<header>
  		<div class="top-bar_sub_w3layouts container-fluid">
  			<div class="row">
  				<div class="col-md-4 logo text-left">
  					<a class="navbar-brand" href="#" >
  						<img src="<?= base_url(); ?>assets/img/logo1.png" class="img-responsive" height="60" alt=""></a>
  				</div>
  				<div class="col-md-8 top-forms text-right mt-lg-3 mt-md-1 mt-0">
  					<span>Selamat Datang !</span>
  					<span class="mx-lg-4 mx-md-2  mx-1">
  						<a href="<?= site_url(); ?>login">
  							<i class="fas fa-lock"></i> Log In</a>
  					</span>
  				</div>
  			</div>
  		</div>

  			<div class="header_top " id="home">
  				<nav class="navbar navbar-expand-lg navbar-light bg-light">
  					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
  						aria-expanded="false" aria-label="Toggle navigation">
  						<span class="navbar-toggler-icon"></span>
  				   </button>


  					<div class="collapse navbar-collapse" id="navbarSupportedContent">
  						<ul class="navbar-nav mr-auto">
  							<li class="nav-item <?php echo ($nav == 'beranda' ? 'active' : '') ?>">
  								<a class="nav-link" href="<?=site_url(); ?>beranda">Beranda
  									<span class="sr-only">(current)</span>
  								</a>
  							</li>
								<li class="nav-item dropdown">
  								<a class="nav-link dropdown-toggle <?php echo ($nav == 'profil' ? 'active' : '') ?>" href="#" id="navbarDropdownprofil" role="button" data-toggle="dropdown" aria-haspopup="true"
  								    aria-expanded="false">
  									Profil
  								</a>
  								<div class="dropdown-menu" aria-labelledby="navbarDropdownprofil">
  									<a class="dropdown-item" href="#"></a>
  									<a class="dropdown-item" href="<?= site_url();?>profil">Visi, Misi, Dan Tujuan Sekolah</a>
  									<div class="dropdown-divider"></div>
  									<a class="dropdown-item" href="<?= site_url();?>profil/guru">Guru dan Tenaga Kependidikan</a>
  									<div class="dropdown-divider"></div>
  									<a class="dropdown-item" href="<?= site_url();?>">Profil Umum</a>
  									<div class="dropdown-divider"></div>
  									<a class="dropdown-item" href="<?= site_url();?>profil/struktur">Struktur Sekolah</a>
  								</div>
  							</li>
								<li class="nav-item dropdown">
  								<a class="nav-link dropdown-toggle <?php echo ($nav == 'informasi' ? 'active' : '') ?>" href="#" id="navbarDropdowninfo" role="button" data-toggle="dropdown" aria-haspopup="true"
  								    aria-expanded="false">
  									Informasi
  								</a>
  								<div class="dropdown-menu" aria-labelledby="navbarDropdowninfo">
  									<a class="dropdown-item" href="#"></a>
  									<a class="dropdown-item" href="<?= site_url();?>informasi">Pengumuman</a>
  									<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= site_url();?>informasi/kurikulum">Kurikulum</a>
                    <div class="dropdown-divider"></div>
  									<a class="dropdown-item" href="<?= site_url();?>informasi/profil_umum">Profil Umum</a>
  									<div class="dropdown-divider"></div>
  									<a class="dropdown-item" href="<?= site_url();?>informasi/kemitraan">Kemitraan DU/DI</a>
  									<div class="dropdown-divider"></div>
  									<a class="dropdown-item" href="<?= site_url();?>informasi/pendataan_siswa">Daftar Sebagai Siswa Aktif</a>
  									<div class="dropdown-divider"></div>
  									<a class="dropdown-item" href="<?= site_url();?>">Alumni</a>
  									<div class="dropdown-divider"></div>
  									<a class="dropdown-item" href="<?= site_url();?>">Organisasi dan Kegiatan Sekolah</a>
  								</div>
  							</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle <?php echo ($nav == 'keahlian' ? 'active' : '') ?>" href="#" id="navbarDropdownahli" role="button" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="false">
										Kompetensi Keahlian
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownahli">
										<a class="dropdown-item" href="#"></a>
										<a class="dropdown-item" href="<?= site_url();?>keahlian/multimedia">Multimedia</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?= site_url();?>">Akuntansi</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?= site_url();?>">Keperawatan</a>
									</div>
								</li>
  							<li class="nav-item">
  								<a class="nav-link <?php echo ($nav == 'berita' ? 'active' : '') ?>" href="<?= site_url();?>berita">Berita</a>
  							</li>
								<li class="nav-item">
  								<a class="nav-link <?php echo ($nav == 'ppdb' ? 'active' : '') ?>" href="<?= site_url();?>ppdb">PPDB</a>
  							</li>
  						</ul>
  					</div>
  				</nav>

  			</div>
  	</header>
  	<!--//header-->
