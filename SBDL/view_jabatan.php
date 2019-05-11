<?php
include("connection.php");
?>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="2" align="center">
    <tr>
        <th>ID Jabatan</th>
        <th>Jabatan</th>
        <th>Tunjangan Struktural</th>
        <th>Tunjangan Fungsional</th>
        <th colspan="2">Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM jabatan");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$r[Id_jab]";?></td>
        <td><?php echo"$r[Jabatan]";?></td>
        <td><?php echo"$r[T_Struktural]";?></td>
        <td><?php echo"$r[T_Fungsional]";?></td>

        <td><a href="detail_jabatan.php?Id_jab=<?php echo $r['Id_jab'];?>">Detail</a></td>
        <td><a href="delete_jabatan.php?Id_jab=<?php echo $r['Id_jab'];?>">Delete</a></td>


    </tr>
<?php 
$no++;
} ?>
</table>
</div>