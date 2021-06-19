<?php
if (isset($_POST['dangky'])) {
	$tenkhachhang=$_POST['hovaten'];
	$email=$_POST['email'];
	$dienthoai=$_POST['dienthoai'];
	$matkhau=md5($_POST['matkhau']);
	$diachi=$_POST['diachi'];
	$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
	if ($sql_dangky){
		echo '<p style="color:green">Bạn đã đăng kí thành công!  <a href="index.php?quanly=giohang">Quay lại giỏ hàng</a></p>';
		$_SESSION['dangky'] = $tenkhachhang;
		$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);

		//header('Location:index.php?quanly=giohang');	
	}		
}
?>
<div class="dk">
<P style="color: red; font-size: 18px;">Đăng kí thành viên</P>
<form action="" method="POST">
<table class="dangky" border="1" width="50%" style="border-collapse: collapse;">
	<tr>
		<td>Họ và tên</td>
		<td><input type="text" size="90%" name="hovaten"></td>
	</tr>
	<tr>	
		<td>Email</td>
		<td><input type="text" size="90%" name="email"></td>
	</tr>
	<tr>		
		<td>Số điện thoại</td>
		<td><input type="text" size="90%" name="dienthoai"></td>
	</tr>
	<tr>	
		<td>Địa chỉ</td>
		<td><input type="text" size="90%"  name="diachi"></td>
	</tr>
	<tr>	
		<td>Mật khẩu</td>
		<td><input type="password" size="90%"  name="matkhau"></td>
	</tr>
	<tr>	
		<td colspan="2"><input style="background:#098FC7; color:#EFEFFC ;" type="submit" name="dangky" value="Đăng kí">
		<a class="dn" href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></td>
	</tr>
</table>
</form>
</div>