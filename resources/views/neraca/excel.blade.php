<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Neraca Saldo.xls");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan</title>
</head>
<style>
	table {
		width: 100%;
		border-collapse: collapse;
	}

	td {
		text-align: center;
		padding: 3px;
	}
</style>
<body>

	<center>
		<h4>Neraca Saldo</h4>
	</center>

	<table border="1">
		<tr>
			<td>Nomor</td>
			<td>Nama Akun</td>
			<td>Debit</td>
			<td>Kredit</td>
		</tr>

		@foreach($data as $item)
			<tr>
				<td>{{ $item->nomor }}</td>
				<td>{{ $item->nama_akun }}</td>
				<td>{{ $item->debit }}</td>
				<td>{{ $item->kredit }}</td>
			</tr>
		@endforeach
	</table>
	
</body>
</html>