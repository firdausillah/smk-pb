<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Selamat Datang <?= $siswa['nama']; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Siswa</a></li>
      <li class="active">Biodata</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class=" left-blog-info-w3layouts-agileits text-left">
            <div class="container-fluid bg-light">
              <hr class="mt-2 mb-2">
              <embed src="<?= base_url() ?>uploads/file/nilai/<?= $nilai['nilai']; ?>" width="100%" height="500"> </embed>
            </div>
          </div>
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
