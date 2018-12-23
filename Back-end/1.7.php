<!DOCTYPE html>
<html>
<head>
	<title>Dang ky</title>
</head>
<body>
<?php
	include_once('DataProvider.php');
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$sdt = "";
	$dc = "";
	$email = "";
	$admin = 0;
	if(isset($_POST["sdt"]))
		$sdt = $_POST["sdt"];	
	if(isset($_POST["dc"]))
		$dc = $_POST["dc"];
	if(isset($_POST["email"]))
		$email = $_POST["email"];
	if(isset($_POST["admin"]))
		$admin = $_POST["admin"];

	$sql = "exec proc usp_REG '" . $user . "' , '" . $pass . "' ,'" . $sdt . "' ,'" . $dc . "' ,'" . $email . "' ," . $admin;
	$res = DataProvider::execQuery($sql);

	if($res = 0)
		echo "<script type='text/javascript'>alert('Ten dang nhap da co nguoi dung');</script>";
	else
		echo "<script type='text/javascript'>alert('Dang ky thanh cong');</script>";

?>
</body>
</html>