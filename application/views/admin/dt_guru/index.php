<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Guru
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Guru</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
            <a href="<?= site_url(); ?>admin/dt_guru/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp Tambah admin </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>NUPTK</th>
                <th>Nama Guru</th>
                <th>Foto</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php $no=1;
               foreach ($guru as $gru) :?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $gru['nuptk']; ?></td>
                <td><?= $gru['nama']; ?></td>
                <td><a href="<?= base_url('uploads/img/'); ?><?= $gru['gambar']; ?>"><img src="<?= base_url('uploads/img/') ?><?= $gru['gambar']; ?>" alt="<?= $gru['username']; ?>" height="60"></img></a></td>
                <td>
                  <a href="<?= base_url(); ?>admin/dt_guru/detail/<?= $gru['nuptk']; ?>" class="fa fa-eye btn btn-primary"></a>
                  <a href="<?= base_url(); ?>admin/dt_guru/delete/<?= $gru['nuptk']; ?>" class="fa fa-trash btn btn-danger" onclick="return confirm_dialog();"></a>
                </td>
              </tr>
            <?php $no++;
              endforeach; ?>
            </tfoot>
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
