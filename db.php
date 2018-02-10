<?php
	$server= "localhost";
	$user  ="root";
	$pass  ="";
	$dbname="blogsite";
	$con =new mysqli($server,$user,$pass,$dbname);
	if ($con->connect_error) {
		echo "not connect".$con->connect_error;
	}
?>