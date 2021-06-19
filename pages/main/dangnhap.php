<?php
if (isset($_POST['dangnhap'])) {
	# code...
	$email=$_POST['email'];
	$matkhau=md5($_POST['matkhau']);
	$sql="SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
	$row= mysqli_query($mysqli,$sql);
	$cont = mysqli_num_rows($row);
	if ($cont>0) {
		$row_data = mysqli_fetch_array($row);
		$_SESSION['dangky']=$row_data['tenkhachhang'];
		$_SESSION['id_khachhang']=$row_data['id_dangky'];
		
		echo '<p style="color:green">Bạn đã đăng nhập thành công!  <a href="index.php?quanly=giohang">Quay lại giỏ hàng</a>|<a href="index.php">Trang chủ</a></p>';
		//header("Location:index.php?quanly=giohang");
	}else{
		echo'<p style="color:red">
		Tài khoản hoặc mật khẩu không chính xác! Vui lòng nhập lại!!!
		</p>';
	}
}
?>
<div class="login">
<form action="" method="POST">
		<table border="1" class="table_login">
			<tr>
				<td colspan="2"><h3>Đăng nhập khách hàng</h3></td>
			</tr>
			<tr>
				<td>Tài khoản</td>
				<td><input type="text" name="email" placeholder="Email..."></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" name="matkhau" placeholder="Mật khẩu..."></td>
			</tr>
			<tr>
				<td colspan="2"><input style="background:#098FC7; color:#EFEFFC ; margin-left: 32%;" type="submit" name="dangnhap" value="Đăng nhập"></td>
			</tr>
		</table>
		</form>
		</div>