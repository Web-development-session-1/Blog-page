<?php 
	include "db.php";
	$sql = "SELECT * FROM post ";
	$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Live Blog</title>
	<style type="text/css">
		td{
			background-color: #DCDCDC;
		}
		tr{
			background-color: #fefefe;
		}
	</style>
</head>
<body>
<table>
<tr>
	<th>SL</th>
	<th>Title</th>
	<th>Author</th>
	<th>Content</th>
	<th>Action</th>
</tr>

<?php 
	$i =1;
	while($data = $result->fetch_assoc()){

?>
	<tr>
		<td><?php echo $i++ ?></td>
		<td><?php echo $data['Title'] ?></td>
		<td><?php echo $data['Author'] ?></td>
		<td><?php echo $data['Content'] ?></td>
		<td><a href="update.php?edit=<?php echo $data['SL'];?>">Edit</a> || <a href="delete.php?delete=<?php echo $data['SL'];?>">Delete</a></td>
	</tr>
<?php } ?>

</table>
</body>
</html>