
<?php
include 'connection.php';
$id = $_GET['id_pegawai'];
$sql = "DELETE FROM pegawai WHERE id_pegawai='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data pegawai dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='input_pegawai.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="input_pegawai.php";
	</script>
	<?php
}
?>