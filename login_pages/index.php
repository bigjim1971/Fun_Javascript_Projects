<?php
	session_start();
	sleep(1);
if (isset($_POST["logout"]) && ($_POST["logout"] == "logout")) {
	$_POST["user"] = "";
	$_POST["pass"] = "";
	$_SESSION = "";
}

if (isset($_POST["user"]) && isset($_POST["pass"])) {
	$username = $_POST["user"]; // User Name
	$password = $_POST["pass"]; // Password
	$username = strtolower($username);
	$password = strtolower($password);
	$username = md5($username);
	$password = md5($password);
	
	if (    ($username == "25699f04d3a65f923ad0f2fbbfa1cb39" && $password == "06ba39c3635ecc77bd10918c0622df11")
	     || ($username == "2ac15c4f5d19aa101756f1890e3b30e0" && $password == "7703646921faf4d03459d10c6ac82a3a")
	) {
		$_SESSION['password'] = "allowed";
	} else { $_SESSION['password'] = ""; }
} 
?>



<!DOCTYPE html>
<html>
<head>

<style>
body{background-color: cyan; width: 100%; height: 100%;}
div {margin: 200px auto ; font-size: 450%; color: black; width: 200px; height: 150px;}
</style>

</head>

<body>

<?php



	if (isset($_SESSION['password']) && $_SESSION['password'] == "allowed") {
		echo('
		<form action="index.php" method="post">
		<input type="submit" value="logout" name="logout">
		</form>

		<a href="page1.php">Page 1</a>
		</br></br>
		<a href="page2.php">Page 2</a>
		</br></br>
		<a href="page3.php">Page 3</a>
		</br></br>
		');
	} else {
		$_POST["user"] = "";
		$_POST["pass"] = "";
		echo('
		<form action="index.php" method="post">
		Username:</br> 
		<input type="text" name="user">
		</br>
		Password:</br> 
		<input type="text" name="pass">
		</br>
		</br>
		<input type="submit" value="Log In">
		</form>
		</br></br>
		');
	}	


?>

</body>
</html>
