<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Kurikulum
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Kurikulum</a></li>
      <li class="active">Detail Kurikulum</li>
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
            <table class="table table-bordered table-striped">
              <tr>
                <th>Judul Kurikulum</th>
                <td>:</td>
                <td><?= $kurikulum['judul']; ?></td>
              </tr>
              <tr>
                <th>File Kurikulum</th>
                <td>:</td>
                <td><a href="<?= base_url('uploads/file/kurikulum'); ?><?= $kurikulum['file_kurikulum']; ?>"><embed src="<?= base_url() ?>uploads/file/kurikulum/<?= $kurikulum['file_kurikulum']; ?>" width="100%" height="400"> </embed></a></td>
              </tr>
            </table>
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