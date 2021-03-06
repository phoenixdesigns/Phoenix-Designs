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
		<title>Bude Jive Club - Past Saturday Events</title>
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
		<a href="events_mon.php">
			<div class="pagecontent_events_main_1">
				<p class="header-text3">Upcoming Monday Events</p>
				<p>Click to see a list of our upcoming Monday Events</p>
			</div>
		</a>
		<a href="events_mon_old.php">
			<div class="pagecontent_events_main_2">
				<p class="header-text3">Past Monday Events</p>
				<p>Click to see a list of our past Monday Events</p>
			</div>
		</a>
		<a href="events_sat.php">
			<div class="pagecontent_events_main_3">
				<p class="header-text3">Upcoming Saturday Events</p>
				<p>Click to see a list of our upcoming Satarday Events</p>
			</div>
		</a>
		<a href="events_sat_old.php">
			<div class="pagecontent_events_main_4">
				<p class="header-text3">Past Saturday Events</p>
				<p>Click to see a list of our past Monday Events</p>
			</div>
		</a>
		<div id="body_footer">
			<p>
				<a href="https://picasaweb.google.com/114490345836729590787" ><img src="images/picasa.png" alt="Picasa Logo" /></a>
				<a href="https://www.facebook.com/pages/Bude-Jive-Club/165490703468377" ><img src="images/facebook.png" alt="Facbook Logo" /></a>
				<a href="http://www.youtube.com/user/Budejive" ><img src="images/youtube2.png" alt="Youtube Logo" /></a>
			</p>
		</div> <!-- body_footer end -->
	</body>
</html>		
				