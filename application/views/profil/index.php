<!-- <div class="container">
<!--/banner-->
<div class="banner-inner">
</div>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Profil</a>
  </li>
  <li class="breadcrumb-item active">Visi, Misi, dan Tujuan</li>
</ol>
<!--//banner-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-sm-8 left-blog-info-w3layouts-agileits text-left">
          <div class="container-fluid bg-light">
            <h1 class="font-weight-light text-center text-sm-left mt-4 mb-0">Visi</h1>
            <hr class="mt-2 mb-2">
            <p><?php echo nl2br(str_replace(' ', '  ', htmlspecialchars($profil['visi']))); ?></p>
          </div>
          <div class="container-fluid">
            <h1 class="font-weight-light text-center text-sm-left mt-4 mb-0">Misi</h1>
            <hr class="mt-2 mb-2">
            <p><?php echo nl2br(str_replace(' ', '  ', htmlspecialchars($profil['misi']))); ?></p>
          </div>
          <div class="container-fluid bg-light">
            <h1 class="font-weight-light text-center text-sm-left mt-4 mb-0">Tujuan</h1>
            <hr class="mt-2 mb-2">
            <p><?php echo nl2br(str_replace(' ', '  ', htmlspecialchars($profil['tujuan']))); ?></p>
          </div>
				</div>
