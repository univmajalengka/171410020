<!DOCTYPE html>
<html>
<head>
	<title>Input Gaji</title>
	<link rel="stylesheet" href="stylegaji.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="judul">Data Gaji</h1>
			<ul>
<form method="post" action="save_gaji.php">
<input type="text" name="Id_gaji" placeholder="ID Gaji">
<input type="text" name="id_gol" placeholder="ID Golongan">
<input type="text" name="Gaji_pokok" placeholder="Gaji Pokok">

<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<?php 
// include 'view_rel_fak.php';
?>
<hr>
<?php 
include 'view_gaji.php'
 ?>
<hr>
<a href="index.php">Home</a>
</body>
</html>