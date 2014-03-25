<?php
session_start();
include "Functions.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="Phoenix Designs" />
		<meta name= "keywords" content="Bude Jive CLub, Living to Jive" />
		<meta name= "description" content="Text" />
		<meta name= "robots" content="all" />
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
		<title>Bude Jive Club - Contact</title>
	</head>
	<body>
		<div id="body_head">
			<img src="images/headimage.png" alt="Bude Jive Club, Living to Jive" />
			<div id="mainNav">
				<ul>
					<li><a href="homepage.php">Home</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="history.php">History</a></li>
					<li><a href="links.php">Links</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div> <!-- mainNav Ends -->
			<div id="newsBar">
				<?php
					news_bar();
				?>
			</div> <!-- newsBar Ends -->
		</div> <!-- body_head Ends -->
		<div id="contactleft">
			<div class="pagecontent_contact_left">
				<p class="header-text">Contact Us</p>
				<p class="contact-head">Fill in the form with any questions that you have.</p>
				<form method="get" action="post">
					<div id="contactform">
						<input type="text" class="fname" name="fname" placeholder="Name" required>
						<input type="text" class="subject" name="subject"  placeholder="Subject" required>	
						<input type="email" class="email" name="EMAIL"  placeholder="Email Address" required>
						<textarea name="question" class="question" placeholder="Question" required></textarea>
						<input type="submit" value="Submit" name="submit" id="submit-button" class="button">
					</div> <!-- end of contactform -->
				</form>
			</div> <!-- pagecontent_contact_left end -->
		</div> <!-- contactleft Ends -->
		<div id="contactright">
			<div class="pagecontent_contact_right_top">
				<p class="header-text">Alternative Contact Infomation</p>
					<p class="contact-head">Alternatively, you can get in contact with the following information.</p>
					<p>Email: 				
						<?php
							contact_email();
						?>
					</p>
					<p class="contact-head-2">Phone: 
						<?php
							contact_phone();
						?>
					</p>
			</div> <!-- pagecontent_contact_right_top end -->
			<div class="pagecontent_contact_right">
				<p class="header-text">Mailing List</p>
				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
					<p class="contact-head">Enter your information below to be added to the mailing list. We will send out information about upcoming events and any changes of dates and time.</p>
					<form action="http://budejiveclub.us3.list-manage.com/subscribe/post?u=820cc815b57eb9e4339e0cb20&amp;id=8ee30da95e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
					    <div id="signup-bot-prevent"><input type="text" name="b_820cc815b57eb9e4339e0cb20_8ee30da95e" value=""></div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
					</form>
				</div>
				<!--End mc_embed_signup-->
			</div> <!-- pagecontent_contact_right end -->
		</div> <!-- contactright Ends -->
		<div id="body_footer">
			<p>
				<a href="https://picasaweb.google.com/114490345836729590787" ><img src="images/picasa.png" alt="Picasa Logo" /></a>
				<a href="https://www.facebook.com/pages/Bude-Jive-Club/165490703468377" ><img src="images/facebook.png" alt="Facbook Logo" /></a>
				<a href="http://www.youtube.com/user/Budejive" ><img src="images/youtube2.png" alt="Youtube Logo" /></a>
			</p>
		</div> <!-- body_footer end -->
	</body>
</html>	