<?php 
 if(!isset($_GET['aksi'])){	
?>
<?php 
$qtampil = mysqli_query($koneksidb, "select * from mst_user") 
     or die("tabel tidak ditemukan".mysqli_error($koneksidb)) ;
?>
<a href="?modul=mod_user&aksi=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Username</th>
		<th class="w-25">Action</th>
	</tr>
	<?php
	$no = 1;
	while($row = mysqli_fetch_array($qtampil)){ //kurung pembuka
  ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $row['username']; ?></td>
		<td class="text-center">
			<a href="?modul=mod_user&aksi=edit&id=<?php echo $row['iduser']; ?>" class="btn btn-xs btn-primary p-1">
				<i class="bi bi-pencil-square"></i> Edit</a>
			<a href="mod_user/proses.php?proses=delete&id=<?php echo $row['iduser']; ?>" class="btn btn-xs btn-primary p-1">
				<i class="bi bi-trash"></i>Delete</a>
		</td>
	</tr>
	<?php $no++;
	} //kurung penutupnya?>
</table>
<?php 
} //penutup if

else if(isset($_GET['aksi'])){

	if($_GET['aksi'] == "edit"){
		//proses edit-1
		$query = mysqli_query($koneksidb, "select * from mst_user where iduser=".$_GET['id']."") 
     	         or die("Data tidak ditemukan".mysqli_error($koneksidb)) ;
		$data = mysqli_fetch_array($query);
		$nama = $data['user'];
		$pasw = $data['password'];
		$exproses = "update";
		$idnya = $_GET['id'];
		
	}
	else if($_GET['aksi'] == "add"){
		//proses add-2
		$exproses = "insert";
		$idnya = 0;
		$nama = "";
		$pasw = "";
	}
?>
<!-- ini untuk tampil form -->

<div class="container-fluid">
	<h3>Form Input</h3>
	<hr>
	<form action="mod_user/proses.php?proses=<?php echo $exproses; ?>" method="post">

		<div class="row mb-1">
			<label for="" class="col-md-3">Username </label>
			<div class="col-md-6">
				<input type="hidden" name="txt_id" id="txt_id" value="<?php echo $idnya; ?>">
				<input type="text" name="user" id="user" class="form-control" value="<?php echo $nama; ?>"
					oninvalid="this.setCustomValidity('Username belum diinput')" required="true" oninput="setCustomValidity('')">
			</div>
		</div>
		<div class="row mb-1">
			<label for="" class="col-md-3">Password </label>
			<div class="col-md-6">
				<input type="password" name="pass" id="pass" class="form-control" value="<?php echo $pasw; ?>"
					oninvalid="this.setCustomValidity('Password belum diinput')" required="true" oninput="setCustomValidity('')">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<button type="reset" name="btnreset" value="btnbatal" class="btn btn-xs btn-secondary p-1">
					<i class="bi bi-x-lg"></i> Batal</a></button>
				<button type="submit" name="btnsimpan" value="btnsimpan" class="btn btn-xs btn-primary p-1">
					<i class="bi bi-save"></i> Simpan</a></button>
			</div>
		</div>
	</form>
</div>
<?php } ?>