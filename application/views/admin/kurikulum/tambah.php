<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Kurikulum
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Kurikulum</a></li>
      <li class="active">Tambah Kurikulum</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="<?= site_url()?>admin/kurikulum" class="btn btn-info"><i class="fa fa-arrow-left"> &nbsp </i>Kembali</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?= form_open_multipart('admin/kurikulum/save', array('class'=>'form-horizontal')); ?>
            <?php echo form_hidden('id') ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="judul" class="col-sm-2 control-label">Judul Kurikulum</label>
                  <div class="col-sm-10">
                    <input type="text" name="judul" class="form-control" id="judul" required placeholder="Judul Kurikulum">
                  </div>
                </div>
                <div class="form-group">
                  <label for="file_kurikulum" class="col-sm-2 control-label">File Kurikulum</label>
                  <div class="col-sm-10">
                    <input type="file" name="file_kurikulum" class="form-control" id="file_kurikulum" required>
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
