<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Siswa
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Siswa</a></li>
      <li class="active">Detail Siswa</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="<?= site_url()?>admin/siswa" class="btn btn-info"><i class="fa fa-arrow-left"> &nbsp </i>Kembali</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered table-striped">
              <tr>
                <th>Foto</th>
                <td>:</td>
                <td><a href="<?= base_url('uploads/img/'); ?><?= $siswa['gambar']; ?>"><img src="<?= base_url('uploads/img/') ?><?= $siswa['gambar']; ?>" alt="<?= $siswa['nama']; ?>" height="250"></img></a></td>
              </tr>
              <tr>
                <th>NIPD</th>
                <td>:</td>
                <td><?= $siswa['nipd']; ?></td>
              </tr>
              <tr>
                <th>Nama Siswa</th>
                <td>:</td>
                <td><?= $siswa['nama']; ?></td>
              </tr>
              <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td><?= $siswa['tgl_lahir']; ?></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><?= $siswa['alamat']; ?></td>
              </tr>
              <tr>
                <th>Agama</th>
                <td>:</td>
                <td><?= $siswa['agama']; ?></td>
              </tr>
              <tr>
                <th>No HP</th>
                <td>:</td>
                <td><?= $siswa['no_hp']; ?></td>
              </tr>
              <tr>
                <th>Kelas</th>
                <td>:</td>
                <td><?= $siswa['kd_kelas']; ?></td>
              </tr>
              <tr>
                <th>Nama Ayah</th>
                <td>:</td>
                <td><?= $siswa['ayah']; ?></td>
              </tr>
              <tr>
                <th>Nama Ibu</th>
                <td>:</td>
                <td><?= $siswa['ibu']; ?></td>
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
