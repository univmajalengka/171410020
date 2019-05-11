<?php 
 include 'connection.php';
  $id  = $_POST['Id_pegawai']; 
  $nip  = $_POST['NIP'];
  $nama  = $_POST['Nama'];
  $jk  = $_POST['JK'];
  $status  = $_POST['Status'];
  $alamat  = $_POST['Alamat'];
  $jml_anak  = $_POST['Jml_anak'];
  $tempat_lahir  = $_POST['Tempat_lahir'];
  $tanggal_lahir  = $_POST['Tanggal_lahir'];
  $telp  = $_POST['Telp'];


  
  $mysqli  = "INSERT INTO pegawai(Id_pegawai,NIP,Nama,JK,Status,Alamat,Jml_anak,Tempat_lahir,Tanggal_lahir,Telp,id_jab,id_gol) VALUES ('$id', '$nip', '$nama', '$jk', '$status', '$alamat', '$jml_anak', '$tempat_lahir', '$tanggal_lahir', '$telp')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {

    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_pegawai.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>