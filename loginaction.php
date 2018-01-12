<?php
session_start();
include("connection.php");

/*if (isset($_SESSION['userSession'])!="") {
	header("Location: index.php");
	exit;
}*/

if (isset($_POST['btn-login'])) {
	
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	
	$username = $conn->real_escape_string($username);
	$password = $conn->real_escape_string($password);
	
	$query = $conn->query("SELECT username,password FROM login WHERE username='$username'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; // if email/password are correct returns must be 1 row
	echo $count;
	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['username'];
		header("Location: index.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$conn->close();
}
?>