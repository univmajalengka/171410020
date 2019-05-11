<?php
include("connection.php");
?>
<link rel="stylesheet" href="detailpegawai.css">
<div class="table-responsive">
<table border="1" cellpadding="2" cellspacing="0" align="center">
    <div class="container">
        <div class="header">
            <h1 class="judul">Data Pegawai</h1>
            <ul>
    <tr>
        <th>No.</th>
        <th>ID Pegawai</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Status</th>
        <th>Alamat</th>
        <th>Jumlah Anak</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Telp</th>         
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM pegawai WHERE Id_pegawai='$_GET[Id_pegawai]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[Id_pegawai]";?></td>
        <td><?php echo"$r[NIP]";?></td>
        <td><?php echo"$r[Nama]";?></td>
        <td><?php echo"$r[JK]";?></td>
        <td><?php echo"$r[Status]";?></td>
        <td><?php echo"$r[Alamat]";?></td>
        <td><?php echo"$r[Jml_anak]";?></td>
        <td><?php echo"$r[Tempat_lahir]";?></td>
        <td><?php echo"$r[Tanggal_lahir]";?></td>
        <td><?php echo"$r[Telp]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>
<a href="index.php">Home</a>