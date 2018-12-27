<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh sach cac nha san xuat</title>
</head>

<body>
<?php
	include_once('DataProvider.php')
?>
<table width="200" border="1" cellpadding="5">
  <tr>
    <td><p>Nhà sản xuất</p></td>
  </tr>
  <?php
  		$sql = "select * from NhaSanXuat";
		
  		$list = DataProvider::execQuery($sql);
		while($row = mysqli_fetch_array($list))
		{
  ?>
  <tr>
    <td><?php echo $row["Ten"]; ?></td>
  </tr>
  <?php
		}
  ?>
</table>
</body>
</html>