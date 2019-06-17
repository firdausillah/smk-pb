<?php $nav = $nav_uri = explode('/', $_SERVER['REQUEST_URI']);
// $nav_dok = $nav[count($nav)]
$nav = $nav[3];
// print_r($nav[3]);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $judul; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=$img=base_url("uploads/img/".$this->session->userdata('gambar'));?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $nama=$this->session->userdata('nama'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= $img; ?>" class="img-circle" alt="User Image">
                <p>
                  <?= $nama; ?>
                  <small><?= date('l, d-m-Y');?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url("login/logout"); ?>" class="btn btn-default btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=$img?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $nama; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo ($nav == 'home' ? 'active' : '') ?>"><a href="<?= base_url(); ?>admin/home"><i class="fa fa-home  treeview"></i> <span>Home</span></a></li>
        <li class="<?php echo ($nav == 'dt_user' ? 'active' : '') ?> "><a href="<?= base_url(); ?>admin/dt_user"><i class="fa fa-users treeview"></i> <span>Data Users</span></a></li>
        <li class="treeview"><a href="#"><i class="fa fa-graduation-cap"></i> <span>Akademik</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu"><li><a href="<?= base_url(); ?>admin/dt_guru"><i class="fa fa-circle-o"></i> Data Guru</a></li>
            <li class="treeview"><a href="<?= base_url(); ?>admin/"><i class="fa fa-circle-o"></i> Data Siswa <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
              <ul class="treeview-menu">
              <?php foreach ($menu as $key => $jurusan) : ?>
                <li class="treeview"><a href="jurusan<?=$key?>"><i class="fa fa-circle-o"></i> <?= $jurusan['name']; ?> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                  <?php foreach ($jurusan['submenu'] as $key_kelas => $dkelas) : ?>
                  <ul class="treeview-menu" id="jurusan<?=$key?>">
                    <li><a href="<?=site_url('admin/siswa/index/'.$key_kelas)?>"><i class="fa fa-circle-o"></i> kelas <?= $dkelas ?></a></li>
                  </ul>
                <?php endforeach; ?>
                </li>
              <?php endforeach; ?>
                <li><a href="<?= base_url("admin/siswa/tambah") ?>">Tambah Data Siswa</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="<?= base_url(); ?>admin/nilai"><i class="fa fa-circle-o"></i> Data Nilai Siswa <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
              <ul class="treeview-menu">
              <?php foreach ($menu as $key => $jurusan) : ?>
                <li class="treeview"><a href="ajurusan<?=$key?>"><i class="fa fa-circle-o"></i> <?= $jurusan['name']; ?> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                  <?php foreach ($jurusan['submenu'] as $key_kelas => $dkelas) : ?>
                  <ul class="treeview-menu" id="ajurusan<?=$key?>">
                    <li><a href="<?=site_url('admin/nilai/index/'.$key_kelas)?>"><i class="fa fa-circle-o"></i> kelas <?= $dkelas ?></a></li>
                  </ul>
                <?php endforeach; ?>
                </li>
              <?php endforeach; ?>
              </ul>
            </li>
            <li><a href="<?= base_url(); ?>admin/jurusan"><i class="fa fa-circle-o"></i> Jurusan</a></li>
            <li><a href="<?= base_url(); ?>admin/kelas"><i class="fa fa-circle-o"></i> Kelas</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-globe"></i> <span>Informasi</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <!-- <li><a href="<?= base_url(); ?>admin/profil"><i class="fa fa-circle-o"></i> Data Profil</a></li> -->
            <li><a href="<?= base_url(); ?>admin/berita"><i class="fa fa-circle-o"></i> Berita</a></li>
            <li><a href="<?= base_url(); ?>admin/kalender"><i class="fa fa-circle-o"></i> Kalender Pendidikan</a></li>
            <li><a href="<?= base_url(); ?>admin/kurikulum"><i class="fa fa-circle-o"></i> Kurikulum</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="<?= base_url(); ?>admin/"><i class="fa fa-dashboard"></i> <span>Slider</span></a></li>
        <li class="treeview"><a href="<?= base_url(); ?>admin/"><i class="fa fa-fax"></i> <span>Extrakulikuler</span></a></li>
        <li class="treeview"><a href="<?= base_url(); ?>admin/"><i class="fa fa-users"></i> <span>Data Users</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
