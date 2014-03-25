<?php

require_once 'lib/swift_required.php';

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('@gmail.com', 25)
  ->setUsername('phoenixdesigns.cornwall@gmail.com')
  ->setPassword('designcove')
  ;

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array('phoenixdesigns.cornwall@gmail.com' => 'Phoenix Designs'))
  ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);

?>