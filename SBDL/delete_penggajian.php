
<?php
include 'connection.php';
$id = $_GET['id_gajian'];
$sql = "DELETE FROM penggajian WHERE id_gajian='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data penggajian dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='input_penggajian.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="input_penggajian.php";
	</script>
	<?php
}
?>