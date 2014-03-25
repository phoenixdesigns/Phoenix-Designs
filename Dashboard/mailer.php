<?php
session_start();

include "Functions.php";
require_once '/Applications/MAMP/htdocs/lib/swift_required.php';
// log_page();


// Create the message
$message = Swift_Message::newInstance()

  // Give the message a subject
  ->setSubject('Your subject')

  // Set the From address with an associative array
  ->setFrom(array('phoenixdesigns.cornwall@gmail.com' => 'Phoenix Designs'))

  // Set the To addresses with an associative array
  ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))

  // Give it a body
  ->setBody('Here is the message itself')

  // And optionally an alternative body
  ->addPart('<q>Here is the message itself</q>', 'text/html')

  // Optionally add any attachments
  ->attach(Swift_Attachment::fromPath('my-document.pdf'));

  ?>