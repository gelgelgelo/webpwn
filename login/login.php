<?php
require_once '../db/connect.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
	$result = mysqli_query($conn, $sql);

	if ($result && mysqli_num_rows($result) > 0) {
		session_start();
		$_SESSION['username'] = $username;
		header("Location: ../profile/profile.php");	
		exit();
	}
	else {
		header("Location: login.html?error=invalid");	
		exit();
	}
}
?>
