<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Nilai
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Nilai</a></li>
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
              <thead>
              <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>File Nilai</th>
                <th>Upload File Nilai</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php $no=1;
               foreach ($nilai as $n) :?>
              <tr>
                <td><?= $no; ?></td>
                <td><a href="<?= base_url('uploads/img/'); ?><?= $n['gambar']; ?>"><img src="<?= base_url('uploads/img/') ?><?= $n['gambar']; ?>" alt="<?= $n['nama']; ?>" height="60px"></img></a></td>
                <td><?= $n['nama']; ?></td>
                <td><?= $n['kelas']; ?> <?= $n['jurusan']; ?> <?= $n['golongan']; ?></td>
                <td><?= $n['nilai']; ?></td>
                <td>
                  <?=form_open_multipart('admin/nilai/save?url='.$this->uri->uri_string);?>
                    <input type="hidden" name="nipd" value="<?= $n['nipd']; ?>">
                    <div class="input-group">
                      <input type="file" name="nilai" class="form-control">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i></button>
                      </div>
                    </div>
                  </form>
                </td>
                <td>
                  <a href="<?= base_url(); ?>admin/nilai/delete/<?= $n['nipd']; ?>" class="fa fa-trash btn btn-danger" onclick="return confirm_dialog();"></a>
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
