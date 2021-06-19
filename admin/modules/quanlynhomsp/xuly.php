<?php
include('../../config/config.php');
$tennhomsp = $_POST['nhomsp'];
$thutu=$_POST['thutu'];
if (isset($_POST['themnhomsp'])) {
	//them
	$sql_them = "INSERT INTO tbl_nhomsp(nhomsp,thutu) VALUE('".$tennhomsp."','".$thutu."')";
	mysqli_query($mysqli,$sql_them);
	header('location:../../index.php?action=quanlynhomsanpham&query=them');
}  
elseif (isset($_POST['suanhomsp'])) {
	//sua
	$sql_update = "UPDATE tbl_nhomsp SET nhomsp='".$tennhomsp."',thutu='".$thutu."' WHERE id_nhomsp='$_GET[idnhomsp]'";
	mysqli_query($mysqli,$sql_update);
	header('location:../../index.php?action=quanlynhomsanpham&query=them'); 
}
else{
	//xoa
	$id=$_GET['idnhomsp'];
$sql_xoa = "DELETE FROM tbl_nhomsp WHERE id_nhomsp='".$id."' ";
mysqli_query($mysqli,$sql_xoa);
header('location:../../index.php?action=quanlynhomsanpham&query=them');
}
  ?>