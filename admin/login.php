<?php
session_start(); 
include('config/config.php');
if (isset($_POST['dangnhap'])) {
	# code...
	$taikhoan=$_POST['username'];
	$matkhau=md5($_POST['password']);
	$sql="SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
	$row= mysqli_query($mysqli,$sql);
	$cont = mysqli_num_rows($row);
	if ($cont>0) {
		# code...
		$_SESSION['dangnhap']=$taikhoan;
		header("Location:index.php");
	}else{
		echo'<script>
		alert("Tài khoản hoặc mật khẩu không chính xác! Vui lòng nhập lại!!!");
		</script>';
		header("Location:login.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admin</title>
	<link rel="stylesheet" type="text/css" href="../admin/css/styleadmin.css">
</head>
<body>
	<div class="wrapper_login">
		<form action="" method="POST">
		<table border="1" class="table_login">
			<tr>
				<td colspan="2"><h3>Đăng nhập Admin</h3></td>
			</tr>
			<tr>
				<td>Tài khoản</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
			</tr>
		</table>
		</form>
	</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</html>