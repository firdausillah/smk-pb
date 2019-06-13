<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Berita
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Berita</a></li>
      <li class="active">Tambah Berita</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="<?= site_url()?>admin/berita" class="btn btn-info"><i class="fa fa-arrow-left"> &nbsp </i>Kembali</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?= form_open_multipart('admin/berita/save', array('class'=>'form-horizontal')); ?>
            <?php echo form_hidden('id') ?>
            <input type="hidden" name="tanggal" value="<?= date('Y-m-d H:i:s'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="judul_berita" class="col-sm-2 control-label">Judul Berita</label>
                  <div class="col-sm-10">
                    <input type="text" name="judul_berita" class="form-control" id="judul_berita" required placeholder="Judul Berita">
                  </div>
                </div>
                <div class="form-group">
                  <label for="gambar" class="col-sm-2 control-label">Gambar</label>
                  <div class="col-sm-10">
                    <input type="file" name="gambar" class="form-control" id="gambar" required placeholder="pict">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Isi Berita</label>
                  <div class="col-sm-10">
                    <?php echo form_textarea('isi', '', array('id'=>'editor1')) ?>
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
