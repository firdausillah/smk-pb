<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Guru
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Guru</a></li>
      <li class="active">Edit Data Guru</li>
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
            <?= form_open_multipart('admin/dt_guru/save', array('class'=>'form-horizontal')); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="nuptk" class="col-sm-2 control-label">NUPTK</label>
                  <div class="col-sm-10">
                    <input type="number" name="nuptk" class="form-control" id="nuptk" required value="<?= $guru['nuptk']; ?>"placeholder="NUPTK">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama Guru</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama" required value="<?= $guru['nama']; ?>"placeholder="Nama Guru">
                  </div>
                </div>
                <div class="form-group">
                  <label for="gambar" class="col-sm-2 control-label">Foto</label>
                  <div class="col-sm-10">
                    <a href="<?= base_url('uploads/img/'); ?><?= $guru['gambar']; ?>"><img src="<?= base_url('uploads/img/') ?><?= $guru['gambar']; ?>" alt="<?= $guru['nama']; ?>" height="100px"></img></a>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" required value="<?= $guru['tgl_lahir']; ?>"placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="alamat" required value="<?= $guru['alamat']; ?>"placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 control-label">Nomor HP</label>
                  <div class="col-sm-10">
                    <input type="number" name="no_hp" class="form-control" id="no_hp" required value="<?= $guru['no_hp']; ?>"placeholder="Nomor HP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="email" required value="<?= $guru['email']; ?>"placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="pendidikan" class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-sm-10">
                    <input type="text" name="pendidikan" class="form-control" id="pendidikan" required value="<?= $guru['pendidikan']; ?>"placeholder="Pendidikan Terakhir">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <button type="reset" class="btn btn-default">reset</button>
              </div>
              <!-- /.box-footer -->
            </form>
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
