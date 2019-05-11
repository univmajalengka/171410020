
<?php
include 'connection.php';
$id = $_GET['Id_gaji'];
$sql = "DELETE FROM gaji WHERE Id_gaji='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data gaji dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='input_gaji.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="input_gaji.php";
	</script>
	<?php
}
?>