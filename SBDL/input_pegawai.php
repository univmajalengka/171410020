<!DOCTYPE html>
<html>
<head>
	<title>Input Pegawai</title>
	<link rel="stylesheet" href="stylepegawai.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 class="judul">Data Pegawai</h1>
			<ul>
<form method="post" action="save_pegawai.php">
<input type="text" name="Id_pegawai" placeholder="ID Pegawai">
<input type="text" name="NIP" placeholder="NIP">
<input type="date" name="Nama" placeholder="Nama">
<input type="text" name="JK" placeholder="Jenis Kelamin">
<input type="text" name="Status" placeholder="Status">
<input type="text" name="Alamat" placeholder="Alamat">
<input type="text" name="Jml_anak" placeholder="Jumlah Anak">
<input type="text" name="Tempat_lahir" placeholder="Tempat Lahir">
<input type="text" name="Tanggal_lahir" placeholder="Tanggal Lahir">
<input type="text" name="Telp" placeholder="Telepon">
<input type="text" name="id_jab" placeholder="ID Jabatan">
<input type="text" name="id_gol" placeholder="ID Golongan">


<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<?php 
// include 'view_rel_fak.php';
?>
<hr>
<?php 
include 'view_pegawai.php'
 ?>
<a href="index.php">Home</a>
</body>
</html>