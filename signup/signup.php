<?php
require_once '../db/connect.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$password')";
	$result = mysqli_query($conn, $sql);

	if (!empty($username) && !empty($password)) {
		if ($result) {
			header("Location: ../login/login.html");
			exit();
		}
		else {
			header("Location: signup.html?error=ud");
			exit();
		}
	}
	else {
		header("Location: signup.html?error=empty");
		exit();
	}
}
?>
