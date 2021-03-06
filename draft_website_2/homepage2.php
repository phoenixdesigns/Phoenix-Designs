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
		<title>Bude Jive Club - Home</title>
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
			<div id="newsBar2">
				<?php
					news_bar();
				?>
			</div> <!-- newsBar Ends -->
		</div> <!-- body_head Ends -->
		<div id="left_three">
			<div class="pagecontent_homepage_left">
				<p class="header-text">Bude Jive Club</p>
					<p class="content">Bude Jive Club has been in existence for several years and is continuing to grow in popularity; we meet at The Parkhouse Centre, Bude on Monday nights. The interest in our club arises from our combining two dance styles, traditional rock and roll and jive.</p>
			</div> <!-- miancontent1 -->
			<div class="pagecontent_homepage_left">
				<p class="header-text">What do we offer?</p>
					<p class="content">The club regularly offers courses of 'beginners and improvers' lessons. On a regular basis, guest instructors give lessons for the 'improvers'. Rock and rollers who learned to dance in their youth are very welcome at any of the events held by the club.</p>
			</div> <!-- miancontent2 -->
			<div class="pagecontent_homepage_left">
				<p class="header-text">Our Club</p>
					<p class="content">Bude Jive Club has fast gained a reputation as a friendly club and has a very varied social diary supported by Rock and Roll club members throughout the southwest.</p>
			</div> <!-- miancontent3 -->	
		</div> <!-- left_three end -->
		<div id="pagecontent_homepage_right">		
			<p class="header-text2">Upcoming Events</p>
			<table id="homepage_table">
				<tr>
					<td>Date</td>
					<td>Time</td>
					<td>Discription</td>
				</tr>
				<tr>
					<td>Sat 09/02/13</td>
					<td>8pm</td>
					<td>Valentines - The Kingrats + DJ</td>
				</tr>
				<tr>
					<td>Sat 13/04/13</td>
					<td>7:30pm</td>
					<td>Play It Cool &amp; Bernie Woods + DJ</td>
				</tr>
				<tr>
					<td>Sat 17/08/13</td>
					<td>7:30pm</td>
					<td>Carnival Dance (59 Ford) + DJ</td>
				</tr>
				<tr>
					<td>Sat 19/10/13</td>
					<td>7:30pm</td>
					<td>The Alligators + DJ</td>
				</tr>
			</table>
		</div> <!-- maincontent4 end-->
		<p><img src="images/photostream.png" alt="Jive, Placeholder" /></p>
		<div id="body_footer">
			<p>
				<a href="https://picasaweb.google.com/114490345836729590787" ><img src="images/picasa.png" alt="Picasa Logo" /></a>
				<a href="https://www.facebook.com/pages/Bude-Jive-Club/165490703468377" ><img src="images/facebook.png" alt="Facbook Logo" /></a>
				<a href="http://www.youtube.com/user/Budejive" ><img src="images/youtube2.png" alt="Youtube Logo" /></a>
			</p>
		</div> <!-- body_footer end -->
	</body>
</html>				