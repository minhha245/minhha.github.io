<div class="clear"></div>
<div class="main_admin">
	<?php 
	
if (isset($_GET['action']) && $_GET['query']) {
	# code...
	$tam=$_GET['action'];
	$query= $_GET['query'];
}
else{
	$tam='';
	$query='';
}
if ($tam=='quanlydanhmucsanpham' && $query=='them') {
	# code...
	include("modules/quanlydanhmucsp/them.php");
	include("modules/quanlydanhmucsp/lietke.php");
	
} 
elseif ($tam=='quanlydanhmucsanpham' && $query=='sua') {
	include("modules/quanlydanhmucsp/sua.php");
	
}
elseif ($tam=='quanlysanpham' && $query=='them') {
	include("modules/quanlysp/them.php");
	include("modules/quanlysp/lietke.php");
}
elseif ($tam=='quanlysanpham' && $query=='sua') {
	include("modules/quanlysp/sua.php");
	
}
elseif ($tam=='quanlynhomsanpham' && $query=='sua') {
	include("modules/quanlynhomsp/sua.php");
	
}
elseif ($tam=='quanlynhomsanpham' && $query=='them') {
	include("modules/quanlynhomsp/them.php");
	include("modules/quanlynhomsp/lietke.php");
}
elseif ($tam=='quanlydonhang' && $query=='lietke') {
	include("modules/quanlydonhang/lietke.php");
	
}
elseif ($tam=='donhang' && $query=='xemdonhang') {
	include("modules/quanlydonhang/xemdonhang.php");
	
}
else{
	include("modules/dashboard.php");
}
	?>

	
</div>