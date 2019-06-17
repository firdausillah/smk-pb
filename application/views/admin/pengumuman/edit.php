<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Pengumuman
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Pengumuman</a></li>
      <li class="active">Edit Data Pengumuman</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="<?= site_url()?>admin/pengumuman" class="btn btn-info"><i class="fa fa-arrow-left"> &nbsp </i>Kembali</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?= form_open_multipart('admin/pengumuman/save_edit', array('class'=>'form-horizontal')); ?>
            <input type="hidden" name="id" value="<?= $pengumuman['id']; ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="judul_pengumuman" class="col-sm-2 control-label">Judul Pengumuman</label>
                <div class="col-sm-10">
                  <input type="text" name="judul_pengumuman" class="form-control" value="<?= $pengumuman['judul_pengumuman']; ?>" id="judul_pengumuman" >
                </div>
              </div>
              <div class="form-group">
                <label for="isi" class="col-sm-2 control-label">Isi Pengumuman</label>
                <div class="col-sm-10">
                  <?= form_textarea('isi',$pengumuman['isi'],array('id'=>'editor1','class'=>'editor1')); ?>
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
