<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Jurusan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Jurusan</a></li>
      <li class="active">Edit Data Jurusan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="<?= site_url()?>admin/jurusan" class="btn btn-info"><i class="fa fa-arrow-left"> &nbsp </i>Kembali</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?= form_open_multipart('admin/jurusan/save_edit', array('class'=>'form-horizontal')); ?>
            <input type="hidden" name="id_jurusan" value="<?= $jurusan['id_jurusan']; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                  <div class="col-sm-10">
                    <input type="text" name="jurusan" class="form-control" id="jurusan" required value="<?= $jurusan['jurusan']; ?>"placeholder="">
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
