<div class="content">
	<!--contact-->
	<div class="contact-w3l">
		<div class="container">
			<div class="col-md-12 contact-left">
				<div class="contct-info">
					<h4> No. Pendaftaran Anda : <?php echo $siswa['nipd'] ?> </h4>
					<a href="<?php echo base_url('Informasi/l_siswabaru/'.$siswa['nipd']) ?>" class="btn btn-success"><i class="fa fa-print"></i>&nbsp; Cetak</a>
					<a href="<?php echo base_url('Informasi/e_anggotabaru/'.$siswa['nipd']) ?>" class="btn btn-success"><i class="fa fa-pencil"></i>&nbsp; Edit</a>
					<table  class="table table-striped">
						<tr>
							<th width="300px">Foto</th>
							<td>:</td>
							<td><img src="<?php echo base_url('/admin/upload/siswa/'.$siswa['gambar']) ?>" alt="" width="100px"></td>
						</tr>
						<tr>
							<th>NIM</th>
							<td>:</td>
							<td><?php echo $siswa['nipd'] ?></td>
						</tr>
						<tr>
							<th>Nama Lengkap</th>
							<td>:</td>
							<td><?php echo $siswa['nama'] ?></td>
						</tr>
						<tr>
							<th>Tgl. Lahir</th>
							<td>:</td>
							<td><?= $siswa['tgl_lahir'] ?></td>
						</tr>
						<tr>
							<th>Agama</th>
							<td>:</td>
							<td><?php echo $siswa['agama'] ?></td>
						</tr>
						<tr>
							<th>Alamat</th>
							<td>:</td>
							<td><?php echo $siswa['alamat'] ?></td>
						</tr>
						<tr>
							<th>No. Telp.</th>
							<td>:</td>
							<td><?php echo $siswa['no_hp'] ?></td>
						</tr>
						<tr>
							<th>Jenis Kelamin</th>
							<td>:</td>
							<td><?php echo $siswa['kelamin'] ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!--contact-->
</div>
