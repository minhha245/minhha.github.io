<?php
@session_start();
include('../../admin/config/config.php');
// them so luong
if (isset($_GET['cong'])) {
	# code...
	$id=$_GET['cong'];
	foreach ($_SESSION['cart'] as $cart_item) {
		if ($cart_item['id']!=$id) {
			$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
			$_SESSION['cart'] = $product;
		}else
		{
			$tangsoluong=$cart_item['soluong']+1;
			if ($cart_item['soluong']<=9) {
				# code...
				
				$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
			}
			else{
				$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
			}
			$_SESSION['cart'] = $product;
		}
	}
	header('Location:../../index.php?quanly=giohang');	
}
//tru so luong
if (isset($_GET['tru'])) {
	# code...
	$id=$_GET['tru'];
	foreach ($_SESSION['cart'] as $cart_item) {
		if ($cart_item['id']!=$id) {
			$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
			$_SESSION['cart'] = $product;
		}else
		{
			$tangsoluong=$cart_item['soluong']-1;
			if ($cart_item['soluong']>1) {
				# code...
				$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
			}
			else{
				$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
			}
			$_SESSION['cart'] = $product;
		}
	}
	header('Location:../../index.php?quanly=giohang');	
}
//xoa sanpham
if (isset($_SESSION['cart'])&&isset($_GET['xoa'])) {
	$id=$_GET['xoa'];
	foreach($_SESSION['cart'] as $cart_item) {
		if ($cart_item['id']!=$id) {
			# code...
			$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
		}
		$_SESSION['cart'] = $product;
		header('Location:../../index.php?quanly=giohang');	
	}
}
//xoa tatca sp
if (isset($_GET['xoatatca'])&&$_GET['xoatatca']==1) {
	# code...
	unset($_SESSION['cart']);
	header('Location:../../index.php?quanly=giohang');
}
//them sanpham
if (isset($_POST['themgiohang'])) {
	// session_destroy();
	# code...
	$id=$_GET['idsanpham'];
	$soluong=1;
	$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	$row=mysqli_fetch_array($query);
	if ($row) {

		# code...
		$new_product = array(array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'giasp'=>$row['giasp'],'hinhanh'=>$row['hinhanh'],'masp'=>$row['masp']));
		//kiemtra sesion tontai
		if (isset($_SESSION['cart'])) {

			# code...
			$find=false;
			foreach ($_SESSION['cart'] as $cart_item) {
				# code...
				//neu du lieu trung
				if ($cart_item['id']==$id)
				{
					$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
					$find=true;
				 }
				 else{
				 	//neu dulieu ko trung
				 	$product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
				 }
				}

				 if ($find == false) {
				 	//lienket dulieu new_product với product 
				 	# code...
				 	$_SESSION['cart']=array_merge($product,$new_product);
				 }
				 else{
				 	$_SESSION['cart']=$product;
				 }
			}

		else{
			$_SESSION['cart']=$new_product;
		}
		}
		header('Location:../../index.php?quanly=giohang');
		 // print_r($_SESSION['cart']);
	}
?>