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
					<li><a href="laptop.php"><i class="fa fa-laptop"></i>&nbsp Laptop, Máy tính xách tay</a></li>
						<li><a href="#"><i class="fa fa-usb" style="font-size: smaller"></i>&nbsp Phụ kiện laptop, PC, khác</a></li>
						<li><a href="#"><i class="fa fa-desktop"></i>&nbsp PC Gaming, Streaming</a></li>
						<li><a href="#"><i class="fa fa-server"></i>&nbsp PC đồ họa, máy chủ</a></li>
						<li><a href="./PC_vanphong,mini_PC.html"><i class="fa fa-desktop"></i>&nbsp PC văn phòng, mini PC</a></li>
						<li><a href="#"><i class="fa fa-microchip"></i>&nbsp Linh kiện máy tính</a></li>
						<li><a href="#"><i class="fa fa-desktop"></i>&nbsp Màn hình máy tính</a></li>
						<li><a href="#"><i class="fa fa-microphone"></i>&nbsp Loa, tai nghe, mic, webcam</a></li>
						<li><a href="camera.php"><i class="fa fa-video-camera"></i>&nbsp Camera, TB an ninh</a></li>
						<li><a href="thietbi.php"><i class="fa fa-save"></i>&nbsp Thiết bị lưu trữ, USB, thẻ</a></li>
						<li><a href="thietbi.php"><i class="fa fa-wifi"></i>&nbsp Thiết bị mạng, phần mềm</a></li>				
			</ul>
		</li>
		<li><a href="index.php?quanly=tintuc"> Tin tức</a></li>
		<li><a href="index.php?quanly=lienhe"> Liên hệ </a></li>
		<li><a href="index.php?quanly=trogiup"> Trợ giúp</a></li>
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