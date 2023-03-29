<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>latihan array</title>
</head>

<body>

</body>

</html>
<?php
	 $calonsukses =array("dzaky", "fero", "syarif", "daud");
	 var_dump($calonsukses);
	 //associative array
	 $calonbos = array("dzaky" => "FE Dev", "fero" => "BE Dev", "syarif" => "Analis Sistem", "daud"=> "UI Designer");
	 echo $calonbos['daud'];
	 //multidimensional array
	 echo "<hr>";
	 $startup = array(
		array("nama" => "daud", "jabatan" => "UI designer", "gaji" => 10000000),
		array("nama" => "fero", "jabatan" => "BE Dev", "gaji" => 13000000),
		array("nama" => "syarif", "jabatan" => "SA", "gaji" => 12000000),
		array("nama" => "Dzaky", "jabatan" => "FE dev", "gaji" => 10000000)
	 );
	 sort($startup);
	 echo "startup: ".$startup[2]['nama']." ,jabatan ".$startup[2]['jabatan']." ,gaji ".$startup[2]['gaji']."" ;
	 echo "<hr>";
	 for($i = 1; $i <= 50; $i++){		
		if($i % 2 == 0){
			echo $i." , ";
		}
	 }
	 echo "<br>";
	 $a = 1;
	 while($a <= 20){
			echo $a." , ";
			$a+=2;
			// if($a % 2 !== 0){
			// 	echo $a." , ";
			// }	
	 }
	 echo "<hr>";
	 foreach($calonsukses as $d){
		echo $d." , ";
	 }
	 for($x=0; $x < count($calonsukses); $x++){
		echo $calonsukses[$x];
	 }
	?>