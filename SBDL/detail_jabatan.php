<?php
include("connection.php");
?>
<link rel="stylesheet" href="detailjabatan.css">
<div class="table-responsive">
<table border="1" cellpadding="2" cellspacing="0" align="center">
    <div class="container">
        <div class="header">
            <h1 class="judul">Data Jabatan</h1>
            <ul>
    <tr>
        <th>No.</th>
        <th>ID Jabatan</th>
        <th>Jabatan</th>
        <th>Tunjangan Struktural</th>
        <th>Tunjangan Fungsional</th>     
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM jabatan WHERE Id_jab='$_GET[Id_jab]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[Id_jab]";?></td>
        <td><?php echo"$r[Jabatan]";?></td>
        <td><?php echo"$r[T_Struktural]";?></td>
        <td><?php echo"$r[T_Fungsional]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>
<a href="index.php">Home</a>