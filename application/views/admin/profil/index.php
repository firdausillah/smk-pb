<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Profil
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Profil</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
          </div>
          <!--.info -->
          <?php if($this->session->flashdata('info')): ?>
          <div class="callout callout-success">
            <h4><i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('info'); ?></h4>
          </div>
          <?php endif ?>
          <!-- /.info -->
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <tr>
                <th>Visi</th>
                <td>:</td>
                <td><?= $profil['visi']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/profil/edit/<?= $profil['id']; ?>" class="fa fa-pencil btn btn-warning"></a>
                </td>
              </tr>
              <tr>
                <th>Misi</th>
                <td>:</td>
                <td><?= $profil['misi']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/profil/edit/<?= $profil['id']; ?>" class="fa fa-pencil btn btn-warning"></a>
                </td>
              </tr>
              <tr>
                <th>Sejarah</th>
                <td>:</td>
                <td><?= $profil['sejarah']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/profil/edit/<?= $profil['id']; ?>" class="fa fa-pencil btn btn-warning"></a>
                </td>
              </tr>
              <tr>
                <th>Tujuan</th>
                <td>:</td>
                <td><?= $profil['tujuan']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/profil/edit/<?= $profil['id']; ?>" class="fa fa-pencil btn btn-warning"></a>
                </td>
              </tr>
              <tr>
                <th>Sambutan</th>
                <td>:</td>
                <td><?= $profil['sambutan']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/profil/edit/<?= $profil['id']; ?>" class="fa fa-pencil btn btn-warning"></a>
                </td>
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
