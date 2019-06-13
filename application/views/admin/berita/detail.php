<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Guru
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Guru</a></li>
      <li class="active">Detail Guru</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="<?= site_url()?>admin/berita" class="btn btn-info"><i class="fa fa-arrow-left"> &nbsp </i>Kembali</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered table-striped">
              <tr>
                <th>Gambar</th>
                <td>:</td>
                <td><a href="<?= base_url('uploads/img/berita/'); ?><?= $berita['gambar']; ?>"><img src="<?= base_url('uploads/img/berita/') ?><?= $berita['gambar']; ?>" alt="<?= $berita['judul_berita']; ?>" height="250"></img></a></td>
              </tr>
              <tr>
                <th>Judul Berita</th>
                <td>:</td>
                <td><?= $berita['judul_berita']; ?></td>
              </tr>
              <tr>
                <th>Isi Berita</th>
                <td>:</td>
                <td><?= $berita['isi']; ?></td>
              </tr>
              <tr>
                <th>Tanggal</th>
                <td>:</td>
                <td><?= $berita["tanggal"]; ?></td>
              </tr>
            </table>
          </div>
          <!-- /.box-body -->
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
