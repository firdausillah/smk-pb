<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data User
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data User</a></li>
      <li class="active">Detail User</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <a href="<?= site_url()?>admin/dt_user" class="btn btn-info"><i class="fa fa-arrow-left"> &nbsp </i>Kembali</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered table-striped">
              <tr>
                <th>Foto</th>
                <td>:</td>
                <td><a href="<?= base_url('uploads/img/'); ?><?= $users['gambar']; ?>"><img src="<?= base_url('uploads/img/') ?><?= $users['gambar']; ?>" alt="<?= $users['username']; ?>" height="250"></img></a></td>
              </tr>
              <tr>
                <th>User Name</th>
                <td>:</td>
                <td><?= $users['username']; ?></td>
              </tr>
              <tr>
                <th>Password</th>
                <td>:</td>
                <td><?= $users['password']; ?></td>
              </tr>
              <tr>
                <th>Level</th>
                <td>:</td>
                <td><?= $users['level']; ?></td>
              </tr>
              <tr>
                <th>Status</th>
                <td>:</td>
                <td><?= $users['status']; ?></td>
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
