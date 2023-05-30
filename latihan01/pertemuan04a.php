<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>latihan form</title>
</head>

<body>
	<form action="proses.php" method="POST">
		<table>
			<tr>
				<td>Nilai-1</td>
				<td><input type="text" name="nilai_a" id="nilai1"></td>
			</tr>
			<tr>
				<td>Nilai-2</td>
				<td><input type="text" name="nilai_b" id="nilai2"></td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit">Lihat Hasil</button>
				</td>
			</tr>
		</table>
	</form>
</body>

</html>