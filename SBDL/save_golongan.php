<?php 
 include 'connection.php';
  $id  = $_POST['Id_gol']; 
  $gol  = $_POST['Golongan'];
  $t_kawin  = $_POST['T_kawin'];
  $t_anak  = $_POST['T_anak'];
  $t_umum  = $_POST['T_umum'];
  $askes  = $_POST['Askes'];
  
  $mysqli  = "INSERT INTO golongan (Id_gol,Golongan,T_kawin,T_anak,T_umum,Askes) VALUES ('$id', '$gol', '$t_kawin', '$t_anak', '$t_umum', '$askes')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_golongan.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>