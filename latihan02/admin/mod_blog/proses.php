<?php 
require_once("../../koneksidb.php");

if($_GET['proses'] == "insert"){
	echo "proses tambah <br>";
	//mendapatkan value dari form
	$kategorix = $_POST['kategori'];
	$judulx = $_POST["judul"];
	$isix = $_POST['isi'];
	$tglx = $_POST['tanggal'];
	if(isset($_POST['is_aktif'])){
		$aktif = 1;
	}
	else{
		$aktif =  0;
	}

	$exsave = mysqli_query($koneksidb, 
		"insert into mst_blog
		(judul, tglblog, file_gmb, isiblog, penulis, idkategori, isactive) 
		values('".$judulx."','".$tglx."', '', '".$isix."', '', '".$kategorix."', ".$aktif.")")
		or die("gagal simpan".mysqli_error($koneksidb));
	if($exsave){
		//ketik proses simpan berhasil
		header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_blog");
	}
}
else if ($_GET['proses'] == "update"){
	echo "proses update";
	$namakategori = $_POST['txt_nama']; //menampung hasil input form
	$idkategori = $_POST['txt_id'];  //menampung hasil input form
	$exsave = mysqli_query($koneksidb, 
		"UPDATE mst_kategori SET nm_kategori='$namakategori' 
		 WHERE idkategori=$idkategori")
		or die("gagal update".mysqli_error($koneksidb));

	if($exsave){
		//ketik proses simpan berhasil
		header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
	}	

}
else if ($_GET['proses'] == "delete"){
	echo "proses delete";
	$id = $_GET['id'];
	$exsave = mysqli_query($koneksidb, 
		"delete from mst_kategori WHERE idkategori=$id")
		or die("gagal update".mysqli_error($koneksidb));

	if($exsave){
		//ketik proses simpan berhasil
		header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
	}	
}

?>