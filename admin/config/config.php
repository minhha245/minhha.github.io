<?php
 $mysqli = new mysqli("localhost","root","","Web_laptop");
 if ($mysqli->connect_errno) {
 	# code...
 	echo "fail to connect to MySQL" . $mysqli->connect_error;
 	exit();
 }
 ?>