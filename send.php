<?php
require_once './vendor/autoload.php';
try {
	if($_GET['admincode']=='ABC123!!ajij}(}'){
		// Create the SMTP Transport
		$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
			->setUsername('oktobo.psikologi@gmail.com')
			->setPassword('Tes1234!');
	 
		// Create the Mailer using your created Transport
		$mailer = new Swift_Mailer($transport);
	 
		// Create a message
		$message = new Swift_Message();
	 
		// Set a "subject"
		$message->setSubject($_GET['subject']);
	 
		// Set the "From address"
		$message->setFrom(['oktobo.psikologi@gmail.com' => 'Mamiles Mandiri']);
	 
		// Set the "To address" [Use setTo method for multiple recipients, argument should be array]
		$message->addTo($_GET['to'],$_GET['name']);
		 
	 
		// Set the plain-text "Body"
		// Set a "Body"
		$message->addPart($_GET['content'], 'text/html');
	 
		// Send the message
		$result = $mailer->send($message);
	}
} catch (Exception $e) {
  echo $e->getMessage();
}