<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Siswa
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Siswa</a></li>
      <li class="active">Edit Data Siswa</li>
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
            <?= form_open_multipart('admin/siswa/save_edit', array('class'=>'form-horizontal')); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="nipd" class="col-sm-2 control-label">NIPD</label>
                  <div class="col-sm-10">
                    <input type="number" name="nipd" class="form-control" id="nipd" required value="<?= $siswa['nipd']; ?>"placeholder="NIPD">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama Siswa</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama" required value="<?= $siswa['nama']; ?>"placeholder="Nama Siswa">
                  </div>
                </div>
                <div class="form-group">
                  <label for="gambar" class="col-sm-2 control-label">Foto</label>
                  <div class="col-sm-10">
                    <a href="<?= base_url('uploads/img/'); ?><?= $siswa['gambar']; ?>"><img src="<?= base_url('uploads/img/') ?><?= $siswa['gambar']; ?>" alt="<?= $siswa['nama']; ?>" height="100px"></img></a>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" required value="<?= $siswa['tgl_lahir']; ?>"placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="alamat" required value="<?= $siswa['alamat']; ?>"placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 control-label">Nomor HP</label>
                  <div class="col-sm-10">
                    <input type="number" name="no_hp" class="form-control" id="no_hp" required value="<?= $siswa['no_hp']; ?>"placeholder="Nomor HP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ayah" class="col-sm-2 control-label">Nama Ayah</label>
                  <div class="col-sm-10">
                    <input type="text" name="ayah" class="form-control" id="ayah" required value="<?= $siswa['ayah']; ?>"placeholder="Nama Ayah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ibu" class="col-sm-2 control-label">Nama ibu</label>
                  <div class="col-sm-10">
                    <input type="text" name="ibu" class="form-control" id="ibu" required value="<?= $siswa['ibu']; ?>"placeholder="Nama Ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <select name="agama" type="text" class="form-control" placeholder="pilih agama">
                      <option value="<?= $siswa['agama'] ?>"> <?= $siswa['agama'] ?> <br>
                      <option value="Islam"> Islam <br>
                      <option value="Kristen"> Kristen <br>
                      <option value="Katolik"> Katolik <br>
                      <option value="Hindu"> Hindu <br>
                      <option value="Budha"> Budha <br>
                      <option value="Konghucu"> Konghucu <br>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select name="kelamin" type="text" class="form-control" placeholder="pilih Jenis Kelamin">
                    <option value="<?= $siswa['kelamin'] ?>"> <?= $siswa['kelamin'] ?> <br>
                    <option value="Laki-laki"> Laki-laki <br>
                    <option value="Perempuan"> Perempuan <br>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-10">
                    <select name="kd_kelas" class="form-control">
                      <option value="<?= $siswa['kd_kelas'] ?>">-- <?= $siswa['kd_kelas'] ?> --<br>
                      <?php foreach ($kelas as $kls) : ?>
                        <option value="<?= $kls['kd_kelas'] ?>"><?=$kls['kelas'] ?> <?= $kls['golongan'] ?></option>
                      <?php endforeach ?>
                    </select>
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
