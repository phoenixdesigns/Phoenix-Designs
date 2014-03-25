<?php
session_start();

//$_SESSION['error']="";
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
        <?php
        if ($_SESSION['error']) {
    echo '<div id="errormsg">'.$_SESSION['error'].'</div>';
    $_SESSION['error']="";
}
?>
        <div id="loginform">
            <form method="post" action="checklogin.php">
                <p>
                    <label class="loginformentry">Username</label>
                    <input id="logintextbox" name="username" type="text" />
                </p>
                <p>
                    <label class="loginformentry">Password</label>
                    <input id="logintextbox" name="password" type="password" />
                </p>
                <p>
                    <input class="submitbutton" type="submit" id="submitlogin" value="Submit" />
                    <input class="resetbutton" type="button" id="resetlogin" value="Reset Password" onClick="location.href=('./dpassword.php');" />
                </p>
            </form>
            
        </div>
        <!-- end of loginform -->
</body>
</html>