<?php 
 include 'connection.php';
  $id  = $_POST['Id_gaji']; 
  $id_gol  = $_POST['id_gol'];
  $gaji  = $_POST['Gaji_pokok'];
  
  $mysqli  = "INSERT INTO gaji (Id_gaji,id_gol,Gaji_pokok) VALUES ('$id', '$id_gol', '$gaji')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_gaji.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>