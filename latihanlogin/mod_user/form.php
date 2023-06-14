<?php 
if($_GET['aksi'] == "tambah"){ 
?>
<div class="container">
	<h2>Input Data</h2>
	<!-- form action mengarahkan ke file untuk mengolah data yang sudah diinputkan -->
	<form action="mod_user/proses_add.php" method="POST">
		<div class="col">
			<label for="txt_user">Nama</label>
			<input type="text" name="txt_nama" id="txt_nama" oninvalid="this.setCustomValidity('Nama Wajib diisi!!')" required="true"
				oninput="setCustomValidity('')" />
		</div>
		<div class="col">
			<label for="txt_user">Username</label>
			<input type="text" name="txt_user" id="txt_user" oninvalid="this.setCustomValidity('Username Wajib diisi!!')" required="true"
				oninput="setCustomValidity('')" />
		</div>
		<div class="col">
			<label for="txt_pasw">Password</label>
			<input type="password" name="txt_pasw" id="txt_pasw" oninvalid="this.setCustomValidity('Password Wajib diisi!!')" required="true"
				oninput="setCustomValidity('')" />
		</div>
		<div class="col">
			<label for="txt_pasw2">Ulangi Password</label>
			<input type="password" name="txt_pasw2" id="txt_pasw2" oninvalid="this.setCustomValidity('Password Wajib diisi!!')" required="true"
				oninput="setCustomValidity('')" />
		</div>
		<div class="col">
			<button type="submit" id="btn_simpanuser">Simpan Data</button>
		</div>
	</form>
</div>
<?php } ?>
<?php 
if($_GET['aksi'] == "ubah"){ 
	//variabel untuk menampung value dari variabel user yg dikirim lewat url
	$usernya = $_GET['user'];
	$query_getdata = mysqli_query($koneksidb, 
			"select * from mst_user where username= '".$usernya."' ");
	$data = mysqli_fetch_array($query_getdata);
?>
<div class="container">
	<h2>Ubah Data</h2>
	<!-- form action mengarahkan ke file untuk mengolah data yang sudah diinputkan -->
	<form action="mod_user/proses_edit.php" method="POST">
		<div class="col">
			<label for="txt_user">Nama</label>
			<input type="text" name="txt_nama" id="txt_nama" oninvalid="this.setCustomValidity('Nama Wajib diisi!!')" required="true"
				oninput="setCustomValidity('')" value="<?php echo $data["nama"]; ?>" />
		</div>
		<div class="col">
			<label for="txt_user">Username</label>
			<input type="text" name="txt_user" id="txt_user" oninvalid="this.setCustomValidity('Username Wajib diisi!!')" required="true"
				oninput="setCustomValidity('')" value="<?php echo $data["username"]; ?>" readonly />
		</div>
		<div class="col">
			<label for="txt_pasw">Ganti Password</label>
			<input type="hidden" name="pass_lama" value="<?php echo $data["password"]; ?>">
			<input type="password" name="txt_pasw" id="txt_pasw" />
		</div>
		<div class="col">
			<label for="txt_pasw2">Ulangi Password</label>
			<input type="password" name="txt_pasw2" id="txt_pasw2" />
		</div>
		<div class="col">
			<button type="submit" id="btn_simpanuser">Simpan Data</button>
		</div>
	</form>
</div>
<?php }?>