<?php
	session_start();
	
	
	if (isset($_SESSION['password']) && ($_SESSION['password'] == "allowed")) {} else {
		header( 'Location: http://localhost/sites/login_pages/index.php' ) ;
		//header( 'Location: http://localhost:8888/sites/login_pages/index.php' ) ;
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
<form action="index.php" method="post">
<input type="submit" value="logout" name="logout">
</form>

</br></br>

<form enctype="multipart/form-data" action="uploader.php" method="POST">
	<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
	Choose a file to upload: <input name="uploadfile" type="file" /></br>
	<input type="submit" value="Upload File" />
</form>
<div>Hi this is page 1</div>

</body>
</html>
