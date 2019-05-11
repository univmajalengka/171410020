<?php
include("connection.php");
?>
<link rel="stylesheet" href="detailpenggajian.css">
<div class="table-responsive">
<table border="1" cellpadding="2" cellspacing="0" align="center">
    <div class="container">
        <div class="header">
            <h1 class="judul">Data Penggajian</h1>
            <ul>
    <tr>
        <th>No.</th>
        <th>ID Gajian</th>
        <th>NIP</th>
        <th>Tanggal Gajian</th>
        <th>Gaji Pokok</th>
        <th>Tunjangan Kawin</th>
        <th>Tunjangan Anak</th>
        <th>Tunjangan Struktural</th>
        <th>Tunjangan Fungsional</th>
        <th>Tunjangan Beras</th>
        <th>Tunjangan Umum</th>
        <th>Pajak</th> 
        <th>Askes</th>         
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM penggajian WHERE Id_gajian='$_GET[Id_gajian]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[Id_gajian]";?></td>
        <td><?php echo"$r[NIP]";?></td>
        <td><?php echo"$r[tgl_gajian]";?></td>
        <td><?php echo"$r[Gaji_pokok]";?></td>
        <td><?php echo"$r[T_kawin]";?></td>
        <td><?php echo"$r[T_anak]";?></td>
        <td><?php echo"$r[T_struktural]";?></td>
        <td><?php echo"$r[T_fungsional]";?></td>
        <td><?php echo"$r[T_beras]";?></td>
        <td><?php echo"$r[T_umum]";?></td>
        <td><?php echo"$r[Pajak]";?></td>
        <td><?php echo"$r[Askes]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>
<a href="index.php">Home</a>