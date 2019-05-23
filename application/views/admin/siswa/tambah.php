<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="lnr lnr-users"></i>&ensp; Tambah Data Siswa</h3>
          <div class="col-md-12">

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- BORDERED TABLE -->
          <div class="panel ">
            <div class="panel-body">
              <form method="POST" action="" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <label for="">NIPD</label>
                    <input type="text" name="nipd" class="form-control" placeholder="Nomor Induk Peserta Didik" >
                    <small class="form-text text-danger"><?=form_error('nipd');?></small>
                  </div>
                  <div class="col-md-6">
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="Nama" class="form-control" >
                    <small class="form-text text-danger"><?=form_error('nama');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar" class="form-control" placeholder="gambar">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
                    <small class="form-text text-danger"><?=form_error('tgl_lahir');?></small>
                  </div>
                  <div class="col-md-6">
                    <label for="">Agama</label>
                    <input type="text" name="agama" class="form-control" placeholder="Agama">
                    <small class="form-text text-danger"><?=form_error('agama');?></small>
                  </div>
                </div>
              <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                    <small class="form-text text-danger"><?=form_error('alamat');?></small>
                  </div>
                  <div class="col-md-6">
                    <label for="">No Hp</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="No Hp">
                    <small class="form-text text-danger"><?=form_error('no_hp');?></small>
                  </div>
                </div>
              <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Nama Ayah</label>
                    <input type="text" name="ayah" class="form-control" placeholder="Nama Ayah">
                    <small class="form-text text-danger"><?=form_error('ayah');?></small>
                  </div>
                  <div class="col-md-6">
                    <label for="">Nama Ibu</label>
                    <input type="text" name="ibu" class="form-control" placeholder="Nama Ibu">
                    <small class="form-text text-danger"><?=form_error('ibu');?></small>
                  </div>
                </div>
              <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">kd_kelas</label>
                    <input type="text" name="kd_kelas" class="form-control" placeholder="kd_kelas">
                    <small class="form-text text-danger"><?=form_error('kd_kelas');?></small>
                  </div>
                </div>
              <br>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp; Tambah</button>
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
