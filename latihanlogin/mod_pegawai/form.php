<?php if($_GET['aksi'] == "tambah"){ ?>
<div class="container">
	<h2>Input Data</h2>
	<!-- form action mengarahkan ke file untuk mengolah data yang sudah diinputkan -->
	<form action="mod_pegawai/proses_add.php" method="POST" enctype="multipart/form-data">
		<div class="col-md">
			<label for="txt_user">Nama Pegawai</label>
			<input type="text" name="txt_nama" id="txt_nama" />
		</div>
		<div class="col-md">
			<label for="jk">Jenis Kelamin</label>
			<input type="radio" name="op_jk" value="Laki-laki"> Laki-laki
			<input type="radio" name="op_jk" value="Wanita"> Wanita
		</div>
		<div class="col-md">
			<label for="tx_divisi">Divisi</label>
			<select name="tx_divisi" class="form-select">
				<option value="">--Pilih Divisi--</option>
				<?php 
				$qdivisi = mysqli_query($koneksidb, "select * from mst_divisi");
				while($c = mysqli_fetch_array($qdivisi)){
					echo '<option value="'.$c['iddivisi'].'">'.$c['nama_divisi'].'</option>';
				}
				?>

			</select>
		</div>
		<div class="col-md">
			<label for="tx_jabatan">Jabatan</label>
			<input type="text" name="tx_jabatan" id="tx_jabatan">
		</div>
		<div class="col-md">
			<label for="status">Status Pegawai</label>
			<input type="checkbox" name="st_kontrak" value="Kontrak"> <label>Kontrak</label>
			<input type="checkbox" name="st_tetap" value="Tetap"> <label>Tetap</label>
		</div>
		<div class="col-md">
			<label for="tx_tgl">Tanggal Bergabung</label>
			<input type="date" name="tx_tgl" id="tx_tgl">
		</div>
		<div class="col-md">
			<label for="tx_alamat">Alamat</label>
			<textarea name="tx_alamat" id="tx_alamat" cols="50" rows="3"></textarea>
		</div>
		<div class="col-md">
			<label for="tx_file">Upload Foto</label>
			<input type="file" name="tx_file" id="tx_file">
		</div>
		<div class="col-md">
			<button class="button">Simpan Data</button>
		</div>
	</form>
</div>
<?php } ?>

<?php 
if($_GET['aksi'] == "ubah"){
	$id = $_GET['idpeg'];
	$query_getdata = mysqli_query($koneksidb, 
			"select * from mst_pegawai where idpegawai= '".$id."' ");
	$data = mysqli_fetch_array($query_getdata);
?>
<div class="container">
	<h2>Ubah Data</h2>
	<!-- form action mengarahkan ke file untuk mengolah data yang sudah diinputkan -->
	<form action="mod_pegawai/proses_edit.php" method="POST" enctype="multipart/form-data">
		<div class="col-md">
			<input type="hidden" name="idpegawai" value="<?php echo $id; ?>">
			<label for="txt_user">Nama Pegawai</label>
			<input type="text" name="txt_nama" id="txt_nama" value="<?php echo $data['nama_peg'];?>" />
		</div>
		<div class="col-md">
			<label for="jk">Jenis Kelamin</label>
			<?php 
			$jk = $data['jk']; $cek_lk = ""; $cek_wn = "";
			if($jk == "Laki-laki"){ $cek_lk = "checked"; }
			if($jk == "Wanita"){ $cek_wn = "checked"; }
			 ?>
			<input type="radio" name="op_jk" value="Laki-laki" <?php echo $cek_lk; ?>> Laki-laki
			<input type="radio" name="op_jk" value="Wanita" <?php echo $cek_wn; ?>> Wanita
		</div>
		<div class="col-md">
			<label for="tx_divisi">Divisi</label>
			<select name="tx_divisi" class="form-select">
				<option value="">--Pilih Divisi--</option>
				<?php 
				$qdivisi = mysqli_query($koneksidb, "select * from mst_divisi");
				while($c = mysqli_fetch_array($qdivisi)){
					echo '<option value="'.$c['iddivisi'].'">'.$c['nama_divisi'].'</option>';
				}
				?>

			</select>
		</div>
		<div class="col-md">
			<label for="tx_jabatan">Jabatan</label>
			<input type="text" name="tx_jabatan" id="tx_jabatan">
		</div>
		<div class="col-md">
			<label for="status">Status Pegawai</label>
			<input type="checkbox" name="st_kontrak" value="Kontrak"> <label>Kontrak</label>
			<input type="checkbox" name="st_tetap" value="Tetap"> <label>Tetap</label>
		</div>
		<div class="col-md">
			<label for="tx_tgl">Tanggal Bergabung</label>
			<input type="date" name="tx_tgl" id="tx_tgl">
		</div>
		<div class="col-md">
			<label for="tx_alamat">Alamat</label>
			<textarea name="tx_alamat" id="tx_alamat" cols="50" rows="3"></textarea>
		</div>
		<div class="col-md">
			<img src="filefoto/<?php echo $data['foto']; ?>" width="200">
			<input type="hidden" name="tx_filelama" value="<?php echo $data['foto']; ?>">
			<label for="tx_file">Upload Foto</label>
			<input type="file" name="tx_file" id="tx_file"  >
		</div>
		<div class="col-md">
			<button class="button">Simpan Data</button>
		</div>
	</form>
</div>
<?php } ?>