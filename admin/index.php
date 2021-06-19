<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
	# code...
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../admin/css/styleadmin.css">
</head>
<body>

<h3 class="title_admin">Welcome to Admin</h3>
<div class="wrapper_admin">
<?php
include("config/config.php");
include("modules/header.php");
include("modules/menu.php");
include("modules/main.php");
include("modules/footer.php");
	?>		
</div>
</body>
</html>