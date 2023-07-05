<?php 
require_once("../koneksi_db.php");
$nama = $_POST['txt_nama'];
$divisi = $_POST['tx_divisi'];
$jabatan = $_POST['tx_jabatan'];
$tgl_join = $_POST['tx_tgl'];
$alamat = $_POST['tx_alamat'];
$status = "";
//ini untuk mendapatkan value dari radio button
//dan agar tidak muncul error ketika tidak dipilih
if(isset($_POST['op_jk'])){
	$jk = $_POST['op_jk'];
}
else{
	$jk = "";
}
//ini untuk mendapatkan value dari checkbox
if(isset($_POST['st_kontrak'])){
	$status = "Kontrak";
}
if(isset($_POST['st_tetap'])){
	$status = "Tetap";
}
//start-proses upload gambar
$file = $_FILES['tx_file']; 
var_dump($file); //ini untuk menampilkan output bentuk array
echo "<hr>";
/*tentukan folder lokasi direktori penyimpanan file */
$target_folder = "../filefoto/";
//ini cara lain: $_FILES['tx_file']['name'];
/*tujuan penyimpanan file, direktori dan nama file*/
$target_file = $target_folder.$file['name'];
echo $target_file."<br>";
/*untuk mendapatkan tipe file yang diupload */
$type_file =  strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
echo $type_file."<br>";
/* 
   buat variabel untuk menampung hasil validasi ,
	apakah file boleh diupload atau tidak, jika 1 maka boleh diupload,
	jika 0 maka tidak dapat diupload
*/	
$boleh_upload = 1;
/* cek batas limit file maks.3MB*/
if($file['size'] > 1000000){
	$boleh_upload = 0;
	notif("Jangan Upload, file nya kebesaran gan!!");
}
/**cek tipe file yang boleh diupload : jpg, png, jpeg*/
if($type_file != "jpg" && $type_file != "png" && $type_file != "jpeg"){
	$boleh_upload = 0;
	notif("Tipe File anda berbahaya!!");
}
//proses upload memindah file dari local ke server
$ceknamafile = ""; //variabel ini yang akan disimpan ke tabel
if($boleh_upload == 1){
	//if ini melakukan proses upload dan sekaligus melakukan pengecekkan upload berhasil
	if(move_uploaded_file($file['tmp_name'],$target_file)){
		notif("File sudah di upload");
		$ceknamafile = $file['name'];
		//proses insert
	}
	else{
		notif("Gagal upload File");
	}	
}

//end-proses upload gambar

function notif($pesan){
	echo '<script language="javascript">';
	echo 'alert("'.$pesan.'")'; 
	echo '</script>';
	//<meta http-equiv="refresh" content="0;url=">;
	echo '<meta http-equiv="refresh" content="0; url=http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai&aksi=tambah">';	

}
?>