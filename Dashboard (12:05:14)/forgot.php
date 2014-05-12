<?php
	$username = $_POST['username'];
	try {
		$password = reset_password($username);
		notify_password($username, $password);
		echo 'Your new password has been emailed to you';
	}
	catch (Exception $e) {
		echo 'Your password could not be reset, please try again later';
	}
?>
