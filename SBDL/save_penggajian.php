<?php 
 include 'connection.php';
  $id  = $_POST['Id_gajian']; 
  $nip  = $_POST['NIP'];
  $tgl  = $_POST['tgl_gajian'];
  $gaji  = $_POST['Gaji_pokok'];
  $t_kawin  = $_POST['T_Kawin'];
  $t_anak  = $_POST['T_Anak'];
  $t_struktural  = $_POST['T_struktural'];
  $t_fungsional  = $_POST['T_fungsional'];
  $t_beras  = $_POST['T_beras'];
  $pajak  = $_POST['Pajak'];
  $t_umum  = $_POST['T_umum'];
  $askes  = $_POST['Askes'];

  
  $mysqli  = "INSERT INTO penggajian (Id_gajian,NIP,tgl_gajian,Gaji_pokok,T_Kawin,T_Anak,T_struktural,T_fungsional,T_beras,Pajak,T_umum,Askes) VALUES ('$id', '$nip', '$tgl', '$gaji', '$t_kawin', '$t_anak', '$t_struktural', '$t_fungsional', '$t_beras', '$pajak', '$t_umum', '$askes')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_penggajian.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>