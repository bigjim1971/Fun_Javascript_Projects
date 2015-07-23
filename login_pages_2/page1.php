<?php
	require_once('load.php');
	$loginObj->logout();
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
	$loginObj->logoutButton();
?>

</br></br>

<form enctype="multipart/form-data" action="uploader.php" method="POST">
	<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
	Choose a file to upload: <input name="uploadfile" type="file" /></br>
	<input type="submit" value="Upload File" />
</form>
<div>Hi this is page 1</div>

</body>
</html>
