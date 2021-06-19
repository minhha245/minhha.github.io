<?php
$sql_sua_nhomsp = "SELECT * FROM tbl_nhomsp  WHERE id_nhomsp ='$_GET[idnhomsp]' LIMIT 1 ";
$query_sua_nhomsp = mysqli_query($mysqli,$sql_sua_nhomsp);
  ?>
  <p>Sửa nhóm sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse; ">
  <form method="POST" action="modules/quanlynhomsp/xuly.php?idnhomsp=<?php echo $_GET['idnhomsp']?>">
    <?php
    while ($dong = mysqli_fetch_array($query_sua_nhomsp)) {
        
        ?>
  <tr>
  	<td>Nhóm sản phẩm</td>
  	<td><input type="text" value="<?php echo $dong['nhomsp'] ?>" name="nhomsp" width="100%"></td>
  </tr>
   <tr>
  	<td>Thứ tự</td>
  		<td><input type="text"  value="<?php echo $dong['thutu']?>" name="thutu" width="100%"></td>
  </tr>
  <tr>
    
   <td colspan="2"><input type="submit" name ="suanhomsp" value="Sửa nhóm sản phẩm"></td>
  </tr>
  <?php
}
    ?>
  </form>
</table>