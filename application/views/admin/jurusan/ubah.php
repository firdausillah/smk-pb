<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="lnr lnr-users"></i>&ensp; Ubah Data Jurusan</h3>
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
                <input type ="hidden" name="id_jurusan" value="<?= $jurusan['id_jurusan']; ?>">
                <div class="row">
                 <div class="col-md-6">
                    <label for="">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" placeholder="jurusan" value="<?= $jurusan['jurusan']; ?>">
                    <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Keterangan Jurusan</label>
                    <input type="text" name="ket_jurusan" placeholder="Keterangan Jurusan" class="form-control" value="<?= $jurusan['ket_jurusan']; ?>">
                    <small class="form-text text-danger"><?= form_error('ket_jurusan'); ?></small>
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
