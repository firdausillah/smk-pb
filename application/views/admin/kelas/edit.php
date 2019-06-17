<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Kelas
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Kelas</a></li>
      <li class="active">Edit Data Kelas</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="<?= site_url()?>admin/kelas" class="btn btn-info"><i class="fa fa-arrow-left"> &nbsp </i>Kembali</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?= form_open_multipart('admin/kelas/save_edit', array('class'=>'form-horizontal')); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="kd_kelas" class="col-sm-2 control-label">Kode Kelas</label>
                  <div class="col-sm-10">
                    <text id="kd_kelas" class="col-sm-2 control-label"><?= $kelas1['kd_kelas']; ?></text>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" name="kelas" class="form-control" id="kelas" required value="<?= $kelas1['kelas']; ?>"placeholder="Kelas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="golongan" class="col-sm-2 control-label">Golongan</label>
                  <div class="col-sm-10">
                    <input type="number" name="golongan" class="form-control" id="golongan" required value="<?= $kelas1['golongan']; ?>"placeholder="Golongan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="id_jurusan" class="col-sm-2 control-label">ID Jurusan</label>
                  <div class="col-sm-10">
                    <text id="id_jurusan" class="col-sm-2 control-label"><?= $kelas1['id_jurusan']; ?></text>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary">Ubah</button>
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
