<?php 
require_once("koneksi_db.php");
session_start();
//ini untuk cek, bahwa user harus login terlebih dahulu
//jika belum maka kembali ke index (halaman login)
if(!isset($_SESSION['namalog'])){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME ADMIN</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<h2>Hai, <?php echo $_SESSION['namalog']; ?></h2>
		<a href="?modul=mod_user" class="btn">Modul User</a>
		<a href="?modul=mod_pegawai" class="btn">Modul Pegawai</a>
		<div class="konten">
			<!-- semua modul akan ditampilkan disini-->
			<?php 				
				if(isset($_GET['modul']) && !isset($_GET['aksi'])){
					//nama folder otomatis sesuai value yang dikirim melalui
					//variabel modul dan tidak ditemukan variabel aksi 
					include_once("".$_GET['modul']."/index.php");
				}
				if(isset($_GET['modul']) && isset($_GET['aksi'])){
					//akan menampilkan file form.php jika ada pengiriman
					//variabel modul dan aksi 
					include_once("".$_GET['modul']."/form.php");
				}
			?>
		</div>
	</div>
</body>

</html>