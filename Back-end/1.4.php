<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
  if(isset($_POST["ID"]))
  {
    $int = (is_numeric($_POST["ID"]) ? (int)$_POST["ID"] : 0);
    include_once('DataProvider.php');
    $id = $int;
    $sql = "select * from SanPham where ID = ". $id;
    $row = DataProvider::execQuery($sql);
    $img = row["HinhAnh"];
    $cost = row["Gia"];
    $view = row["LuotXem"];
    $des = row["MoTa"];    
    $src = row["XuatXu"];
    $type = row["LoaiSP"];
    $name = row["Ten"];
    $sql = "select count(*) as Dem FROM ChiTietDatHang where MaSP = " . $id;
    $row = DataProvider::execQuery($sql);
    $count = row["Dem"];
    $nsxid = row["NhaSanXuatID"];

?>
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
  <tr>
    <img width="200px" height="200px" src="<?php echo $img ?>">
    <td><?php echo number_format($cost); ?></td>
    <td><?php echo $view; ?></td>
    <td><?php echo $count; ?></td>
    <td><?php echo $des; ?></td>
    <td><?php echo $src; ?></td>
    <td><?php echo $type; ?></td>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
    <td colspan="12">
     <div>
        <p>5 sản phẩm cùng loại</p>
        <?php
        $sql = "select TOP 5 * from SanPham where LoaiSP = " . $type;
    
        $list = DataProvider::execQuery($sql);
        while($row = mysqli_fetch_array($list))
       {
      ?>
       <a href="1.4.php?ID=<?php echo $row["ID"]; ?>"><?php echo $row["TenSP"]; ?></a> | 
       <?php
      }
       ?>
      </div>      
   </td>
  </tr>
  <tr>
    <td colspan="12">
     <div>
        <p>5 sản phẩm cùng nhà sản xuất </p>
        <?php
        $sql = "select TOP 5 * from SanPham where NhaSanXuatID = " . $nsxid;
    
        $list = DataProvider::execQuery($sql);
        while($row = mysqli_fetch_array($list))
       {
      ?>
       <a href="1.4.php?ID=<?php echo $row["ID"]; ?>"><?php echo $row["TenSP"]; ?></a> | 
       <?php
      }
       ?>
      </div>      
   </td>
  </tr>
</table>
<?php
  }
  else echo "Wrong pattern";
?>

</body>
</html>