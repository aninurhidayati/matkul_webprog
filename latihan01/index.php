<?php
	echo "<b>Hello worlds</b> <hr/>";
	$nama = 'Ani';
	$nama2 = "Nur.Hi";
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