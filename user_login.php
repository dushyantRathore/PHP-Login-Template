<?php

require("connect.php");
require("config.php");

if(isset($_POST['email']) && isset($_POST['password']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$password_hash = md5($password);

	if(!empty($email) && !empty($password))
	{
		$sql = "SELECT id,firstname FROM details WHERE username = '$email' AND password = '$password_hash'";
		if($query_run = mysql_query($sql))
		{
			$query_num_rows = mysql_num_rows($query_run);

			if($query_num_rows == 0)
			{
				echo "<br>Invalid Username/Password Combination";
			}
			else if($query_num_rows == 1)
			{
				$user_name = mysql_result($query_run, 0,'firstname');
				$_SESSION['$user_name'] = $user_name;
				header('Location: user_data.php');
			}
		}
	}
	else
	{
		echo "<br>You must supply a username and password";
	}
}

?>