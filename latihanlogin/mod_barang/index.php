<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="proses_add.php" method="post">
		<h1>Data Barang</h1>
		<input type="text" name="kodebarang" placeholder="Kode Barang">
		<input type="text" name="namabarang" placeholder="Nama Barang">
		<input type="radio" name="jenis" value="New">New
		<input type="radio" name="jenis" value="Second">Second
		<input type="number" name="harga" placeholder="Harga">
		<button type="submit">Kirim Data</button>
	</form>
</body>
</html>
