<!DOCTYPE html>
<html>
<head>

<style>
body{ width: 100%; height: 100%; background-color: green;}
div { width: 150px; height: 50px; background-color: green; color: black;}
</style>

</head>

<body>
<?php 
$user_name1 = "markey123456789@gmail.com";
$user_name2 = "thomasjebel@gmail.com";
$password1 = "ebel1";
$password2 = "ebel2";
$user_encryp1 = md5($user_name1);
$user_encryp2 = md5($user_name2);
$pass_encryp1 = md5($password1);
$pass_encryp2 = md5($password2);
?>
<div> <?php echo($user_name1); ?> </div>
<div> <?php echo($user_encryp1); ?> </div>
<div> <?php echo($user_name2); ?> </div>
<div> <?php echo($user_encryp2); ?> </div>
<div> <?php echo($password1); ?> </div>
<div> <?php echo($pass_encryp1); ?> </div>
<div> <?php echo($password2); ?> </div>
<div> <?php echo($pass_encryp2); ?> </div>

</body>
</html>
