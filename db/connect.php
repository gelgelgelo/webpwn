<?php
$servername = "db";
$username = "root";
$password = "root";
$dbname = "webserverdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) { 
	die(mysqli_connect_error());
}
?>
