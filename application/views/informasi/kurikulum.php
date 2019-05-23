<!--/banner-->
<div class="banner-inner">
</div>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Informasi</a>
  </li>
  <li class="breadcrumb-item active">Kurikulum</li>
</ol>
<!--//banner-->
<!--/main-->
<section class="main-content-w3layouts-agileits">
  <div class="container">
    <h3 class="tittle">Kurikulum</h3>
    <div class="row inner-sec">
      <!--left-->
      <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
      <!-- <div class="jumbotron"> -->
        <?php foreach($kurikulum as $klm) :?>
          <div class=" left-blog-info-w3layouts-agileits text-left">
          <!-- <div class="jumbotron"> -->
            <div class="container-fluid bg-light">
              <h1 class="font-weight-light text-center text-sm-left mt-4 mb-0"><?= $klm['file_kurikulum']; ?></h1>
              <hr class="mt-2 mb-2">
              <embed src="<?= base_url() ?>admin/upload/kurikulum/<?= $klm['judul']; ?>" width="100%" height="400"> </embed>
            </div>
  				</div>
        <?php endforeach; ?>
      </div>
      <!--//left-->
