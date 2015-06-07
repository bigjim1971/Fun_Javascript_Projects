<!DOCTYPE html>
<html>
<head>

<style>
body{}
div {}
</style>

</head>

<body>

<?php
if (isset($_POST["user"]) && isset($_POST["pass"])) {

	$username = $_POST["user"]; // User Name
	$password = $_POST["pass"]; // Password

	if (    ($username == "markey123456789@gmail.com" && $password == "ebel1")
		 || ($username == "thomasjebel@gmail.com" && $password == "ebel2")
		) {
		
			echo("<div>Hi</div>");
		} else {
			echo("<div>Sorry You Are Not allowed IN</div>");
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
