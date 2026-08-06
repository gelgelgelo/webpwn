<?php
require_once '../../db/connect.php';

if (isset($_POST['submit'])) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];

	if (!empty($first_name) && !empty($last_name) && !empty($email)) {

		$sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$password')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			header("Location: ../login/login.html");
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
