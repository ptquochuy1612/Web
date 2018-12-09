<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	include_once('DataProvider.php')
?>
<!-- 10 sản phẩm mới nhất -->

<body>
<table width="1200" border="1" align="center" cellpadding="5">
  <tr>
    <td>Hình ảnh</td>
    <td>Giá bán</td>
    <td>Số lượt xem</td>
    <td>Số lượng bán</td>
    <td>Mô tả</td>
    <td>Xuất xứ</td>
    <td>Loại</td>
    <td>Nhà sản xuất</td>
  </tr>
  <?php
  		$sql = "select * from SanPham as SP INNER JOIN NhaSanXuat as NSX on NSX.ID = SP.NhaSanXuatID INNER JOIN DanhMuc as DM on DM.ID = SP.LoaiSP"
		
  		$list = DataProvider::execQuery($sql);
		while($row = mysqli_fetch_array($list))
		{
  ?>
  <tr>
    <td><?php echo $row["HinhAnh"]; ?></td>
    <td><?php echo number_format($row["Gia"]); ?></td>
    <td><?php echo $row["LuotXem"]; ?></td>
    <td><?php echo $row["SoLuong"]; ?></td>
    <td><?php echo $row["MoTa"]; ?></td>
    <td><?php echo $row["XuatXu"]; ?></td>
    <td><?php echo $row["DM.Ten"]; ?></td>
    <td><?php echo $row["NSX.Ten"]; ?></td>
  </tr>
  <?php
		}
		// Chờ làm xong linked them
		/*
			$sql = "select TOP 5 * from SanPham where Loai = " .$row["Loai"];
		
  		$list = DataProvider::execQuery($sql);
		while($row = mysqli_fetch_array($list))
		{
		*/
  ?>
  
</table>
</body>
</html>