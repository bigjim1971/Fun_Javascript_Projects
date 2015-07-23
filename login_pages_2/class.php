<?php 
	require_once('config.php');

	if ( !class_exists('loginClass') ) {
		class loginClass {
			public function	login() {
				sleep(1);
				if (isset($_POST["user"]) && isset($_POST["pass"])) {
					$username = $_POST["user"]; // User Name
					$password = $_POST["pass"]; // Password
					$username = strtolower($username);
					$password = strtolower($password);
					$username = md5($username);
					$password = md5($password);
					
					if (    ($username == "25699f04d3a65f923ad0f2fbbfa1cb39" && $password == "06ba39c3635ecc77bd10918c0622df11")
					     || ($username == "2ac15c4f5d19aa101756f1890e3b30e0" && $password == "7703646921faf4d03459d10c6ac82a3a")
					) {
						$_SESSION['password'] = "allowed";
					} else { $_SESSION['password'] = ""; }
				}
			}

			public function logout() {
				sleep(1);
				if (isset($_POST["logout"]) && ($_POST["logout"] == "logout")) {
					$_POST["user"] = "";
					$_POST["pass"] = "";
					$_SESSION = "";
				}
			}

			public function logoutButton() {
				if (isset($_SESSION['password']) && $_SESSION['password'] == "allowed") {
					echo('
					<form action="index.php" method="post">
					<input type="submit" value="logout" name="logout">
					</form>
					');
				}
			}

			public function loginForm() {
				if (!isset($_SESSION['password']) || $_SESSION['password'] !== "allowed") {
					$_POST["user"] = "";
					$_POST["pass"] = "";
					echo('
					<form action="index.php" method="post">
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
			}
			public function loginMenu() {
				if (isset($_SESSION['password']) && $_SESSION['password'] == "allowed") {
					echo('
						<a href="page1.php">Page 1</a>
						</br></br>
						<a href="page2.php">Page 2</a>
						</br></br>
						<a href="page3.php">Page 3</a>
						</br></br>
						');
				}
			}
			public function redirect() {	
				if (isset($_SESSION['password']) && ($_SESSION['password'] == "allowed")) {} else {
					header( 'Location: ' . localHost_path . siteSub_path . 'index.php' ) ;
				} 
			}
		}
	}

	$loginObj = new loginClass;



?>
