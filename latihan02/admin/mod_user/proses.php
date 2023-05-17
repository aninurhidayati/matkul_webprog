<?php 
require_once("../../koneksidb.php");

if($_GET['proses'] == "insert"){
	echo "proses tambah";
	$usr = $_POST["user"];
	$psw = $_POST["pass"];
	$exsave = mysqli_query($koneksidb, 
		"insert into mst_user(username, password) values('".$usr."', '".$psw."')")
		or die("gagal simpan".mysqli_error($koneksidb));
	if($exsave){
		//ketik proses simpan berhasil
		header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
	}
}
else if ($_GET['proses'] == "update"){
	echo "proses update";
	$id = $_POST["txt_id"];
	$usr = $_POST["user"];
	$psw = $_POST["pass"];
	$exsave = mysqli_query($koneksidb, 
		"UPDATE mst_user SET username='".$usr."', password='".$psw."' WHERE iduser=$id")
		or die("gagal update".mysqli_error($koneksidb));

	if($exsave){
		//ketik proses simpan berhasil
		header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
	}	

}
else if ($_GET['proses'] == "delete"){
	echo "proses delete";
	$id = $_GET['id'];
	$exsave = mysqli_query($koneksidb, 
		"delete from mst_user WHERE iduser=$id")
		or die("gagal update".mysqli_error($koneksidb));

	if($exsave){
		//ketik proses simpan berhasil
		header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
	}	
}

?>