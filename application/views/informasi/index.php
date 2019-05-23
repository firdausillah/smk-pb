<!--/banner-->
<div class="banner-inner">
</div>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Informasi</a>
  </li>
  <li class="breadcrumb-item active">Pengumuman</li>
</ol>
<!--//banner-->
<!--/main-->
<section class="main-content-w3layouts-agileits">
  <div class="container">
    <h3 class="tittle">Pengumuman</h3>
    <div class="row inner-sec">
      <!--left-->
      <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
        <div class="jumbotron">
          <div class="accordion" id="accordionExample">
            <?php $no = 1;
            foreach ($pengumuman as $pg ): ?>
            <div class="card">
              <div class="card-header" id="heading<?= $pg['id']; ?>">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?= $pg['id']; ?>" name="btn" aria-expanded="true" aria-controls="collapse<?= $pg['id']; ?>">
                    <?= $pg['judul_pengumuman']; ?>
                  </button>
                </h2>
                <hr class="mt-2 mb-1">
                <span><p class="text-right"><?=$pg['tanggal']; ?>  <i class="fa fa-calendar"></i></p></span>
              </div>

              <div id="collapse<?= $pg['id']; ?>" class="collapse " aria-labelledby="heading<?= $pg['id']; ?>" data-parent="#accordionExample">
                <div class="card-body">
                  <?= $pg['isi']; ?>
                </div>
              </div>
            </div>
          <?php $no++;
            endforeach; ?>
          </div>
        </div>
      </div>
      <!--//left-->
