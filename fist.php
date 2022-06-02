<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

	$u_name = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
	$u_pass = filter_var($_POST["user_password"], FILTER_SANITIZE_EMAIL);
	$u_text = filter_var($_POST["user_text"], FILTER_SANITIZE_STRING);

	if (empty($u_name)){
		die("Please enter your name");
	}
	if (empty($u_pass) || !filter_var($u_pass, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}
		
	if (empty($u_text)){
		die("Please enter text");
	}	
	
	//print output text
	print "Hello " . $u_name . "!, we have received your message and  ";
	print "We will contact you very soon!";
}
?>