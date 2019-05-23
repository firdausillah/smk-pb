<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="lnr lnr-store"></i>&ensp; Tambah Data Beranda</h3>
          <div class="col-md-12">

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- BORDERED TABLE -->
          <div class="panel ">
            <div class="panel-body">
              <!-- <form method="POST" action="" enctype="multipart/form-data"> -->
                <?=form_open_multipart('data_beranda/save');?>
                <input type="hidden" name="id" >
                <input type="hidden" name="gambar">
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Judul Gambar</label>
                    <input type="text" name="judul_gambar" class="form-control" placeholder="judul gambar" >
                    <small class="form-text text-danger"><?= form_error('judul_gambar'); ?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" placeholder="deskripsi gambar..." aria-label="With textarea" ></textarea>
                    <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Gambar</label>
                    <input type="file" name="pict" class="form-control" placeholder="gambar" accept="image/*">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Status</label>
                    <select type="text" name="status" class="form-control" placeholder="status" value="<?=@$data->status ?>">
                      <option value="aktif">Aktif</option>
                      <option value="nonaktif">Non-Aktif</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square" value="tambah"></i>&nbsp; Tambah</button>
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
