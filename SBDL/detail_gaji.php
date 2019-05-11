<?php
include("connection.php");
?>
<link rel="stylesheet" href="detailgaji.css">
<table border="1" cellpadding="2" cellspacing="0" align="center">
    <div class="container">
        <div class="header">
            <h1 class="judul">Data Gaji</h1>
            <ul>
    <tr>
        <th>No.</th>
        <th>ID Gaji</th>
        <th>ID Golongan</th>
        <th>Gaji Pokok</th>          
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM gaji WHERE Id_gaji='$_GET[Id_gaji]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[Id_gaji]";?></td>
        <td><?php echo"$r[id_gol]";?></td>
        <td><?php echo"$r[Gaji_pokok]";?></td>
    
    </tr>
<?php 
$no++;
} ?>
</table>
<a href="index.php">Home</a>