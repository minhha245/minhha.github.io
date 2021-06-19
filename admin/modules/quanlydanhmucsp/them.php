<p>Thêm danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse; ">
  <form method="POST" action="modules/quanlydanhmucsp/xuly.php" enctype="multipart/form-data">
  <tr>
  	<td>Tên danh mục</td>
  	<td><input type="text" name="tendanhmuc" width="100%"></td>
  </tr>
   <tr>
  	<td>Thứ tự</td>
  		<td><input type="text" name="thutu" width="100%"></td>
  </tr>
  <tr>
    <tr>
    <td>Nhóm sản phẩm</td>
      <td>
        <select name="nhomsp">
          <?php
            $sql_nhomsp="SELECT * FROM tbl_nhomsp ORDER BY id_nhomsp ASC";
            $query_nhomsp=mysqli_query($mysqli,$sql_nhomsp);
            while ($row_nhomsp = mysqli_fetch_array($query_nhomsp)) {
              # code...
               ?>
              <option value="<?php echo $row_nhomsp['id_nhomsp'] ?>"><?php echo $row_nhomsp['nhomsp'] ?></option>
             
             <?php 
            }

          ?>
          
        </select>

      </td>
  </tr>
   <td colspan="2"><input type="submit" name ="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
  </tr>
  </form>
</table>