<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="lnr lnr-users"></i>&ensp; Ubah Data Siswa</h3>
          <div class="col-md-12">

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- BORDERED TABLE -->
          <div class="panel ">
            <div class="panel-body">
              <form method="POST" action="">
                <div class="row">
                  <div class="col-md-6">
                    <label for="">NIPD</label>
                    <input type="text" name="nipd" class="form-control" placeholder="Nomor Induk Peserta Didik"  value="<?= $siswa['nipd'] ?>">
                    <small class="form-text text-danger"><?=form_error('nipd');?></small>
                  </div>
                  <div class="col-md-6">
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="Nama" class="form-control"  value="<?= $siswa['nama'] ?>">
                    <small class="form-text text-danger"><?=form_error('nama');?></small>
                  </div>
                </div>
                 <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Gambar</label> <br>
                    <!-- <input type="file" name="gambar" class="form-control-file" value="<?= $guru['gambar']; ?>"> -->
                    <input type="hidden" name="old_image" value="<?= $siswa['gambar'];  ?>">
                    <a href="<?= base_url('upload/siswa/'.$siswa['gambar'])?>" target="_blank">
                      <img border="1" src="<?=base_url('upload/siswa/'.$siswa['gambar'])?>" width="100">
                    </a>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?= $siswa['tgl_lahir'] ?>">
                    <small class="form-text text-danger"><?=form_error('tgl_lahir');?></small>
                  </div>
                  <div class="col-md-6">
                    <label for="">Agama</label>
                    <input type="text" name="agama" class="form-control" placeholder="Agama" value="<?= $siswa['agama'] ?>">
                    <small class="form-text text-danger"><?=form_error('agama');?></small>
                  </div>
                </div>
              <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?= $siswa['alamat'] ?>">
                    <small class="form-text text-danger"><?=form_error('alamat');?></small>
                  </div>
                  <div class="col-md-6">
                    <label for="">No Hp</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="No Hp" value="<?= $siswa['no_hp'] ?>">
                    <small class="form-text text-danger"><?=form_error('no_hp');?></small>
                  </div>
                </div>
              <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Nama Ayah</label>
                    <input type="text" name="ayah" class="form-control" placeholder="Nama Ayah" value="<?= $siswa['ayah'] ?>">
                    <small class="form-text text-danger"><?=form_error('ayah');?></small>
                  </div>
                  <div class="col-md-6">
                    <label for="">Nama Ibu</label>
                    <input type="text" name="ibu" class="form-control" placeholder="Nama Ibu" value="<?= $siswa['ibu'] ?>">
                    <small class="form-text text-danger"><?=form_error('ibu');?></small>
                  </div>
                </div>
              <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Kode Kelas</label>
                    <input type="text" name="kd_kelas" class="form-control" placeholder="kd_kelas" value="<?= $siswa['kd_kelas'] ?>">
                    <small class="form-text text-danger"><?=form_error('kd_kelas');?></small>
                  </div>
                </div>
              <br>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp; Ubah</button>
                    <button type="reset" name="reset" class="btn btn-danger" onclick="history.go(-1);"><i class="fa fa-times-circle"></i>&nbsp; Batal</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END BORDERED TABLE -->
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
