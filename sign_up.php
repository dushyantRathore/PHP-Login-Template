<?php

require("connect.php");

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['first']) && isset($_POST['second']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_hash = md5($password);
	$first = $_POST['first'];
	$second = $_POST['second'];

	if(!empty($email) && !empty($password) && !empty($first) && !empty($second))
	{
		$sql = "INSERT INTO details VALUES (NULL, '$email', '$password_hash', '$first', '$second')";
		$query_run = mysql_query($sql);
		if($query_run)
		{
			echo "<br>You have registered successfully";
		}
	}
	else
	{
		echo "<br>Empty Data item not allowed";
	}
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="sign_up.css">

<body>
	<h1 align="center"><u>Enter your Credentials</u></h1>
	<div class="container">
		<form role="form" action="sign_up.php" method="post">
			<div class="form-group">
				<label for="usr">Email</label>
				<input type="email" name="email" class="form-control" placeholder="Enter your email">
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" class="form-control" id="pwd" name = "password" placeholder="Enter your password">
			</div>
			<div class="form-group">
				<label for ="usr">First Name</label>
				<input type="text" id = "usr" class="form-control" placeholder="Enter Your First Name" name = "first">
			</div>
			<div class="form-group">
				<label for ="usr">Last Name</label>
				<input type="text" id = "usr" class="form-control" placeholder="Enter Your Last Name" name="second">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</body>
	</html>