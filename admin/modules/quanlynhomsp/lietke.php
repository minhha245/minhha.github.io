<?php
$sql_lietke_nhomsp = "SELECT * FROM tbl_nhomsp ORDER BY thutu ASC";
$query_lietke_nhomsp = mysqli_query($mysqli,$sql_lietke_nhomsp);
  ?>
<p>Liệt kê  nhóm sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse; ">
  
  <tr>
  	<th>ID</th>
  	<th>Nhóm sản phẩm</th>
<th>Quản lý</th>
  </tr>
  <?php
$i = 1;
while ($row = mysqli_fetch_array($query_lietke_nhomsp)) {
$i++;
    ?>
   <tr>
   	<td><?php echo $i  ?></td>
  	<td><?php echo $row['nhomsp'] ?></td>
  	<td>
  		<a href="modules/quanlynhomsp/xuly.php?idnhomsp=<?php echo $row['id_nhomsp'] ?>">Xóa</a> | <a href="?action=quanlynhomsanpham&query=sua&idnhomsp=<?php echo $row['id_nhomsp'] ?>">Sửa</a>
  	</td>	
  </tr>
  <?php
}
    ?>
 
</table>