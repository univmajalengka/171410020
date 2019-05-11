<?php
include("connection.php");
?>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="2" align="center">
    <tr>
        <th>ID Gaji</th>
        <th>ID Golongan</th>
        <th>Gaji Pokok</th>
        <th colspan="2">Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM gaji");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$r[Id_gaji]";?></td>
        <td><?php echo"$r[id_gol]";?></td>
        <td><?php echo"$r[Gaji_pokok]";?></td>

        <td><a href="detail_gaji.php?Id_gaji=<?php echo $r['Id_gaji'];?>">Detail</a></td>
        <td><a href="delete_gaji.php?Id_gaji=<?php echo $r['Id_gaji'];?>">Delete</a></td>


    </tr>
<?php 
$no++;
} ?>
</table>
</div>