<!DOCTYPE html>
<html>
<head>
	<title>Input Jabatan</title>
	<link rel="stylesheet" href="stylejabatan.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="judul">Data Jabatan</h1>
			<ul>
<form method="post" action="save_jabatan.php">
<input type="text" name="Id_jab" placeholder="ID Jabatan">
<input type="text" name="Jabatan" placeholder="Jabatan">
<input type="password" name="T_Struktural" placeholder="Tunjangan Struktural">
<input type="text" name="T_Fungsional" placeholder="Tunjangan Fungsional">

<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<?php 
// include 'view_rel_fak.php';
?>
<hr>
<?php
include 'view_jabatan.php'
?>
<a href="index.php">Home</a>
</body>
</html>