<div class="main">
	 <?php
	include("sidebar/sidebar.php");
	include("pages/searchbar_khi_scroll.php");
	?> 
	<div class="main_content">
		<?php
		if (isset($_GET['quanly'])) {
	# code...
			$tam=$_GET['quanly'];
		}
		else{
			$tam='';
		}
		if ($tam=='danhmucsanpham') {
	# code...
			include("main/danhmuc.php");
	 	}
	 	elseif($tam=='giohang') {
	# code..
			include("main/giohang.php");
		}
		elseif($tam=='tintuc') {
	# code..
			include("main/tintuc.php");
		} 
		elseif($tam=='lienhe') {
	# code..
			include("main/lienhe.php");
		}
		elseif($tam=='sanpham') {
	# code..
			include("main/sanpham.php");
		}
		elseif($tam=='dangky') {
	# code..
			include("main/dangky.php");
		}
		elseif($tam=='thanhtoan') {
	# code..
			include("main/thanhtoan.php");
		}
		elseif($tam=='dangnhap') {
	# code..
			include("main/dangnhap.php");
		}
		elseif($tam=='timkiem') {
	# code..
			include("main/timkiem.php");
		}
		else{
			include("main/index.php");
		}
		?>
	</div>
</div>
