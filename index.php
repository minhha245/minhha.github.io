<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web bán Camera, máy tính và thiết bị</title>
	<link rel="stylesheet" type="text/css" href="css/style.CSS">
	<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/searchbar_khi_scroll.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <script src = "js/home.js" ></script> -->
</head>
<body>
	<div class="wrapper">
		<?php
		session_start();
		 //unset($_SESSION['dangky']);
		//include("admin/config/config.php");	
		// include("pages/searchbar_khi_scroll.php");
		include("pages/header.php");
		include("pages/menu.php");
		include("pages/main.php");
		include("pages/footer.php");
		?>		
	</div>
</body>
<script language= "javascript" src = "js/home.js" ></script>
</html> 
