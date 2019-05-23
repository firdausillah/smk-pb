<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-vcard-o"></i>&ensp; Tambah Data Profil</h3>
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
                    <label for="">Visi</label>
                    <textarea class="form-control" name="visi" placeholder="Masukan visi..." aria-label="With textarea"></textarea>
                    <small class="form-text text-danger"><?=form_error('visi');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Misi</label>
                    <textarea class="form-control" name="misi" placeholder="Masukan misi..." aria-label="With textarea"></textarea>
                    <small class="form-text text-danger"><?=form_error('misi');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Sejarah</label>
                    <textarea class="form-control" name="sejarah" placeholder="Masukan sejarah..." aria-label="With textarea"></textarea>
                    <small class="form-text text-danger"><?=form_error('sejarah');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Sambutan</label>
                    <textarea class="form-control" name="sambutan" placeholder="Masukan sambutan kepala sekolah..." aria-label="With textarea"></textarea>
                    <small class="form-text text-danger"><?=form_error('sambutan');?></small>
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
