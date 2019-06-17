<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Kalender
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Kalender</a></li>
      <li class="active">Tambah Kalender</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="<?= site_url()?>admin/kalender" class="btn btn-info"><i class="fa fa-arrow-left"> &nbsp </i>Kembali</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?= form_open_multipart('admin/kalender/save', array('class'=>'form-horizontal')); ?>
            <?php echo form_hidden('id') ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="judul" class="col-sm-2 control-label">Tahun Kalender</label>
                  <div class="col-sm-10">
                    <input type="text" name="tahun" class="form-control" id="tahun" required placeholder="Tahun Kalender">
                  </div>
                </div>
                <div class="form-group">
                  <label for="file_kalender" class="col-sm-2 control-label">Fie Kalender</label>
                  <div class="col-sm-10">
                    <input type="file" name="file_kalender" class="form-control" id="file_kalender" required>
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
