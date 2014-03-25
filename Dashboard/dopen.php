<?php
session_start();
$_SESSION['error']="";
include "Functions.php";
// log_page();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Phoenix Designs" />
    <meta name="keywords" content="Bude Jive CLub, Dashboard, Opening Page" />
    <meta name="description" content="Text" />
    <meta name="robots" content="all" />
    <link rel="stylesheet" type="text/css" href="stylesheet2.css" />
    <title>Dashboard - Opening Page</title>
</head>

<body>
    <div id="openbackground">
        <p>
            <img src="images/DashboardHeader.png" alt="Bude Jive Club, Living to Jive, Dashboard, Links" />
        </p>
         <?php
            if (isset($_SESSION['username']) and !empty($_SESSION['username'])) echo "<h4>Welcome " . $_SESSION['username'] . "</h4>";
        ?>
        <div id="image-container">
            <div class="image-left">
                <p>
                    <a href="./dhomepage.html">
                        <img src="images/HomepagePlaceholder.png" alt="Placeholder" />
                    </a>
                </p>
                <p><a href="./dhomepage.html">Homepage</a>
                </p>
            </div>

            <div class="image-right">
                <p>
                    <a href="./dgallery.html">
                        <img src="images/Placeholder.png" alt="Placeholder" />
                    </a>
                </p>
                <p><a href="./dgallery.html">Gallery</a>
                </p>
            </div>

            <div class="image-center">
                <p>
                    <a href="./devents.html">
                        <img src="images/EventsPlaceholder.png" alt="Placeholder" />
                    </a>
                </p>
                <p><a href="./devents.html">Events</a>
                </p>
            </div>

        </div><!-- end of image-container -->
        <div id="image-container2">
            <div class="image-left">
                <p>
                    <a href="./dhistory.html">
                        <img src="images/Placeholder.png" alt="Placeholder" />
                    </a>
                </p>
                <p><a href="./dhistory.html">History</a>
                </p>
            </div>

            <div class="image-right">
                <p>
                    <a href="./dcontact.html">
                        <img src="images/Placeholder.png" alt="Placeholder" />
                    </a>
                </p>
                <p><a href="./dcontact.html">Contact</a>
                </p>
            </div>

            <div class="image-center">
                <p>
                    <a href="./dlinks.html">
                        <img src="images/LinksPlaceholder.png" alt="Placeholder" />
                    </a>
                </p>
                <p><a href="./dlinks.html">Links</a>
                </p>
            </div>

        </div><!-- end of image-container2 -->
    </div><!-- end of dashboardbackground -->
</body>

</html>
	

				