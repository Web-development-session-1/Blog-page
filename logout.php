<?php
	session_start();
	if (!$_session['user']) {
		header("location:login.php");
	}else{
		session_unset();
		session_destroy();
		header("location:login.php");
	}

?>