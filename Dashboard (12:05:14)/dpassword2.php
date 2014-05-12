<?php
session_start();

include "Functions.php";
require_once '/Applications/MAMP/htdocs/lib/swift_required.php';
// log_page();

if ($_SESSION['error']) echo "<p>".$_SESSION['error']."</p>";
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
                <?php               
                    $link = db_connect();
                    if (!isset($_SESSION['user_email']) or  empty($_SESSION['user_email'])) {
                        $user_email = $_REQUEST['emailaddress'];
                        $_SESSION['user_email'] = $user_email; }
                    $query = "select security_question from security,userdetails where userdetails.emailaddress=security.emailaddress 
                    and security.emailaddress='" . $_SESSION['user_email'] . "'";
                    $result = mysqli_query($link,$query);
                    while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC))
                    {
                        echo $data["security_question"];
                    }
                    mysqli_close($link);
                ?>
                <form method="POST" action="check_answer.php">
                    <?php
                        echo '<p><label for="securityentry"></label>';
                        echo '<input value="" name="securityentry" type="text" />';
                        echo '<p class="submitbutton"><input type="submit" id="submitlogin" value="Submit" /></p>';
                    ?>
                </form>
            </div><!-- end of loginform -->
        </div>
    </body>
</html>

