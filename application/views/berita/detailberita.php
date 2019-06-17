<!--/banner-->
<div class="banner-inner">
</div>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Berita</a>
  </li>
  <li class="breadcrumb-item active"><?= $detail['judul_berita']; ?></li>
</ol>
<!--//banner-->
<!--/main-->
<section class="main-content-w3layouts-agileits">
  <div class="container">
    <h3 class="tittle">Berita</h3>
    <div class="row inner-sec">
      <!--left-->
      <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
        <article class="blog-grid-top">
          <div class="b-grid-top">
            <div class="blog_info_left_grid">
              <a href="<?= base_url(); ?>uploads/img/berita/<?= $detail['gambar']; ?>">
                <img src="<?= base_url(); ?>uploads/img/berita/<?= $detail['gambar']; ?>" class="w-100 img-fluid" alt="">
              </a>
            </div>
            <div class="blog-info-middle">
              <ul>
                <li>
                  <a href="#">
                    <i class="far fa-calendar-alt"></i><?= $detail['tanggal']; ?></a>
                </li>
              </ul>
            </div>
          </div>

          <h3>
            <a href="single.html"><?= $detail['judul_berita']; ?> </a>
          </h3>
          <p><?= $detail['isi']; ?></p>
        </article>
      </div>
      <!--//left-->
