<?php
include("connection.php");
?>
<div class="table-responsive">
<table border="1" cellspacing="0" cellpadding="2" align="center">
    <tr>
        <th>No</th>
        <th>ID Golongan</th>
        <th>Golongan</th>
        <th>Tunjangan Kawin</th>
        <th>Tunjangan Anak</th>
        <th>Tunjangan Umum</th>
        <th>Askes</th>
        <th colspan="2">Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM golongan");
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
        <td><a href="detail_golongan.php?Id_gol=<?php echo "$r[Id_gol]";?>">Detail</a></td>
        <td><a href="delete_golongan.php?Id_gol=<?php echo $r[Id_jab];?>">Delete</a></td>


    </tr>
<?php 
$no++;
} ?>
</table>
</div>