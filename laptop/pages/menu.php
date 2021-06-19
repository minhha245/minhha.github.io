<?php
$sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
?>
<?php
if (isset($_GET['dangxuat'])&&$_GET['dangxuat']==1) {
	unset($_SESSION['dangky']);
}
?>
<div id="thanhmenu">
	<ul>
		<li><a href="index.php"> Trang chủ</a></li>
		<li><a href="#"> Danh mục sản phẩm </a>
			<ul class = "listdanhmuc">
					<?php
				while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
					?>
					<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>">&nbsp<?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
					<?php
				}
				?>							
			</ul>
		<li><a href="index.php?quanly=tintuc"> Tin tức</a></li>
		<li><a href="index.php?quanly=lienhe"> Liên hệ </a></li>
		<!-- <li><a href="index.php?quanly=trogiup"> Trợ giúp</a></li> -->
		<?php
if (isset($_SESSION['dangky'])) {
	# code...
		?>
		<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
	<?php
}else{
	?>
		<li><a href="index.php?quanly=dangky"></a></li>
		<?php
}
		?>
	</ul>
</div>