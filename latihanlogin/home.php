<?php 
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
		<a href="mod_user/index.php" class="btn">Modul User</a>
		<a href="" class="btn">Modul Pegawai</a>
		<div class="konten">
			tes
		</div>
	</div>
</body>

</html>