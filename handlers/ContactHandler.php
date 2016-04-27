<?php

define("log_file", "contact_log.txt");

require_once("../helpers/Helpers.php");

if(isset($_POST))
{
	$stuff = print_r($_POST, true);
	file_put_contents(log_file, $stuff, FILE_APPEND);	

	if(!isset($_POST['subject']) || !isset($_POST['message']) || !isset($_POST['email']) || !isset($_POST['name']))
	{
		header("Location: ../contact.php?status=error");
		die();
	}
		
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$email = $_POST['email'];
	$name = $_POST['name'];

	$content = "You have received a new message from the contact form on nutsandvolts.ca\n
	Name: $name\n
	Email: $email\n
	Subject: $subject\n
	Message: $message\n";

	Helpers::SendMail($subject, $content, $email);
	
	header("Location: ../contact.php?status=success");

}
?>