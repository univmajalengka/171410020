<!DOCTYPE html>
<html>
<head>
	<title>Input User</title>
</head>
<body>
<form method="post" action="save_user.php">
<input type="text" name="id_user" placeholder="ID User">
<input type="password" name="password" placeholder="password">
<input type="text" name="username" placeholder="Username">
<input type="submit" name="simpan" value="simpan">	
</form>
<hr>
<?php 
// include 'view_rel_fak.php';
?>
<hr>
<?php 
include 'view_user.php'
 ?>
<a href="index.php">Home</a>
</body>
</html>