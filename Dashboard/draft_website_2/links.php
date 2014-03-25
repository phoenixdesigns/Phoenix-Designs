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
		<title>Bude Jive Club - Links</title>
	</head>
	<body>
		<div id="body_head">
			<img src="images/headimage.png" alt="Bude Jive Club, Living to Jive" />
			<div id="mainNav">
				<ul>
					<li><a href="./homepage.php">Home</a></li>
					<li><a href="./events.php">Events</a></li>
					<li><a href="./gallery.php">Gallery</a></li>
					<li><a href="./history.php">History</a></li>
					<li><a href="./links.php">Links</a></li>
					<li><a href="./contact.php">Contact</a></li>
				</ul>
			</div> <!-- mainNav Ends -->
			<div id="newsBar">
					<?php
						news_bar();
					?>
			</div> <!-- newsBar Ends -->
		</div> <!-- body_head Ends -->
		<div class="pagecontent_links_1">
			<p class="header-text">Clothing</p>
				<p class="pagelinks"><a href="http://www.wagtailsdancewear.co.uk/" >Wagtails Dance Wear</a></p>
				<p class="linkdescription">For the best quality Rock 'n' Roll 1950's clothes at the cheapest prices!</p>
				<p class="pagelinks"><a href="http://www.dancekrazy-plymouth.co.uk/" >Dance Krazy</a></p>
				<p class="linkdescription">Specialist dance wear suppliers for all styles of dance!</p>
				<p class="pagelinks"><a href="http://marchharevintage.com/" >The March Hare: 50's Clothes Made To Measure</a></p>
				<p class="linkdescription">A bit of vintage, a bit of retro, whichever you prefer!</p>
				<p class="pagelinks"><a href="http://www.vivienofholloway.com/" >Vivien of Holloway</a></p>
				<p class="linkdescription">The destination for lovers of anything vintage.</p>
		</div> <!-- end of pagecontent_links -->
		<div class="pagecontent_links_2">
				<p class="header-text">Other Clubs</p>
				<p class="pagelinks"><a href="http://www.paulnmariesrocknrollevents.co.uk/" >Paul 'n' Maries R 'n' R Events</a></p>
				<p class="linkdescription">Your gateway to live Rock 'n' Roll bands and record hops in Tiverton and surrounding area.</p>
				<p class="pagelinks"><a href="http://www.southwestswing.org.uk/" >South West Swing</a></p>
				<p class="linkdescription">For all the latest events. </p>
		</div> <!-- end of pagecontent_links -->
		<div class="pagecontent_links_3">
				<p class="header-text">Useful Sites</p>
				<p class="pagelinks"><a href="http://www.myholidaycottagecornwall.co.uk/" >Penfound Lodge Holiday Cottage</a></p>
				<p class="linkdescription">A self catering holiday cottage near Bude.</p>
				<p class="pagelinks"><a href="http://www.hodgsoninsurance.co.uk/" >GJT Hodgson Insurance Services</a></p>
				<p class="linkdescription">For all your insurance needs!</p>
				<p class="pagelinks"><a href="http://www.comparethemarket.com/business-insurance/guest-house/" >Guest House Insurance</a></p>
				<p class="linkdescription">To find the best prices for your guest house insurance!</p>
				<p class="pagelinks"><a href="http://www.budetownfc.co.uk/" >Bude Town Football Club</a></p>
				<p class="linkdescription">To entertain you whilst you stay in Bude.</p>
				<p class="pagelinks"><a href="http://www.jiveoholic.org.uk/default.asp" >Jiveoholics Anonymous</a></p>
				<p class="linkdescription">The only place to go for your dance step practice!</p>
				<p class="pagelinks"><a href="http://www.bluesuedenews.freeserve.co.uk/" >Maggies Blue Suede News</a></p>
				<p class="linkdescription">A monthly magazine covering the Rock 'n' Roll scene in the UK.</p>
				<p class="pagelinks"><a href="http://www.wildbobburgos.co.uk/wbb/" >Wild Bob Burgos</a></p>
				<p class="linkdescription">The tattooed sledgehammer of Rock 'n' Roll!</p>
		</div> <!-- end of usefullinks -->
		<div id="body_footer">
			<p>
				<a href="https://picasaweb.google.com/114490345836729590787" ><img src="images/picasa.png" alt="Picasa Logo" /></a>
				<a href="https://www.facebook.com/pages/Bude-Jive-Club/165490703468377" ><img src="images/facebook.png" alt="Facbook Logo" /></a>
				<a href="http://www.youtube.com/user/Budejive" ><img src="images/youtube2.png" alt="Youtube Logo" /></a>
			</p>
		</div> <!-- body_footer end -->
	</body>
</html>