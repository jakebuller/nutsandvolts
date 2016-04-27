<?php

class Helpers
{
	
	const MAIL_LIST = "mike@nutsandvolts.ca";	

	public static function SendMail($subject, $message, $reply)
	{
		$to      = self::MAIL_LIST;				
		$headers = "From: contactform@nutsandvolts.ca\r\n" .
				"Reply-To: $reply \r\n" .
				"X-Mailer: PHP/" . phpversion();		
				
		mail($to, $subject, $message, $headers);
	}
}

?>