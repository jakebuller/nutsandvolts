<?php
require_once("header.php");
?>
<script src="js/contact.js"></script>
<div id="contact-wrapper">
<div id="contact-content">
<form action="handlers/ContactHandler.php" method="post" id="contact-us">

<?php

$str = "";

if(isset($_GET['status']))
{
	$status = $_GET['status'];

	$str = "<p class='status-message contact-text'>";
	
	if($status == "error")
		$str .= "There was an error trying to send your message, please make sure all of the fields are filled in and try again.";
	else if($status == "success")
		$str .= "Your message has been sent! Thank you for contacting us, we will try to get back to you as soon as we can";
	
	$str .= "</p>";	
}
else
{
	$str = '
	<p class="contact-text">Want to know more about the services we offer and how to make Nuts and Volts Inc. 
	a part of your maintenance team?<br/><br/>Send us a message here and we will get back to you as soon as we can!</p>';
}

echo $str;

?>

<p>Name *<br>
<input type="text" id="name" name="name" value=""/>
<p>Email *<br>
    <input type="text" id="email" name="email" value=""/>
<p>Subject<br>
    <input type="text" id="subject" name="subject" value=""/>
<p>Message<br>
    <textarea name="message" id="message" cols="40" rows="10"></textarea>
<p>
<input type="submit" value="Send" id="contact-submit" class="button red"/>
</form>
</div>
</div>
			
<?php
require_once("footer.php");
?>