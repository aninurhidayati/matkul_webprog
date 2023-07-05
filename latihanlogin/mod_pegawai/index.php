<div class="container">
	<h1>Data Pegawai</h1>
	<a href="?modul=mod_pegawai&aksi=tambah"> Tambah Data</a>
	<table border="1" cellpadding="10">
		<tr>
			<th>No</th>
			<th>Nama Pegawai</th>
			<th>Jenis Kelamin</th>
			<th>Divisi Jabatan</th>
			<th>Status</th>
			<th>Tanggal Masuk</th>
			<th>Action</th>
		</tr>
		<?php 
		$no=1;
		$qry_data = mysqli_query($koneksidb,"SELECT p.*, d.nama_divisi FROM mst_pegawai p INNER JOIN mst_divisi d ON p.divisi=d.iddivisi");
		while($r = mysqli_fetch_array($qry_data)){
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $r['nama_peg']; ?></td>
			<td><?php echo $r['jk']; ?></td>
			<td><?php echo $r['nama_divisi']." , ".$r['jabatan']; ?></td>
			<td><?php echo $r['status']; ?></td>
			<td><?php echo date("d-m-Y", strtotime($r['tgl_masuk'])); ?></td>
			<td>
				<a href="?modul=mod_pegawai&aksi=ubah&idpeg=<?php echo $r['idpegawai'];?>">Ubah</a>
				<a href="">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>