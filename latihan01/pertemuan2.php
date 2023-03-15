<?php 
$pembeli = "Daud";
$uang = 15000000;
$laptop;
// if($uang < 10000000){
// 	$laptop = "Laptop Asus";
// 	$bonus ="voucher";
// }
// else
// 	$laptop = "Laptop HP";

// echo "Maka $pembeli membeli $laptop";
echo "<hr>";
switch($uang){
	case $uang > 10000000:
		$laptop = "Laptop HP";
		break;
	case $uang > 15000000:
		$laptop = "Laptop DELL";
		break;	
	default:
		$laptop = "Laptop HP";
		break;
}
echo "Maka $pembeli membeli $laptop";
echo "<hr>";
/*jika mahasiswa seragam lengkap maka "silahkan mengikuti kuliah"
jika mahasiswa seragam tidak sesuai maka " laksanakan hukuman"
selain itu "kena SP"*/
//inputan
$mahasiswa = ""; //ini yang dirubah 
//pengecekkan dan ouput nya
if($mahasiswa == "seragam lengkap"){
	echo "silahkan mengikuti kuliah";
}
else if($mahasiswa == "seragam tidak sesuai"){
	echo "laksanakan hukuman";
}
else if($mahasiswa == ""){
	echo "isi dulu!!";
}
else{
	echo "kena SP";
}
?>