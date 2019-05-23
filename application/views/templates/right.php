<!-- khusus beranda di beranda sendiri -->
<!-- right -->
<aside class="col-sm-4 agileits-w3ls-right-blog-con text-right">
  <div class="right-blog-info text-left">
    <div class="tech-btm">
      <h4>Berita Terbaru</h4>
      <?php $no=1;
      foreach ($berita as $brt) :
        if ($no!=4) {?>
          <div class="blog-grids row mb-3 <?= $no ?>">
            <div class="col-md-5 blog-grid-left <?= $no ?>">
              <a href="<?= site_url(); ?>berita/detailberita/<?= $brt['id_berita']; ?>">
                <img src="<?= base_url('admin/upload/berita/'.$brt['gambar']) ?>" class="img-fluid" alt="">
              </a>
            </div>
            <div class="col-md-7 blog-grid-right <?= $no ?>">
              <h5>
                <a href="<?= site_url(); ?>berita/detailberita/<?= $brt['id_berita']; ?>"><?= $brt['judul_berita']; ?> </a>
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
<!-- akhir right -->
</div>
</div>
</section>
<!--//end main-->
<!--/middle-->
</div>
</div>
<!--//end main-->
