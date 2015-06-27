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
if (isset($_POST["user"]) && isset($_POST["pass"])) {
	$username = $_POST["user"]; // User Name
	$password = $_POST["pass"]; // Password
	$username = md5($username);
	$password = md5($password);
	if (    ($username == "25699f04d3a65f923ad0f2fbbfa1cb39 " && $password == "06ba39c3635ecc77bd10918c0622df11 ")
	     || ($username == "2ac15c4f5d19aa101756f1890e3b30e0 " && $password == "7703646921faf4d03459d10c6ac82a3a ")
	) {
		echo("<div>Hi</div>");
	} else {
		echo("<div>Sorry You Are Not Allowed IN</div>");
	} 
} else {
echo('
<form action="passwordpage.php" method="post">
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
