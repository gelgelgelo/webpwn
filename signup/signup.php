<?php
require_once '../db/connect.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!empty($username) && !empty($password)) {

		$query_users = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

		if (mysqli_num_rows($query_users)) {
			header("Location: signup.html?error=duplicate");
			exit();
		}

		$sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$password')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			header("Location: getinfo/getinfo.html");
			exit();
		}
		else {
			header("Location: signup.html?error=unknown");
			exit();
		}
	}
	else {
		header("Location: signup.html?error=empty");
		exit();
	}
}
?>
