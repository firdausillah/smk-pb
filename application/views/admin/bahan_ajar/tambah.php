<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="lnr lnr-users"></i>&ensp; Tambah Data Bahan Ajar</h3>
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
                    <label for="">Judul Bahan</label>
                    <input type="text" name="judul_bahan" class="form-control" placeholder="Judul Bahan" >
                    <small class="form-text text-danger"><?=form_error('judul_bahan');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Link</label>
                    <textarea class="form-control" name="link" placeholder="link..." aria-label="With textarea"></textarea>
                    <small class="form-text text-danger"><?=form_error('link');?></small>
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
