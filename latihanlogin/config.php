<?php 
function securitylogin(){
	//ini untuk cek, bahwa user harus login terlebih dahulu
	//jika belum maka kembali ke index (halaman login)
	if(!isset($_SESSION['namalogin'])){
		return header("Location: index.php");
	}
	else{
		return $_SESSION['namalogin'];
	}
}
?>