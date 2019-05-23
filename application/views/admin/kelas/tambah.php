<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="lnr lnr-users"></i>&ensp; Tambah Data Kelas</h3>
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
                    <label for="">Kode Kelas</label>
                    <input type="text" name="kd_kelas" class="form-control" placeholder="Kode Kelas" >
                    <small class="form-text text-danger"><?=form_error('kd_kelas');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Kelas</label>
                    <input type="text" name="kelas" placeholder="Kelas" class="form-control" >
                    <small class="form-text text-danger"><?=form_error('kelas');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Golongan</label>
                    <input type="text" name="golongan" class="form-control" placeholder="Golongan">
                    <small class="form-text text-danger"><?=form_error('golongan');?></small>
                  </div>
                </div>
                
                <br>
                <div class="row">
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
