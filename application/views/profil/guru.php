 <!-- <div class="container">
<!--/banner-->
<div class="banner-inner">
</div>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Profil</a>
  </li>
  <li class="breadcrumb-item active">Tenaga Kependidikan</li>
</ol>
<!--//banner-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-sm-8 left-blog-info-w3layouts-agileits text-left">
          <!-- Page Content -->
          <div class="container">
            <h1 class="font-weight-light text-center text-sm-left mt-4 mb-0">Guru dan Tenaga Kependidikan</h1>
            <hr class="mt-2 mb-5">
            <div class="row text-center text-lg-left">
              <?php foreach( $guru as $gru ) :?>
              <div class="col-lg-3 col-md-4 col-sm-8">
                <a href="exampleModal" class="d-block mb-4 h-100 modalDetail" name="gru" data-nuptk="<?= $gru['nuptk']; ?>" data-toggle="modal" data-target="#exampleModal" >
                  <img class="img-fluid img-thumbnail" src="<?= base_url(); ?>uploads/img/<?= $gru['gambar']; ?>" alt="">
                </a>
              </div>
            <?php endforeach ?>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img id="gambar" class="img-responsive col-md-12" src="<?= base_url(); ?>uploads/img/<?= $detail['gambar']; ?>">
                    <h5 id="nama"></h5>
                    <p id="email"></p>
                    <p id="pendidikan"></p>
                  </div>
                  <div class="modal-footer">
                  </div>
                </div>
              </div>
            </div>
            <!-- modal -->

            </div>
          </div>
				</div>
