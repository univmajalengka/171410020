<?php 
 include 'connection.php';
  $id  = $_POST['Id_jab']; 
  $jabatan  = $_POST['Jabatan'];
  $t_struktural  = $_POST['T_Struktural'];
  $t_fungsional  = $_POST['T_Fungsional'];
  
  $mysqli  = "INSERT INTO jabatan (Id_jab,Jabatan,T_Struktural,T_Fungsional) VALUES ('$id', '$jabatan', '$t_struktural', '$t_fungsional')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_jabatan.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>