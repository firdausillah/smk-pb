<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Tables
      <!-- <small>advanced tables</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
            <a href="<?= site_url(); ?>admin/dt_user/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp Tambah admin </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Foto</th>
                <th>User Name</th>
                <th>Level</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php $no=1;
               foreach ($users as $usr) :?>
              <tr>
                <td><?= $no; ?></td>
                <td><a><img height="40"></img></a></td>
                <td><?= $usr['username']; ?></td>
                <td><?= $usr['level']; ?></td>
                <td><?= $usr['status']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/dt_user/detail/<?= $usr['id']; ?>" class="fa fa-eye btn btn-primary"></a>
                  <a href="<?= base_url(); ?>admin/dt_user/delete/<?= $usr['id']; ?>" class="fa fa-trash btn btn-danger" onclick="return confirm_dialog();"></a>
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
