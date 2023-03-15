<?php 
$pembeli = "Daud";
$uang = 15000000;
$laptop;
if($uang < 10000000){
	$laptop = "Laptop Asus";
}
else{
	$laptop = "Laptop HP";
}
echo "Maka $pembeli membeli $laptop";
?>