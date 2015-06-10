<?php

$con = new mysqli("localhost", "root", "", "SisBanca", 3306);

if ($con->connect_error) 
{
	die("Connection failed: ". $conn->connect_error);
}
else
{
	echo "Connection successfully";
}


?>
