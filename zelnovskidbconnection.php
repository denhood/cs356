<?php
$username = "root";
$password = "";
$host = "localhost";
$database = "zelnovski";
$connection = mysqli_connect($host,$username,$password,$database)
	or die("cannot connect to database.<br>");
if(!$connection){
	echo "Error: unable to connect";
	exit;
}
else
{
	echo "connection established";
}

?>