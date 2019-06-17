<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Kelas
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Kelas</a></li>
      <li class="active">Tambah Data Kelas</li>
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
            <?= form_open_multipart('admin/kelas/save', array('class'=>'form-horizontal')); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="kd_kelas" class="col-sm-2 control-label">Kode Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" name="kd_kelas" class="form-control" id="kd_kelas" required placeholder="Kode Kelas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" name="kelas" class="form-control" id="kelas" required placeholder="Kelas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="golongan" class="col-sm-2 control-label">Golongan</label>
                  <div class="col-sm-10">
                    <input type="number" name="golongan" class="form-control" id="golongan" required placeholder="Golongan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="id_jurusan" class="col-sm-2 control-label">Jurusan</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="id_jurusan" id="id_jurusan">
                      <?php foreach ($kelas as $kls) :?>
                      <option value="<?= $kls['id_jurusan']; ?>"><?= $kls['id_jurusan']; ?></option>
                    <?php endforeach; ?>
                    </select>
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
