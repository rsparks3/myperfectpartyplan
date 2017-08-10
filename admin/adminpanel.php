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
	<script>
		function addAdminUser() {

		}
		function removeAdminuser() {

		}
		function addBusiness() {

		}
		function addBanner() {

		}
		function removeBusiness() {

		}
		function removeBanner() {

		}
	</script>
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
	<?php
	if($rank == "admin") {
	?>
		<!--If is logged in as admin-->
			<div class="widget">
				<span>User Management</span>
				<button type="button" class="positive" onclick="addAdminUser()">Add admin account</button><br />
				<button type="button" class="negative" onclick="removeAdminUser()">Remove admin account</button><br />
				<button type="button" class="positive" onclick="viewUserDetails()">Modify User Account</button><br />
				<button type="button" class="positive" onclick="addUserAccount()">Add User Account</button><br />
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