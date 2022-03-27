<html>
<head>
	<title>Cetak Data Mahasiswa</title>
</head>
<body>

	<?php 
	include 'config-db.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th>id</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Tanggal</th>
			<th width="5%">Lahir</th>
		</tr>
		<?php 
        $query = "SELECT * FROM tbl_data";
        $brg->viewData($query);
		?>
		<tr>
		</tr>
		
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>













