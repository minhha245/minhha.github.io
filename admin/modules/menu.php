<?php
if (isset($_GET['dangxuat'])&&$_GET['dangxuat']==1) {
	# code...
	unset($_SESSION['dangnhap']);
	header("Location:login.php");
} 
?>
<div class="menu">
<ul class="admin_list">
	<li><a href="index.php">Trang chủ</a></li>
	<li><a href="index.php?action=quanlynhomsanpham&query=them">Quản lý nhóm sản phẩm</a></li>
	<li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
	<li><a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a></li>
	<!-- <li><a href="index.php?action=quanlybaiviet&query=them">Quản lý bài viết</a></li>
	<li><a href="index.php?action=quanlydanhmucbaiviet&query=them">Quản lý danh mục bài viết</a></li> -->
	<li><a href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a></li>
	<li><a href="index.php?dangxuat=1">Đăng xuất(<?php if(isset($_SESSION['dangnhap'])){echo $_SESSION['dangnhap']; } ?>)</a></li>
</ul>
</div>
