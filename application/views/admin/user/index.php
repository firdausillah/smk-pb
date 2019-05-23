<!-- Main -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-dashboard"></i>&ensp; Data User </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-body">
              <?php foreach ($grocery->css_files as $file): ?>
                  <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
              <?php endforeach; ?>
              <?php foreach ($grocery->js_files as $file): ?>
                  <script src="<?php echo $file; ?>"></script>
              <?php endforeach; ?>
              <?php echo $grocery->output; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- End Main -->
