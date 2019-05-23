<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="lnr lnr-store"></i>&ensp; Ubah Data Profil</h3>
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
                <input type ="hidden" name="id" value="<?= $profil['id']; ?>">
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Visi</label>
                    <input type="text" name="visi" class="form-control" placeholder="visi" value="<?= $profil['visi']; ?>">
                    <small class="form-text text-danger"><?= form_error('visi'); ?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Misi</label>
                    <input type="text" name="misi" placeholder="misi" class="form-control" value="<?= $profil['misi']; ?>">
                    <small class="form-text text-danger"><?= form_error('misi'); ?></small>
                  </div>
                </div>
                <br>
                <div class="row">                
                  <div class="col-md-6">
                    <label for="">Sejarah</label>
                    <input type="text" name="sejarah" class="form-control" placeholder="sejarah" value="<?= $profil['sejarah']; ?>">
                    <small class="form-text text-danger"><?= form_error('sejarah'); ?></small>
                  </div>
                </div>
                <br>
                 <div class="row">                
                  <div class="col-md-6">
                    <label for="">Sambutan</label>
                    <input type="text" name="sambutan" class="form-control" placeholder="sambutan" value="<?= $profil['sambutan']; ?>">
                    <small class="form-text text-danger"><?= form_error('sambutan'); ?></small>
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
