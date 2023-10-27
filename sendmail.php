<?php
	// Get values from the form
	$firstname=$_POST['first_name'];
	$lastname=$_POST['last_name'];
	$method=$_POST['method'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];

	$to = "aleeeciaax3@aim.com";
	$subject = "Contact from Alecia's Website";
	$message = "First Name: " . $firstname .
		"\r\n Last Name: " . $lastname .
		"\r\n Method: " . $method .
		"\r\n Email: " . $email .
		"\r\n Phone: " . $phone .
		"\r\n Message: " . $message;

	$from = "alecia";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

	if(@mail($to,$subject,$message,$headers))
	{
		print "<script>document.location.href='thanks.html';</script>";
	} else {
		echo "Error! Please try again.";
	}
?>