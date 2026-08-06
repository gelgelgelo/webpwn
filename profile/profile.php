<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("Location: ../login/login.html");
	exit();
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Profile | Webpwn</title>
</head>

<body>

	<form action="logout.php" method="POST">
		<button type="submit">Logout</button>
	</form>

</body>

</html>
