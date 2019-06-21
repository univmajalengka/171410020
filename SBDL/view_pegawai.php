<?php
include("connection.php");
?>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="2" align="center">
    <tr>
        <th>ID Pegawai</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Alamat</th>
        <th>Username</th>
        <th colspan="2">Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM view_pegawai");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$r[Id_pegawai]";?></td>
        <td><?php echo"$r[Nama]";?></td>
        <td><?php echo"$r[JK]";?></td>
        <td><?php echo"$r[Alamat]";?></td>
        <td><?php echo"$r[username]";?></td>

        <td><a href="detail_pegawai.php?Id_pegawai=<?php echo $r['Id_pegawai'];?>">Detail</a></td>
        <td><a href="delete_pegawai.php?Id_pegawai=<?php echo $r['Id_pegawai'];?>">Delete</a></td>


    </tr>
<?php 
$no++;
} ?>
</table>
</div>
