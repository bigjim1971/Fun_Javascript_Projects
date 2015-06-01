<?php 
	session_start();
	$_SESSION['password'] = "";
?>

<html>
<head>
	<title>Protected Page</title>
	<style>
		body {margin: 0; border: 0; padding: 0; color: white; background-color: black;}
		#message{margin: 0 auto; width: 600px; height: 40px; text-align: center;}
		#javascriptmsg{margin: 0 auto; margin-top: 100px; width: 300px; height: 50px;
					   border: 1px solid red; border-radius: 4px; color: red; background-color: green;
						font-weight: bold; font-size: 20px; text-align: center;}
		#overlay {width: 100%; height: 100%; position: fixed; top: 0; left: 0; background-image: url(overlay.png);}
		#box_frame {width: 100%; position: fixed; top: 30%;}
		#box1 {width: 400px; padding: 10px; margin: auto; background-color: #666; border: 3px solid white; font-size: 24px;}
		#box2 {width: 400px; padding: 10px; margin: auto; background-color: #666; border: 3px solid white; font-size: 24px;}
		#msg    {width:240px;margin: 10px auto;}
		#msg2   {width:240px;margin: 10px auto; text-align: center;}
		#input  {width:346px; margin: 10px auto;}
		#button {width: 90px; margin: 10px auto;}
		input {width:346px;}
		button{width: 90px;}
	</style>
	<script type="text/javascript">
	<!--
	var UserName;
	var PassWord;

	function ProgramConstructor() {
//=====================================================================================	
//AJAX Loader
		this.AJAX = AJAX;
		function AJAX(Value1, Value2) {
			var xmlhttp;
			if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
	  			xmlhttp=new XMLHttpRequest();
	  		} else {// code for IE6, IE5
	  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  		}
	  		var output = xmlhttp.onreadystatechange = 	function(aEvt) {
		  		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		  			if (xmlhttp.responseText == "go") {
		  				location = "http://kiss-five/sites/All-JS-projects/games/menu.php";
		  			} else {
		  				location = "http://kiss-five/sites/All-JS-projects/games/index.php";
		  			}
		  		}

			}.bind(this) // this binds the function to the object
			//xmlhttp.open("GET","checkpassword.php?q=" + Value1 + "&r=" + Value2,false); // changed this to "false" to stop code execution until result.
			//xmlhttp.send();
			
			xmlhttp.open("POST","checkpassword.php",false); // changed this to "false" to stop code execution until result.
			//xmlhttp.open("POST","test.php",false); // changed this to "false" to stop code execution until result.
			xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xmlhttp.send("q=" + Value1 + "&r=" + Value2);
			
		}
	}

	function init() {
		
		
		//prompt
		open_box1('Please Enter User Name');
	}

	function open_box1(message) {
		var box_content = '<div id="overlay"><div id="box_frame"><div id="box1"><div id="msg">'+message+'</div><div id="input"><input type="text" maxlength="46" name="usr_name" onkeypress="keypress1(event)"></div><div id="button"><button onclick="getFirst()">OK</button></div></div></div></div>';
		document.getElementById('dynamic').innerHTML = box_content;
		document.getElementsByName('usr_name')[0].focus();
	}
	function open_box2(message) {
		var box_content = '<div id="overlay"><div id="box_frame"><div id="box2"><div id="msg2">'+message+'</div><div id="input"><input type="password" maxlength="46" name="password" onkeypress="keypress2(event)"></div><div id="button"><button onclick="getSecond()">OK</button></div></div></div></div>';
		document.getElementById('dynamic').innerHTML = box_content;
		document.getElementsByName('password')[0].focus();	
	}
	function reset_dynamic() {document.getElementById('dynamic').innerHTML = "";}
	function getFirst()  {UserName = document.getElementsByName('usr_name')[0].value; reset_dynamic(); open_box2('Please Enter Password');}
	function getSecond() {PassWord = document.getElementsByName('password')[0].value; reset_dynamic(); program.AJAX(PassWord,UserName);}
	function keypress1(e) {
		var code;
		if (!e) var e = window.event;
		if (e.keyCode) code = e.keyCode;
		else if (e.which) code = e.which;
		var character = String.fromCharCode(code);
		if (code == 13) {getFirst();}
	}
	function keypress2(e) {
		var code;
		if (!e) var e = window.event;
		if (e.keyCode) code = e.keyCode;
		else if (e.which) code = e.which;
		var character = String.fromCharCode(code);
		if (code == 13) {getSecond();}
	}
	var program = new ProgramConstructor();
	//--></script>
</head>
<body>
<div id="dynamic">'<div id="overlay"><div id="box_frame"><div id="box2"><div id="msg2"> JavaScript must be activated on your browser to use this site </div></div></div></div></div>
<div id="message">This page is designed for viewing by Safari, Firefox, Chrome, Opera or Internet Explorer. Please upgrade your browser and return soon!</div>

<script type="text/javascript">
<!--
init();
//-->
</script>
</body>
</html>
