<style type="text/css">
<!--
.style1 {font-size: large}
.style3 {font-size: 9px}
-->
</style>
  <title>Bukti Pendaftaran Siswa Baru</title>
<form>
  <table width="910" border="0" align="center" cellspacing="2">
    <thead>
      <tr>
        <th rowspan="4">
          <img src="<?php echo base_url('assets/template/front/images/polije.png') ?>" height="70">
        </th>
        <th>SMK Puspa Bangsa 2 Siliragung</th>
        <th rowspan="4">
          <img src="<?php echo base_url('assets/template/front/images/pmi.png') ?>" height="80">
        </th>
      </tr>
      <tr>
        <td align="center">Jl. Mastrip PO BOX 164 Jember, Pav. Belakang Aula Soetrisno Widjaja Jember <br>website : ksrpmi.polije.ac.id | email : ksr.pmi.unitpolije@gmail.com</td>
      </tr>
      <tr>
        <td colspan="3">
          <hr/><br/>
        </td>
      </tr>
      <tr>
        <th></th>
        <th>BUKTI PENDAFTARAN SISWA BARU</th>
        <th></th>
      </tr>
      <tr>
        <td><input name="cetak" type="button" id="cetak" value="Cetak" onClick="Cetakan()"></td>
      </tr>
    </thead>
  </table>

  <table width="910" border="0" align="center" cellspacing="0" cellpadding="6">
    <tr>
      <td>No. Pendaftaran</td>
      <td>:</td>
      <td><?php echo $siswa['id'] ?></td>
      <td width="151px"><img src="<?php echo base_url('/admin/upload/siswa/'.$siswa['gambar']) ?>" alt="" width="151px"  style="position:absolute; height:227px; width: 151px; object-fit: cover;"></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td><?php echo $siswa['nipd'] ?></td>
    </tr>
    <tr>
      <td width="250px">Nama Lengkap</td>
      <td>:</td>
      <td><?php echo $siswa['nama'] ?></td>
    </tr>
    <tr>
      <td>Tgl. Lahir</td>
      <td>:</td>
      <td><?= mediumdate_indo($siswa['tanggal_lahir']) ?></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>:</td>
      <td><?php echo $siswa['agama'] ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td colspan="2"><?php echo $siswa['alamat'] ?></td>
    </tr>
    <tr>
      <td>No. Telp.</td>
      <td>:</td>
      <td><?php echo $siswa['no_hp'] ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><?php echo $siswa['kelamin'] ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <br><br>
        Jember, <?php echo date('d-M-Y') ?>
        <br>
        Pendaftar,
        <br><br><br><br><br>
        <u><?php echo $siswa['nama'] ?></u>
        <br>
        <?php echo 'NIPD '.$siswa['nipd'] ?>
      </td>
    </tr>
  </table>
</form>
<script>
function Cetakan()
{
  var x = document.getElementsByName("cetak");
  for(i = 0; i < x.length ; i++)
  {
  		x[i].style.visibility = "hidden";
  }
  window.print();
  alert("Jangan di tekan tombol OK sebelum dokumen selesai tercetak!");
  for(i = 0; i < x.length ; i++)
  {
  		x[i].style.visibility = "visible";
  }
}
</script>
