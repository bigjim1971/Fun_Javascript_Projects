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

echo("<div>Hi</div>");

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
