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
    <td>Mã</td>
    <td>Tên</td>
    <td>Loại</td>
    <td>Nhà sản xuất</td>
    <td>Xuất xứ</td>
    <td>Mô tả</td>
    <td>Ngày tạo</td>
    <td>Số lượng</td>
    <td>Hình ảnh</td>
    <td>Giá</td>
    <td>Lượt xem</td>
    <td>Tình trạng</td>
  </tr>
  <?php
  		$sql = "select top 10 * from SanPham inner join NhaSanXuat on NhaSanXuat.ID = SanPham.NhaSanXuatID order by NgayTao DESC"
		/* So luong ban: order by SoLuong DESC, xem nhieu nhat: order by LuotXem DESC */
		
  		$list = DataProvider::execQuery($sql);
		while($row = mysqli_fetch_array($list))
		{
  ?>
  <tr>
    <td><?php echo $row["MaSP"]; ?></td>
    <td><?php echo $row["TenSP"]; ?></td>
    <td><?php echo $row["LoaiSP"]; ?></td>
    <td><?php echo $row["Ten"]; ?></td>
    <td><?php echo $row["XuatXu"]; ?></td>
    <td><?php echo $row["MoTa"]; ?></td>
    <td><?php echo $row["NgayTao"]; ?></td>
    <td><?php echo $row["SoLuong"]; ?></td>
    <td><?php echo $row["HinhAnh"]; ?></td>
    <td><?php echo $row["Gia"]; ?></td>
    <td><?php echo $row["LuotXem"]; ?></td>
    <td><?php ecoh $row["TinhTrang"]; ?></td>
  </tr>
  <?php
		}
  ?>
</table>
</body>
</html>