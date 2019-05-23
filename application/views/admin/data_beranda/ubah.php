<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="lnr lnr-store"></i>&ensp; Ubah Data Beranda</h3>
          <div class="col-md-12">

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- BORDERED TABLE -->
          <div class="panel ">
            <div class="panel-body">
              <form method="POST" action="data_beranda/save" enctype="multipart/form-data">
                <input type ="hidden" name="id" value="<?= $dt_beranda['id']; ?>">
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Judul Gambar</label>
                    <input type="text" name="judul_gambar" class="form-control" placeholder="judul gambar" value="<?= $dt_beranda['judul_gambar']; ?>">
                    <small class="form-text text-danger"><?= form_error('judul_gambar'); ?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" placeholder="judul gambar" value="<?= $dt_beranda['deskripsi']; ?>">
                    <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Gambar</label> <br>
                      <label for="">Gambar</label>
                      <input type="file" name="pict" class="form-control" placeholder="gambar" accept="image/*">
                    <!-- <input type="file" name="gambar" class="form-control-file" value="<?= $dt_beranda['gambar']; ?>"> -->
                    <input type="hidden" name="old_image" value="<?= $dt_beranda['gambar'];  ?>">
                    <a href="<?= $img=base_url('upload/beranda/'.$dt_beranda['gambar'])?>" target="_blank">
                      <img border="1" src="<?=$img?>" width="100">
                    </a>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Status</label>
                    <select type="text" name="status" class="form-control" placeholder="status" >
                      <?php foreach($status as $s) : ?>
                        <?php if($s == $dt_beranda['status']) :?>
                      <option value="<?= $s; ?>"selected><?= $s; ?></option>
                    <?php else : ?>
                       <option value="<?= $s; ?>"><?= $s; ?></option>
                    <?php endif ;?>
                    <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp; Ubah</button>
                    <button type="reset" name="ubah" class="btn btn-danger" onclick="history.go(-1);"><i class="fa fa-times-circle"></i>&nbsp; Batal</button>
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
