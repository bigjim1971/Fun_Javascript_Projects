<?php
	require_once('load.php');
	$loginObj->redirect()
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

<div>Hi this is page 2</div>

</body>
</html>
