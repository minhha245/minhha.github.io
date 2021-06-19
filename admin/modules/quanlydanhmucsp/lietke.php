<?php
//$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc,tbl_nhomsp WHERE tbl_danhmuc.id_nhomsp = tbl_nhomsp.id_nhomsp";
$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
  ?>
<p>Liệt kê danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse; ">
  
  <tr>
  	<th>ID</th>
  	<th>Tên danh mục</th>
    <th>Nhóm sản phẩm</th>
<th>Quản lý</th>
  </tr>
  <?php
$i = 0;
while ($row = mysqli_fetch_array($query_lietke_danhmucsp)){
$i++;
    ?>
   <tr>
   	<td><?php echo $i  ?></td>
  	<td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['nhomsp'] ?></td>
    
  	<td>
  		<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
  	</td>	
  </tr>
  <?php
}
    ?>
 
</table>