<!--/banner-->
<div class="banner-inner">
</div>
<ol class="breadcrumb">
  <li class="breadcrumb-item active">
    <a href="index.html">Informasi</a>
  </li>
  <li class="breadcrumb-item active">Pendataan Siswa</li>
</ol>
<!--//banner-->
<!--/main-->
<section class="main-content-w3layouts-agileits">
  <div class="container">
    <h3 class="tittle">Daftar Sebagai Siswa Aktif</h3>
    <div class="inner-sec">
      <div class="row">
        <div class="col-md-5">
          <div class="contct-info">
            <h4> Sudah Pernah Daftar ?</h4>
            <br>
            <label>Cetak Bukti Pendaftaran</label>
            <form class="" action="<?= base_url(); ?>informasi/r_siswabaru" method="post">
              <div class="input-group">
                <input type="text" name="nipd" class="form-control" placeholder="Masukkan No. Pendaftaran">
                <span class="input-group-btn">
                  <button class="btn btn-success" type="submit" name="btn_print"><i class="fa fa-print"></i></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-7">
          <div class="contct-info">
            <h4>Belum Pernah Daftar ?</h4>
            <br>
            <?=form_open_multipart('Informasi/save')?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>NIPD*</label>
                    <input name="nipd" type="text" class="form-control" placeholder="Nomor Induk Peserta Didik" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama Lengkap*</label>
                    <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama Panggilan</label>
                    <input  type="text" class="form-control" placeholder="Nama Panggilan" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Kelas</label>
                    <select class="form-control" name="kd_kelas">
                      <?php foreach ($kelas as $kls) : ?>
                      <option value="<?= $kls['kd_kelas'] ?>"><?= $kls['kelas'] ?> <?= $kls['golongan'] ?> <?= $kls['jurusan'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tanggal Lahir*</label>
                    <input name="tgl_lahir" type="date" class="form-control" placeholder="tanggal lahir" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Agama</label>
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
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" type="text" class="form-control" placeholder="Alamat sekarang..." maxlength="70">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nomor Telp.</label>
                    <input name="no_hp" type="text" class="form-control" placeholder="Phone number">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="kelamin" type="text" class="form-control" placeholder="pilih agama">
                    <option value="Laki-laki"> Laki-laki <br>
                    <option value="Perempuan"> Perempuan <br>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Foto Terbaru*</label>
                <input name="gambar" class="form-control" type="file" required>
                <p style="color:red;"><b>PERHATIAN !</b> Ukuran foto maks. 2 Mb.</p>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama Ayah</label>
                    <input name="ayah" type="text" class="form-control" placeholder="Nama Ayah" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tempat Ibu*</label>
                    <input name="ibu" type="text" class="form-control" placeholder="Tempat Ibu" required>
                  </div>
                </div>
              </div>
              <input type="submit" value="Simpan" class="btn btn-success" />
              <input type="reset" name="reset" value="Reset" class="btn btn-default" />
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
