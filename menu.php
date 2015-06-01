<?php

	session_start();
	$nowTime = time();
	$checkTime = intval($_SESSION['password']);
	if ($checkTime + 180 >= $nowTime && $checkTime <= $nowTime) {} else {
		header( 'Location: http://kiss-five/sites/All-JS-projects/games/index.php' ) ;
	} 
?>

<html>
<title>Games Menu</title>
<head>
	<style> 
		body {margin: 0; border: 0; padding: 0; background-color: #008800;}
		#container 	{margin: 0 auto; margin-top: 100px; border: 3px solid red;
					 width: 400px; height: 500px; border-radius: 7px;}
		#container div {margin: 0 auto; margin-top: 20px; width:350px; 
			height: 30px;}
		#container div a {font-weight: bold; font-size: 25px;}
	</style>
</head>
<body>
<div id="container">
	<div>
		<a href="http://kiss-five/sites/All-JS-projects/games/breakout_ver_1.1.04/index.php">Break Out ver 1.1.04</a>
	</div>
		<div>
		<a href="http://kiss-five/sites/All-JS-projects/games/breakout_ver_1.2.01/index.php">Break Out ver 1.2.01 canvas</a>
	</div>
	<div>
		<a href="http://kiss-five/sites/All-JS-projects/games/fatbird/index.php">Fat Bird</a>
	</div>
</div>
<body>
</html>
