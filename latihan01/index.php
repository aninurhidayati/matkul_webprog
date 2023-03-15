<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<a href="tes.php" target="_blank" rel="noopener noreferrer"></a>
</body>

</html>
<?php
	echo "<b>Hello worlds</b> <hr/>";
	$nama = 'Ani';
	$nama2 = "Nur.H";
	/** echo untuk menampilkan output */
	echo "$nama $nama2 <br>";
	$nilai_quis = 80;
	$nilai_tugas = 90;
	$hasil1= $nilai_quis + $nilai_tugas;
	$hasil2= $nilai_quis - $nilai_tugas;
	$hasil3= $nilai_quis * $nilai_tugas;
	$hasil4= round($nilai_quis / $nilai_tugas);
	$hasil5= $nilai_quis ** 2;
	$hasil6= $nilai_quis % 2;
	echo "penjumlahan $nilai_quis + $nilai_tugas = $hasil1 <br>";
	echo "pengurangan $nilai_quis - $nilai_tugas = $hasil2 <br>";
	echo "Perkalian $nilai_quis * $nilai_tugas = $hasil3 <br>";
	echo "Pembagian $nilai_quis / $nilai_tugas = $hasil4 <br>";
	echo "Exponen : $hasil5 , Modulus: $hasil6";
	echo "<hr><hr> ";
	echo "";
?>