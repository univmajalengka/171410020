<!DOCTYPE html>
<html>
<head>
	<title>Input Golongan</title>
	<link rel="stylesheet" href="stylegolongan.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="judul">Data Golongan</h1>
			<ul>
<form method="post" action="save_golongan.php">
<input type="text" name="id_gol" placeholder="ID Golongan">
<input type="text" name="Golongan" placeholder="Golongan">
<input type="password" name="T_kawin" placeholder="Tunjangan Kawin">
<input type="text" name="T_anak" placeholder="Tunjangan Anak">
<input type="text" name="T_umum" placeholder="Tunjangan Umum">
<input type="text" name="Askes" placeholder="Askes">

<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<?php 
include 'view_gol.php'
?>
<hr>
<a href="index.php">Home</a>
</body>
</html>