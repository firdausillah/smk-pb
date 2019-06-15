<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Guru
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Guru</a></li>
      <li class="active">Tambah Guru</li>
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
            <?= form_open_multipart('admin/siswa/save', array('class'=>'form-horizontal')); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="nipd" class="col-sm-2 control-label">NIPD</label>
                  <div class="col-sm-10">
                    <input type="number" name="nipd" class="form-control" id="nipd" required placeholder="NIPD">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama Siswa</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama" required placeholder="Nama Siswa">
                  </div>
                </div>
                <div class="form-group">
                  <label for="gambar" class="col-sm-2 control-label">Foto</label>
                  <div class="col-sm-10">
                    <input type="file" name="gambar" class="form-control" id="gambar" required placeholder="Foto Siswa">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" required placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="alamat" required placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 control-label">Nomor HP</label>
                  <div class="col-sm-10">
                    <input type="number" name="no_hp" class="form-control" id="no_hp" required placeholder="Nomor HP">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <select name="agama" type="text" class="form-control" placeholder="pilih agama">
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
                    <select name="kelamin" type="text" class="form-control" placeholder="pilih agama">
                    <option value="Laki-laki"> Laki-laki <br>
                    <option value="Perempuan"> Perempuan <br>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="ayah" class="col-sm-2 control-label">Ayah</label>
                  <div class="col-sm-10">
                    <input type="text" name="ayah" class="form-control" id="ayah" required placeholder="Ayah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="ibu" class="col-sm-2 control-label">Ibu</label>
                  <div class="col-sm-10">
                    <input type="text" name="ibu" class="form-control" id="ibu" required placeholder="Ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="kd_kelas">
                        <?php foreach ($kelas as $kls) : ?>
                          <option value="<?= $kls['kd_kelas'] ?>"><?= $kls['kelas'] ?> <?= $kls['golongan'] ?></option>
                        <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary">Tambah</button>
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
