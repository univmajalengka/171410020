<!DOCTYPE html>
<html>
<head>
	<title>Input Penggajian</title>
	<link rel="stylesheet" href="stylepenggajian.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="judul">Data Penggajian</h1>
			<ul>
<form method="post" action="save_penggajian.php">
<input type="text" name="Id_gajian" placeholder="ID Gajian">
<input type="text" name="NIP" placeholder="NIP">
<input type="date" name="tgl_gajian" placeholder="Tanggal Gajian">
<input type="text" name="T_kawin" placeholder="Tunjangan Kawin">
<input type="text" name="T_anak" placeholder="Tunjangan Anak">
<input type="text" name="T_struktural" placeholder="Tunjangan Struktural">
<input type="text" name="T_fungsional" placeholder="Tunjangan Fungsional">
<input type="text" name="T_beras" placeholder="Tunjangan Beras">
<input type="text" name="Pajak" placeholder="Pajak">
<input type="text" name="T_umum" placeholder="Tunjangan Umum">
<input type="text" name="Askes" placeholder="Askes">


<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<?php 
// include 'view_rel_fak.php';
?>
<hr>
<?php 
include 'view_penggajian.php'
 ?>
<a href="index.php">Home</a>
</body>
</html>