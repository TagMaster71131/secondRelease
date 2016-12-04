<?php 

$dbCon = mysqli_connect("localhost", "root", "", "relese2login");
// MySqli injection defense.
$username = mysqli_real_escape_string($dbCon, $_POST['username']);
$password = mysqli_real_escape_string($dbCon, $_POST['password']);
$sql_command = "select * from users where username = '" . $username; $sql_command .= "' AND password = '" . $password . "'";

if(mysqli_connect_errno()){
	echo "Failed to connect: " . mysqli_connect_error();
}
?>