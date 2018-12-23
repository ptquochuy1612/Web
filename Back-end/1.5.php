<!DOCTYPE html>
<html>
<head>
	<title>Tim kiem</title>
</head>
<body>
<?php
    include_once('DataProvider.php')
    $link = "";
    $sql = "select * from SanPham where ";
	if(isset($_POST["TenSP"]))
	{
		$s_TenSP = $_POST["TenSP"];
		$sql .= "TenSP = '" . $s_TenSP ."' and ";
		$link .= "&TenSP=" . $s_TenSP;
	}
	if(isset($_POST["LoaiSP"]))
	{
		$s_LoaiSP = $_POST["LoaiSP"];
		$sql .= "LoaiSP = '" . $s_LoaiSP ."' and ";
		$link .= "&LoaiSP=" . $s_LoaiSP;
	}
	if(isset($_POST["NhaSanXuatID"]))
	{
		$s_NhaSanXuatID = $_POST["NhaSanXuatID"];
		$sql .= "NhaSanXuatID = '" . $s_NhaSanXuatID ."' and ";
		$link .= "&NhaSanXuatID=" . $s_NhaSanXuatID;
	}
	if(isset($_POST["XuatXu"]))
	{
		$s_XuatXu = $_POST["XuatXu"];
		$sql .= "XuatXu = '" . $s_XuatXu ."' and ";
		$link .= "&XuatXu=" . $s_XuatXu;
	}
	if(isset($_POST["NgayTao"]))
	{
		$s_NgayTao = $_POST["NgayTao"];
		$sql .= "NgayTao = '" . $s_NgayTao ."' and ";
		$link .= "&NgayTao=" . $s_NgayTao;
	}
	if(isset($_POST["SoLuong"]))
	{
		$s_SoLuong = $_POST["SoLuong"];
		$sql .= "SoLuong = '" . $s_SoLuong ."' and ";
		$link .= "&SoLuong=" . $s_SoLuong;
	}
	if(isset($_POST["Gia"]))
	{
		$s_Gia = $_POST["Gia"];
		$sql .= "Gia = '" . $s_Gia ."' and ";
		$link .= "&Gia=" . $s_Gia;
	}
	if(isset($_POST["TinhTrang"]))
	{
		$s_TinhTrang = $_POST["TinhTrang"];
		$sql .= "TinhTrang = '" . $s_TinhTrang ."' and ";
		$link .= "&TinhTrang=" . $s_TinhTrang;
	}

	$rowsPerPage = 10;
	$curPage =  1;
	if(isset($_GET['page']))
		$curPage = $_GET['page'];
	$offset = ($curPage - 1) * $rowsPerPage;
	$sql .= "1=1 LIMIT $offset, $rowsPerPage"
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
    <td><?php echo $row["Ten"]; ?></td>
    <td><?php echo $row["Ten"]; ?></td>
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
 	?>
 	<tr>
    <td colspan="12" align="center">
    <?php if($curPage > 1) 
    { 
    ?>
    <div>
    	<a href="1.5.php?page=1<?php echo $link;?>">Đầu</a> <a href="1.5.php?page=<?php echo ($curPage-1) . $link; ?>">Trước</a>
	<?php
		for($page = 1;$page <=  $number_of_pages;$page++)
		{
			if($page == $curPage)
				echo "<strong>".$page."</strong> ";
			else echo "<a href='1.5.php?page='".$page. $link."''>".$page."</a> ?>";
		}
		
		if($curPage < $number_of_pages) 
		{
	?> 
	<a href="1.5.php?page=<?php echo ($curPage+1) . $link; ?>">Sau</a> <a href="1.5.php?page=<?php echo $number_of_pages . $link ?>">Cuối</a>
	<?php
		}
	}
	?>
	</div>
	</td>
  	</tr>
</body>
</html>