<?php

require("connect.php");
require("config.php");
require("user_login.php");

$user_name = $_SESSION['$user_name'];

if(isset($_SESSION['$user_name']) && !empty($_SESSION['$user_name']))
{
	echo "<!DOCTYPE html>
	<html>
	<head>
		<title>Main Page</title>
	</head>
	<link rel='stylesheet' type='text/css' href='main_page.css'>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
	<body>
		<h1 align='center' style='color:white;'>HELLO</h1>
	</body>
	</html>
	";

	echo "<h1 align = 'center' style='color:white;font-size:200px;'>$user_name</h1>
	<br><button type='button' class='btn btn-primary btn-lg' style='position:relative; left:47%;'><a href='logout.php' style='color:white'>Log out</a></button>

	";
}

?>