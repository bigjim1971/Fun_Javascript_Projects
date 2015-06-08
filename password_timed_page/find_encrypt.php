
<?php 
session_start();
$r = ""; //user name
$q = "";  //password
$q = strtolower($q);
$r = strtolower($r);
echo $q . "        = ";
$q = md5($q);
echo $q;
echo " " . $r . "        = ";
$r = md5($r);
echo $r;
?> 
