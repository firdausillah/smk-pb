<!-- <div class="container">
	<!--/banner-->
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img src="<?= base_url(); ?>uploads/img/slider/img1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h2>Peralatan Praktikum
							<span>Memadai</span>
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="carousel-item ">
					<img src="<?= base_url(); ?>uploads/img/slider/img2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h2>Proses Belajar
							<span>Mengajar Menyenangkan</span>
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="carousel-item ">
					<img src="<?= base_url(); ?>uploads/img/slider/img3.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h2>Mengedepankan Kegiatan
							<span>Praktikum</span>
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
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
								<a href="<?= base_url() ?>assets/img/front/kepala.jpg" target="_blank">
									<img src="<?= base_url() ?>assets/img/front/kepala.jpg" width="750px" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far "></i> Ir. H. Ade Firdaus </a>
									</li>
								</ul>
							</div>
						</div>

						<h3>
							<a href="#"> Sambutan Kepala Sekolah </a>
						</h3>
						<p><br>Bismillahirohmannirrohim<br>

							<br>Assalamualaikum Warahmatullah Wabarakatuh<br>

							<p>Alhamdulillahi robbil alamin syukur atas nikmat iman dan islam Allah SWT kita panjatkan, sehingga dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini dengan alamat www.smkpusabangsa2.com dapat kami perbaharui.</p>
							<p>Kami mengucapkan selamat datang di Website kami Sekolah Menengah Kejuruan Negeri (SMKN) 2 Puspa bangsa sebagai portal inforamasi sekolah untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami.</p>
							<p>Kami berharap dengan adanya Website ini dapat memberikan informasi dan sarana promosi yang dapat mengenalkan sekolah dengan masyarakat dan interaksi positif baik dengan civitas akademik maupun dengan masyarakat.</p>

							<p>Kami menghimbau mari kita bersinergi untuk bekerja hanya semata-semata ibadah karena Allah dan ridho Allah, demi mencerdaskan anak bangsa, sebagai pewarus bangsa dimasa yang akan datang.</p>

							<p>Terima kasih semoga Allah ‘Azza Wa Jalla menyertai doa kita semua……amin.</p>
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
