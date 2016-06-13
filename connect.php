<?php

$localhost = 'localhost';
$user = 'root';
$password = '';

$conn = mysql_connect($localhost, $user, $password);

mysql_select_db(login);

if(!$conn)
{
	echo "Could not connect to the database";
}
else
{
	echo "Connected to the database successfully";
}

?>