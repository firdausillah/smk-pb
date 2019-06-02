<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data User
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data User</a></li>
      <li class="active">Tambah Admin</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="<?= site_url()?>admin/dt_user" class="btn btn-info"><i class="fa fa-arrow-left"> &nbsp </i>Kembali</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?= form_open_multipart('admin/dt_user/save', array('class'=>'form-horizontal')); ?>
            <?php echo form_hidden('id') ?>
            <input type="hidden" name="level" value="admin">
            <input type="hidden" name="status" value="aktif">
              <div class="box-body">
                <div class="form-group">
                  <label for="usernamee" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="usernamee" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password1" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="gambar" class="col-sm-2 control-label">Foto</label>
                  <div class="col-sm-10">
                    <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Password">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="reset" class="btn btn-default">reset</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
