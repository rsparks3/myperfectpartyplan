<?php 
session_start();
include("../connect.php");
$username = $_SESSION['username'];
$rank = $_SESSION['rank'];
?>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style type="text/css">
		.widget {
			display:inline-block;
			width:300px;
			border:1px solid green;
			padding: 20px;
			text-align:center;
			height:200px;
		}
		.widget span {
			font-family:"Courier New";
			font-weight:bold;
		}
		.widget button {
			-webkit-border-radius: 7;
  			-moz-border-radius: 7;
  			border-radius: 7px;
  			font-family: Arial;
  			color: #ffffff;
  			font-size: 17px;
  			padding: 7px 20px 7px 20px;
  			text-decoration: none;
  			width:100%;
		}

		.widget .positive {
  			background: #019B0E;
		}

		.widget .positive:hover {
			background:#007A0A;
			text-decoration:none;
		}

		.widget .negative {
			background:#A30000;
		}

		.widget .negative:hover {
			background:#7F0000;
		}
	</style>
</head>

<body>

	<?php 
	if($_SESSION["rank"]=="admin") {
		include("adminheader.php"); 
	} else {
		include("header.php");
	}
	?>

	<div class="content">
	<span>Seriously none of this works yet...</span><br />
	<?php
	if($rank == "admin") {
	?>
		<!--If is logged in as admin-->
			<div class="widget">
				<span>Admin User Management</span>
				<button type="button" class="positive" onclick="addUser()">Add admin user</button><br />
				<button type="button" class="negative" onclick="removeUser()">Remove admin user</button><br />
				<button type="button" class="positive" onclick="changeUserRank()">Change user Rank</button><br />
			</div>
			<div class="widget">
				<span>Directory Management</span>
				<button type="button" class="positive" onclick="addBusiness()">Manually Add Business</button><br />
				<button type="button" class="positive" onclick="addBanner()">Add Banner Advertisement</button><br />
				<button type="button" class="negative" onclick="removeBusiness()">Remove Business</button><br />
				<button type="button" class="negative" onclick="removeBanner()">Remove Banner Advertisement</button><br />
			</div>
			<div class="widget">
				<span>Directory Management</span>
				<button type="button" class="positive" onclick="addBusiness()">Manually Add Business</button><br />
				<button type="button" class="positive" onclick="addBanner()">Add Banner Advertisement</button><br />
				<button type="button" class="negative" onclick="removeBusiness()">Remove Business</button><br />
				<button type="button" class="negative" onclick="removeBanner()">Remove Banner Advertisement</button><br />
			</div>
	<?php
	} else {
	?>
		<!--If is not logged in-->
		Oops! You're not logged in.  Head over to <a href="index.php">login</a> to get logged in.  
	<?php
	}
	?>
	<br /><br />
	<a href="logout.php">Logout</a>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>