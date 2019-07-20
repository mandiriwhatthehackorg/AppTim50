<?php
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl") 
    ->setUsername('yourgmailusername@gmail.com')
    ->setPassword('yourgmailpassword');

$mailer = Swift_Mailer::newInstance($transport);
// the message itself
$message = Swift_Message::newInstance('email subject')
    ->setFrom(array('noreply@example.com' => 'no reply'))
    ->setTo(array('recipient@example.com'))
    ->setBody("email body");

$result = $mailer->send($message);