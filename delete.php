<?php
include 'db.php';
	$delete = $_GET['delete'];
	$sql = "DELETE FROM post WHERE SL='$delete'";
	$result = $con->query($sql);	
	if ($result === true) {
		header("location:show.php");
	}

?>