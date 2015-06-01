<?php
session_start();
sleep(2);

if (isset($_POST["q"]) && isset($_POST["r"])) {
	$r=$_POST["r"]; // User Name
	$q=$_POST["q"]; // Password
	
} else {
	header( 'Location: http://localhost:8888/sites/password1/index.php' ) ;
}

$r = strtolower($r);
$q = strtolower($q);

if (strlen($r) > 46) {substr($r,0,46);}
if (strlen($q) > 46) {substr($q,0,46);}

$r = md5($r);
$q = md5($q);

if (	$q == "6281596bb698bfae10033309efc9e14b" 	&& $r == "2ac15c4f5d19aa101756f1890e3b30e0"
	|| 	$q == "99e25c597ac9ec7f7e3937d9d7e49164" 	&& $r == "7f2d455c75e9d01dd8d7c5cbf632f414"
	|| 	$q == "f3a174b0510db7fd9cf34f63fc6363ce" 	&& $r == "25699f04d3a65f923ad0f2fbbfa1cb39"
	||  $q == "c33bcafe59eb874ee116d923053ecf9e" 	&& $r == "2b5bb86bb7c41ff74ede48639c5e458f "
	||  $q == "cf5e3cd3bafe0a6dd4875fee509d7674" 	&& $r == "2be5bd139a655b955567d2cc908fef1f"
	||  $q == "938363552b813456ad8e136288043c91"	&& $r == "9067c61098dd039ec08000db2ec6947a"

	||  $q == "34d1f91fb2e514b8576fab1a75a89a6b"	&& $r == "34b7da764b21d298ef307d04d8152dc5"	
	) {
	$_SESSION['password'] = time();
	echo "go";
} else {
	echo "stop";
}
?>
