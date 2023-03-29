<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pert-04</title>
</head>

<body>
	<table border="1" cellpadding="10">
		<tr>
			<td>ID</td>
			<td>Judul</td>
			<td>Konten</td>
			<td>Action</td>
		</tr>
		<?php
			$data = array( 
				array("id"=>"01", "judul" => "judul01", "konten"=> "isi berita-1"),
				array("id"=>"02", "judul" => "judul02", "konten"=> "isi berita-2"),
				array("id"=>"03", "judul" => "judul03", "konten"=> "isi berita-3")
			);
			foreach($data as $d){ //pembuka\
		?>
		<tr>
			<td><?php echo $d["id"];?></td>
			<td><?php echo $d["judul"];?></td>
			<td><?php echo $d["konten"];?></td>
			<td>
				<a href="?idku=<?php echo $d["id"];?>">Edit</a>
				<a href="#">Delete</a>
			</td>
		</tr>

		<?php } //penutup
		?>
	</table>
</body>

</html>
<?php
$kata = "Belajar PHP itu Mudah";
echo strlen($kata);

$kata2 = explode(" ", $kata); //string to array
//var_dump($kata2);
$kata3 = implode(" ",$kata2); // array to string
echo $kata3."<br/>";
echo ltrim($kata3,"Belajar");
echo "<br>";
echo rtrim($kata3,"Mudah");
echo "<br>";
date_default_timezone_set("Asia/Jakarta");
$hariini = date("D, d/m/Y h:i:s ");
echo $hariini;

function hitungumur(){
	$tgllahir = date_create("02-05-2000");
	$tglhariini = date("d-m-Y");
	$umur = date_diff($tgllahir, date_create($tglhariini));
	return "<br> umur ".$umur->format("%y th %m bln %ahari");
}
echo hitungumur()."<hr>"; //ini cara memanggil function

function datamhs($jurusan, $nama, $nilai){
	echo "nama: $nama , $jurusan, $nilai";
}
datamhs("IT", "ANi", 90);
?>