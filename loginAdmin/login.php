<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if($_POST['submit']) {
	include_once("connection.php");
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);

	$sql = "SELECT id, username, password FROM loginrelease2 WHERE username = '$username' AND activated = '1' LIMIT 1";
	$query = mysqli_query($dbCon, $sql);

	if($query){
		$row = mysqli_fetch_row($query);
		$userId = $row[0];
		$dbUsername = $row[1];
		$dbPassword = $row[2];
	}

	if($username = $dbUsername && $password == $dbPassword) {
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userId;
		header('Location: user.php');

	} else {
		echo "Indcorrect username or password.";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>PHP/mySQL Login</h1>

<form method="post" action="login.php">
	<input type="text" placeholder="Username" name="username" /><br />
	<input type="password" placeholder="Password" name="password" /><br />
	<input type="submit" name="submit" value="Log In" />

</form>

</body>
</html>
