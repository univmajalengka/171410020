
<?php
include 'connection.php';
$id = $_GET['Id_jab'];
$sql = "DELETE FROM jabatan WHERE Id_jab='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data jabatan dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='input_jabatan.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="input_jabatan.php";
	</script>
	<?php
}
?>