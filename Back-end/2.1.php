<!DOCTYPE html>
<html>
<head>
	<title>Cap nhat thong tin nguoi dung</title>
</head>
<body>
<?php
	include_once('DataProvider.php');
	$id = $_POST["ID"];
	$sql = "select  * from NguoiDung where ID = " . $id;
	$res = DataProvider::execQuery($sql);
	$sdt = $res["SoDienThoai"]
	$dc = $res["DiaChi"]
	$email = $res["Email"]
	$admin = $res["Quyen"]
	if(isset($_POST["sdt"]))
		$sdt = $_POST["sdt"];	
	if(isset($_POST["dc"]))
		$dc = $_POST["dc"];
	if(isset($_POST["email"]))
		$email = $_POST["email"];
	if(isset($_POST["admin"]))
		$admin = $_POST["admin"];
	$sql = "update table NguoiDung set SoDienThoai = '" . $sdt . "', DiaChi =  '" . $dc . "', Email =  '" . $Email . "',Quyen =  " . $admin . " where ID = " . $id;
	$res = DataProvider::execQuery($sql);	
?>
</body>
</html>