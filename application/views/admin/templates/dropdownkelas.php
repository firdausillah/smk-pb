<li> <a href="#subPages" data-toggle="collapse" class="<?php echo ($nav == "siswa" ? 'active' : '') ?>"><i class="lnr lnr-user"></i> <span>Data Siswa</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
  <div id="subPages" class="<?php echo ($nav == "siswa" ? 'active' : '') ?>">
    <ul class="nav nav_sub">
      <?php foreach ($jurusan as $jr => $value) {?>
      <li>
        <a href="#subPages2 <?= $jr; ?>" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span><?= $value['jurusan']; ?></span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
        <div id="subPages2" class="collapse ">
          <ul class="nav" id="navjur<?php echo $jr; ?>">
            <?php foreach($kelas as $kls => $value2) { ?>
            <li><a href="<?= base_url();?>siswa?kelas=<?= echo $value2['kd_kelas'] ?>" class="<?php echo (@$_GET['kelas']==$value2['kd_kelas'])?'active':'' ?>"><?php echo $value2['kelas']." ".$value2['golongan'] ?></a>
            </li>
          <?php } ?>
          </ul>
        </div>
      </li>
    <?php } ?>
    </ul>
  </div>
</li>
