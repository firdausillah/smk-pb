<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="lnr lnr-users"></i>&ensp; Ubah Data User</h3>
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
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                <div class="row">
                  <div class="col-md-6">
                    <label for="">User Name</label>
                    <input type="text" name="username" class="form-control" placeholder="User Name"  value="<?= $user['username']  ?>">
                    <small class="form-text text-danger"><?=form_error('username');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Password</label>
                    <input type="Password" name="password" placeholder="Password" class="form-control"  value="<?= $user['password']  ?>">
                    <small class="form-text text-danger"><?=form_error('password');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Konfirmasi Password</label>
                    <input type="password" name="konfirmasi" class="form-control" placeholder="Konfirmasi Password" value="<?= $user['password']  ?>">
                    <small class="form-text text-danger"><?=form_error('konfirmasi');?></small>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Level</label>
                    <select class="form-control" name="level" value="<?= $user['level']  ?>">
                      <?php foreach ($level as $lvl): ?>
                        <?php if( $lvl ==$user['level'] ) : ?>
                          <option value="<?= $lvl; ?>" selected><?= $lvl; ?></option>
                        <?php else : ?>
                          <option value="<?= $lvl; ?>"><?= $lvl; ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary" name="ubah"><i class="fa fa-plus-square"></i>&nbsp; Ubah Data</button>
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
