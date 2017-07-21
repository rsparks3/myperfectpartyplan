<?php 
session_start();
include("../connect.php");
$username = $_SESSION['username'];
$rank = $_SESSION['rank'];
?>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
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
	<p>
	<?php
	if($rank == "admin") {
	?>
		<!--If is logged in as admin-->
			<div id="usermanagement">
				User management
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
	</p>
	</div>

	<div class="footer">
	<?php include("../footer.php"); ?>
	</div>
</body>
</html>