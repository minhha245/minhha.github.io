<?php
include('../../config/config.php');
$tenloaisp = $_POST['tendanhmuc'];
$thutu=$_POST['thutu'];
$nhomsp=$_POST['nhomsp'];
if (isset($_POST['themdanhmuc'])) {
	//them
	$sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu,id_nhomsp) VALUE('".$tenloaisp."','".$thutu."','".$nhomsp."')";
	mysqli_query($mysqli,$sql_them);
	header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
}  
elseif (isset($_POST['suadanhmuc'])) {
	//sua
	$sql_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."',thutu='".$thutu."',id_nhomsp='".$nhomsp."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
	mysqli_query($mysqli,$sql_update);
	header('location:../../index.php?action=quanlydanhmucsanpham&query=them'); 
}
else{
	//xoa
	$id=$_GET['iddanhmuc'];
$sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."' ";
mysqli_query($mysqli,$sql_xoa);
header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
}
  ?>