<?php
	include "db.php";
	session_start();
	$sql ="SELECT * FROM post";
	$result=$con->query($sql);

?>
<!DOCTYPE html>
	<html>
	<head>
		<title> blog home</title>
		<style type="text/css">
		body{
			
		}
			.maincontent{
				
				height: 600px;
				background-color: #fffcf4;
			}
			.header{
				height: 100px;
				overflow: hidden;
				background-color:#EDEDED;
			}
			.header h2{
				text-align: center;
				color: ;
				font-family: sans-serif;

			}
			.menubar{
				background-color:#4B4B4B;
				height: 35px;
				margin-top: -20px;
				
			}
			.menubar ul li{
				float: left;
			}
			.menubar  li{
				list-style: none;
			}
			.menubar ul li{
				float: left;
			}
			.menubar li a{
				color: #fff;
				width: 100px;
				text-align: center;;
				text-decoration: none;
				display: block;
				line-height: 35px;
			}
			.menubar li a:hover{
				background-color: #fefefe;
				color: #000000;
				height: 35px;

			}
			.left,.right{
				float: left;
			}
			.left{
				width: 500px;
				height: 600px;
			}
			.right{
				width: 550px;
				height: 600px;
			}
			.pic img{
				height: 300px;
				width: 500px;
			}
			.content {
				margin-left: 20px;
			}
			.footer{
				background-color: black;
				height: 35px;
			}
			.footer p{
				text-align: center;
				line-height: 30px;
				color: #fefefe;
			}
		</style>
	</head>
	<body>
		<div class="header">
			<h2> Welcome our Blog Site</h2>	
		</div>
		<div class="menubar">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="maincontent">
			
			<div class="left">
				<div class="pic">
					<img src="img/3.jpg"/>
				</div>
			</div>
			<div class="right">
				<div class="content">
					<?php while($data=$result->fetch_assoc()){?>
						<h3> <?php echo $data['Title'];?></h3>
						<h4> <?php echo $data['Author'];?></h4>
						<p><?php echo $data['Content'];?></p>
					<?php }?>
				</div>
			</div>
			
		</div>
		<div class="footer"><p>All right reserved @ sirajul islam 2017</p></div>
	</body>
</html>