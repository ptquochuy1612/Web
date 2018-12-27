<!DOCTYPE html>
<html>
<head>
	<title>Danh sach san pham theo loai</title>
</head>
<body>
<?php
	if(isset($_POST["Loai"]))
	{

		$rowsPerPage = 10;
		$curPage =  1;
		if(isset($_GET['page']))
			$curPage = $_GET['page'];
		$offset = ($curPage - 1) * $rowsPerPage;
		
		include_once('DataProvider.php');
		$l = $_POST["Loai"];
		$sql = "select * from SanPham where LoaiSP = '". $l ."' LIMIT $offset, $rowsPerPage";

?>
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
  	$list = DataProvider::execQuery($sql);
	while($row = mysqli_fetch_array($list))
	{ 
	?>
  <tr>
    <td><?php echo $row["MaSP"]; ?></td>
    <td><?php echo $row["TenSP"]; ?></td>
    <td><?php echo $row["NhaSanXuatID"]; ?></td>
    <td><?php echo $row["XuatXu"]; ?></td>
    <td><?php echo $row["MoTa"]; ?></td>
    <td><?php echo $row["NgayTao"]; ?></td>
    <td><?php echo $row["SoLuong"]; ?></td>
    <td><?php echo $row["HinhAnh"]; ?></td>
    <td><?php echo $row["Gia"]; ?></td>
    <td><?php echo $row["LuotXem"]; ?></td>
    <td><?php echo $row["TinhTrang"]; ?></td>
  </tr>
  <?php
		}
		
		$sql  = "select count(*) from sach";
		$result = DataProvider::execQuery($sql);
		$row = mysqli_fetch_array($result);
		$number_of_rows = $row[0];
		$number_of_pages = ceil($number_of_rows/$rowsPerPage);
 	?>
  <tr>
    <td colspan="12" align="center">
    <?php if($curPage > 1) { ?>
    <div>
      <a href="1.3.1.php?page=1">Đầu</a> <a href="1.3.1.php?page=<?php echo $curPage-1; ?>&Loai=<?php echo $l; ?>">Trước</a>
    <?php
		for($page = 1;$page <=  $number_of_pages;$page++)
		{
			if($page == $curPage)
				echo "<strong>".$page."</strong> ";
			else echo "<a href='1.3.1.php?page=".$page."'>".$page."</a> &Loai=<?php echo $l; ?>";
		}
		
		if($curPage < $number_of_pages) {
	 ?> 
    <a href="1.3.1.php?page=<?php echo $curPage+1; ?>">Sau</a> <a href="1.3.1.php?page=<?php echo $number_of_pages; ?>&Loai=<?php echo $l; ?>">Cuối</a></p>
    <?php
     }
    }
    ?>
    </div>
    </td>
  </tr>
</table>
<?php
  }
?>
</body>
</html>