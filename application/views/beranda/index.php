<!-- <div class="container">
	<!--/banner-->
	<div class="banner">
		<div class="bd-example ">
		  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
					<!-- loop count data  -->
		      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<!-- endloop -->
		      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

		    </ol>
		    <div class="carousel-inner">
					<!-- loop data -->
		      <!-- <div class="carousel-item active">
		        <img src="<?= base_url(); ?>uploads/img/slider/<?= $beranda['gambar']; ?>"  class="d-block w-100" alt="...">
		        <div class="carousel-caption d-none d-md-block">
		          <h4>First slide label</h4>
		          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
		        </div>
		      </div> -->
					<!-- endloop -->
		      <div class="carousel-item">
		        <img src="<?= base_url(); ?>admin/upload/gambar/2.jpg"  class="d-block w-100" alt="...">
		        <div class="carousel-caption d-none d-md-block">
		          <h4>Second slide label</h4>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		        </div>
		      </div>
		      <div class="carousel-item">
		        <img src="<?= base_url(); ?>admin/upload/gambar/3.jpg"  class="d-block w-100" alt="...">
		        <div class="carousel-caption d-none d-md-block">
		          <h4>Third slide label</h4>
		          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
		        </div>
		      </div>
		    </div>
		    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>
	</div>

  <!-- end banner -->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid box mx-auto img-fluid" height>
								<a href="<?= base_url() ?>assets/img/front/6.jpg" target="_blank">
									<img src="<?= base_url() ?>assets/img/front/6.jpg" height="200" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far "></i> Nama Kepala Sekolah</a>
									</li>
								</ul>
							</div>
						</div>

						<h3>
							<a href="#">Amet consectetur adipisicing </a>
						</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
							aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
							aute irudre dolor in elit sed uta labore dolore reprehender</p>
						<a href="#" class="btn btn-primary read-m">Read More</a>
					</div>
				</div>
				<!--//left-->
				<!-- right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<div class="tech-btm">
							<h4>Berita Terbaru</h4>
							<?php $no=1;
						 	foreach ($berita as $brt) :
								if ($no!=4) {?>
									<div class="blog-grids row mb-3 <?= $no ?>">
										<div class="col-md-5 blog-grid-left <?= $no ?>">
											<a href="<?= site_url(); ?>berita/berita/<?= $brt['id']; ?>">
												<img src="<?= base_url('uploads/img/berita/'.$brt['gambar']) ?>" class="img-fluid" alt="">
											</a>
										</div>
										<div class="col-md-7 blog-grid-right <?= $no ?>">
											<h5>
												<a href="<?= site_url(); ?>berita/berita/<?= $brt['id']; ?>"><?= $brt['judul_berita']; ?> </a>
											</h5>
											<div class="sub-meta <?= $no ?>">
												<span>
													<i class="far fa-clock"></i> <?= $brt['tanggal'];?> </span>
											</div>
										</div>
									</div>
								<?php }?>
							<?php $no++;
							endforeach ?>
						</div>
					</div>
				</aside>
				<!--//right -->
			</div>
		</div>
	</section>
	<!--//end main-->
	<!--/middle-->
	</div>
  </div>
		<!--//end main-->
