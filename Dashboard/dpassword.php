<?php
session_start();
$_SESSION['error']="";
include "Functions.php";
// log_page();

?>
<!DOTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Phoenix Designs" />
        <meta name="keywords" content="Bude Jive CLub, Living to Jive" />
        <meta name="description" content="Text" />
        <meta name="robots" content="all" />
        <link rel="stylesheet" type="text/css" href="stylesheet2.css" />
        <title>Dashboard - Login</title>
    </head>

    <body>
        <div id="dashboardbackground">
            <img src="images/DashboardHeader.png" alt="Header" />

            <div id="loginform">
                <form method="POST" action="dpassword2.php">
                    <p>
                        <label for="logintextbox"class="loginformentry">Email Address</label>
                        <input id="logintextbox" name="emailaddress" type="text" />
                    </p>
                    <p>
                        <input class="submitbutton" type="submit" id="submitlogin" value="Submit" />
                    </p>
                </form>
            </div>
            <!-- end of loginform -->
        </div>

    </body>
</html>