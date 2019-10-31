<?php
	session_start();

	$secret_username = "a3";
	$secret_password = "testing";

	if (($_POST['username'] == $secret_username ) &&
		($_POST['password'] == $secret_password))
	{
		$_SESSION["loggedin"] = "true";
        header("Location: untitled2.php");
    }
	else {echo "Incorrect username/password"; return;

	     }
?>
