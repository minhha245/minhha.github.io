<?php
$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham ASC";
$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
  ?>
<p>Liệt kê sản phẩm</p>
<table border="2" width="90%" style="border-collapse: collapse; ">
  
  <tr>
  	<th>ID</th>
  	<th>Tên sản phẩm</th>
    <th>Mã SP</th>
    <th>Gía SP</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Hình ảnh</th>
    <th>Tóm tắt</th>
    <th>Nội dung</th>
    <th>Tình trạng</th>
    <th>Quản lý</th>


  </tr>
  <?php
$i = 0;
while ($row = mysqli_fetch_array($query_lietke_sp)) {
$i++;
    ?>
   <tr>
   	<td><?php echo $i  ?></td>
  	<td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td><?php if ($row['tinhtrang']==1) {
      echo 'Kích hoạt ';
         } 
         else{
          echo 'Ẩn';
         }
         ?></td>
  	<td>
  		<a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
  	</td>	
  </tr>
  <?php
}
    ?>
 
</table>