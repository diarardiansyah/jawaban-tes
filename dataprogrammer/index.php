<!DOCTYPE html>
<html>
<head>

	<link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/bootsrap.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">

	<title>Data Programmer</title>
</head>
<body>

<div class="judul">

<h1>Aplikasi Data Programmer Dan Skills</h1>

</div>
<br/>

<a href="tambah.php" class="btn btn-primary mb-3">Tambah Programmer Baru</a>

<br><br>

<table border="2" cellpadding="10" cellspacing="0">

	<tr>
		<th>NO</th>
		<th>Nama Programmer</th>
		<th>Skills</th>
		<th>Aksi</th>
	</tr>

	<?php

	require 'koneksi.php';

	$data = mysqli_query($koneksi, "SELECT * FROM user");

	$no = 1;

	while($d=mysqli_fetch_assoc($data)):


	?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $d['name']; ?></td>
		<td><?= $d['skills']; ?></td>
		<td>
			<a href="edit.php?id=<?= $d["id"]; ?>" class="btn btn-primary">Edit</a>
		</td>
	</tr>
	<?php endwhile; ?>

</table>

</body>
</html>