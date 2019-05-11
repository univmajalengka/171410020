
<?php
include 'connection.php';
$id = $_GET['id_gol'];
$sql = "DELETE FROM golongan WHERE id_gol='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data jabatan dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='input_golongan.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="input_golongan.php";
	</script>
	<?php
}
?>