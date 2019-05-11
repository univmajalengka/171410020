<?php
include("connection.php");
?>
<link rel="stylesheet" href="detailgolongan.css">
<div class="table-responsive">
<table border="1" cellpadding="2" cellspacing="0" align="center">
    <div class="container">
        <div class="header">
            <h1 class="judul">Data Golongan</h1>
            <ul>
    <tr>
        <th>No.</th>
        <th>ID Golongan</th>
        <th>Golongan</th>
        <th>Tunjangan Kawin</th>
        <th>Tunjangan Anak</th>
        <th>Tunjangan Umum</th>
        <th>Askes</th>         
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM golongan WHERE Id_gol='$_GET[Id_gol]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[Id_gol]";?></td>
        <td><?php echo"$r[Golongan]";?></td>
        <td><?php echo"$r[T_kawin]";?></td>
        <td><?php echo"$r[T_anak]";?></td>
        <td><?php echo"$r[T_umum]";?></td>
        <td><?php echo"$r[Askes]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
<a href="index.php">Home</a>
</div>