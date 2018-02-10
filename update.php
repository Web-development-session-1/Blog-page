<?php include 'db.php';
	$edit = $_GET['edit'];
	$show = "SELECT * FROM post WHERE sl='$edit'";
	$result = $con->query($show);
	$rowData = $result->fetch_assoc();


	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$author = $_POST['author'];
		$content = $_POST['content'];
	if (empty($title) || empty($author) || empty($content)) {
		echo "You must field all field";
	}else{
		$SQL = "UPDATE post SET `Title`='$title', `Author`='$author', `Content`='$content' WHERE SL='$edit'";
		$Exe = $con->query($SQL);
		if ($Exe === TRUE) {
			echo "Post update successfully";
			header("location:show.php");
		}else{
			echo "something worng";

		}

	}

}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form action="update.php?edit=<?php echo $edit; ?>" method="post">
<table>
	<td>Id:</td>
	<td><input type="text" name="edit"></td>
	<tr>
	<td>Title:</td>
	<td><input type="text" name="title" value="<?php echo $rowData['Title'] ?>"></td>
	</tr>
	<tr>
	<td>Author:</td>
	<td><input type="text" name="author" value="<?php echo $rowData['Author'] ?>"></td>
	</tr>
	<tr>
	<td>Content:</td>
	<td><textarea name="content"><?php echo $rowData['Content'] ?></textarea></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Insert"></td>
	</tr>
	</table>
</form>


</body>
</html>