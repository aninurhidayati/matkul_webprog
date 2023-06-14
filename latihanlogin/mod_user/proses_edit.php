<?php
//ini untuk menyisipkan file koneksi, 
// tanda ../ ini berarti harus keluar folder mod_user krn file ada diluarnya  
require_once("../koneksi_db.php");
$txuser = $_POST['txt_user']; // sesuai attribut name pada form 
$txpass_baru = $_POST['txt_pasw'];
$txpass_lama = $_POST['pass_lama'];
$txnama = $_POST['txt_nama'];

$passwordnya = "";
if($txpass_baru == "" || $txpass_baru == NULL || empty($txnama)){
	$passwordnya = $txpass_lama;
}
else{
	$passwordnya = md5($txpass_baru);
}
$query_update = mysqli_query($koneksidb,
		"update mst_user set nama='".$txnama."', 
		password='".$passwordnya."' where username='".$txuser."' ");

if($query_update){
	echo "Data Berhasil di Ubah!!";
}

?>