<?php
$sql_product="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
 $query_product=mysqli_query($mysqli,$sql_product);
?>
<div class="top_product">TOP sản phẩm bán chạy  >></div>
<ul class="list_product">
<?php
		while ($row = mysqli_fetch_array($query_product)) {
 	# code...
?> 	
				<li>
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
					<img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>">
					
					<p>Mã SP:<?php echo $row['masp']?> </p>
					
					<P class="title_product"><?php echo $row['tensanpham']?></P>
					<p class="price_product">Giá: <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
					<p class="cate_product"><?php echo $row['tendanhmuc']?></p>
					</a>
				</li>
				<?php
			}
				?>
			</ul>

			