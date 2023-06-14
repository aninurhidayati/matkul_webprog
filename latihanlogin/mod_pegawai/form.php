<div class="container">
	<h2>Input Data</h2>
	<!-- form action mengarahkan ke file untuk mengolah data yang sudah diinputkan -->
	<form action="mod_user/proses_add.php" method="POST">
		<div class="col">
			<label for="txt_user">Nama</label>
			<input type="text" name="txt_nama" id="txt_nama" onkeyup="text_up(txt_nama)" oninvalid="this.setCustomValidity('Nama Wajib diisi!!')"
				required="true" oninput="setCustomValidity('')" />
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
			<button type="submit">Simpan Data</button>
		</div>
	</form>
</div>