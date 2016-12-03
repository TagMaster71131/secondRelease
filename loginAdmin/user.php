<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if(isset($_SESSION['id'])) {
	$userId = $_SESSION['id'];
	$username = $_SESSION['username'];
} else {
	header('Location: login.php');
	die();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Secret User Page</title>
</head>
<body>

Welcome, <?php echo $username; ?>, You are logged in. Your user ID is <?php echo $userId; ?>.<br /><br />

<form action="logout.php">
	<input type="submit" value="Log out" />
</form>

</body>
</html>
