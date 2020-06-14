<?php
if(!empty($_POST["send"])) {
	$name = $_POST["aame"];
	$email = $_POST["email"];
	$content = $_POST["message"];

	$toEmail = "sissilinked@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>