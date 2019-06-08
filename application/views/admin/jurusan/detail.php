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
            <a href="<?= site_url()?>admin/dt_guru" class="btn btn-info"><i class="fa fa-arrow-left"> &nbsp </i>Kembali</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered table-striped">
              <tr>
                <th>Foto</th>
                <td>:</td>
                <td><a href="<?= base_url('uploads/img/'); ?><?= $guru['gambar']; ?>"><img src="<?= base_url('uploads/img/') ?><?= $guru['gambar']; ?>" alt="<?= $guru['nama']; ?>" height="250"></img></a></td>
              </tr>
              <tr>
                <th>NUPTK</th>
                <td>:</td>
                <td><?= $guru['nuptk']; ?></td>
              </tr>
              <tr>
                <th>Nama Guru</th>
                <td>:</td>
                <td><?= $guru['nama']; ?></td>
              </tr>
              <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td><?= $guru['tgl_lahir']; ?></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><?= $guru['alamat']; ?></td>
              </tr>
              <tr>
                <th>No HP</th>
                <td>:</td>
                <td><?= $guru['no_hp']; ?></td>
              </tr>
              <tr>
                <th>Email</th>
                <td>:</td>
                <td><?= $guru['email']; ?></td>
              </tr>
              <tr>
                <th>Pendidikan</th>
                <td>:</td>
                <td><?= $guru['pendidikan']; ?></td>
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
