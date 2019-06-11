<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Berita
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Berita</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
            <a href="<?= site_url(); ?>admin/berita/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp Tambah Berita </a>
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
              <thead>
              <tr>
                <th>No</th>
                <th>Judul Berita</th>
                <th>Gambar</th>
                <th>Tanggal</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php $no=1;
               foreach ($berita as $brt) :?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $brt['judul_berita']; ?></td>
                <td><a href="<?= base_url('uploads/img/berita/'); ?><?= $brt['gambar']; ?>"><img src="<?= base_url('uploads/img/berita/') ?><?= $brt['gambar']; ?>" alt="<?= $brt['judul_berita']; ?>" height="60px"></img></a></td>
                <td><?= $brt['tanggal']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/berita/detail/<?= $brt['id']; ?>" class="fa fa-eye btn btn-primary"></a>
                  <a href="<?= base_url(); ?>admin/berita/delete/<?= $brt['id']; ?>" class="fa fa-trash btn btn-danger" onclick="return confirm_dialog();"></a>
                  <a href="<?= base_url(); ?>admin/berita/edit/<?= $brt['id']; ?>" class="fa fa-pencil btn btn-warning"></a>
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
