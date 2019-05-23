<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="lnr lnr-users"></i>&ensp; Ubah Data Guru</h3>
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
                    <label for="">NUPTK</label>
                    <input type="text" name="nuptk" class="form-control" placeholder="NUPTK" value="<?= $guru['nuptk'] ?>" >
                    <small class="form-text text-danger"><?=form_error('nuptk');?></small>
                  </div>
                  <div class="col-md-6">
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="Nama" class="form-control" value="<?= $guru['nama'] ?>" >
                    <small class="form-text text-danger"><?=form_error('nama');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Gambar</label> <br>
                    <!-- <input type="file" name="gambar" class="form-control-file" value="<?= $guru['gambar']; ?>"> -->
                    <input type="hidden" name="old_image" value="<?= $guru['gambar'];  ?>">
                    <a href="<?= base_url('upload/guru/'.$guru['gambar'])?>" target="_blank">
                      <img border="1" src="<?=base_url('upload/guru/'.$guru['gambar'])?>" width="100">
                    </a>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?= $guru['tgl_lahir'] ?>">
                    <small class="form-text text-danger"><?=form_error('tgl_lahir');?></small>
                  </div>
                  <div class="col-md-6">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?= $guru['alamat'] ?>">
                    <small class="form-text text-danger"><?=form_error('alamat');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">No Hp</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="No Hp" value="<?= $guru['no_hp'] ?>">
                    <small class="form-text text-danger"><?=form_error('no_hp');?></small>
                  </div>
                  <div class="col-md-6">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="<?= $guru['email'] ?>">
                    <small class="form-text text-danger"><?=form_error('email');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Pendidikan</label>
                    <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" value="<?= $guru['pendidikan'] ?>">
                    <small class="form-text text-danger"><?=form_error('pendidikan');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
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
