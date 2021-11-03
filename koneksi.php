<?php

$host = "localhost";
$username = "root";
$password = "";
$databasename = "akademik";
$connect = mysqli_connect($host, $username, $password, $databasename);
if (!$con){
	echo "Error: " . mysql_connect_error();
	exit();
}