<!--/banner-->
<div class="banner-inner">
</div>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Home</a>
  </li>
  <li class="breadcrumb-item active">Berita</li>
</ol>
<!--//banner-->

<!--/main-->
<section class="main-content-w3layouts-agileits">
  <div class="container">
    <h3 class="tittle">Berita Terbaru</h3>
    <div class="inner-sec">
      <!--left-->
      <div class="left-blog-info-w3layouts-agileits text-left">
        <div class="row">
          <?php foreach ($berita as $brt) : ?>
          <div class="col-lg-4 card">
            <a href="<?= site_url(); ?>berita/detailberita/<?= $brt['id_berita']; ?>">
              <img src="<?= base_url(); ?>/admin/upload/berita/<?= $brt['gambar']; ?>" class="card-img-top img-fluid" alt="">
            </a>
            <div class="card-body">
              <ul class="blog-icons my-4">
                <li>
                  <a href="#">
                    <i class="far fa-calendar-alt"></i> <?= $brt['tanggal']; ?></a>
                </li>
              </ul>
              <h5 class="card-title">
                <a href="<?= site_url(); ?>berita/detailberita/<?= $brt['id_berita']; ?>"><?= $brt['judul_berita']; ?></a>
              </h5>
              <p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
              <a href="<?= site_url(); ?>berita/detailberita/<?= $brt['id_berita']; ?>" class="btn btn-primary read-m">Read More</a>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
        <div class="">
          <?= $pagination; ?>
        </div>
        <!--//left-->
      </div>
    </div>
  </div>
</section>
<!--//main-->
