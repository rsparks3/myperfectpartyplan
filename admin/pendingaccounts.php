<?php 
session_start();
include("../connect.php");
if(isset($_SESSION['username']) && isset($_SESSION['rank'])) {
	$username = $_SESSION['username'];
	$rank = $_SESSION['rank'];
} else {
	$username = "";
	$rank = "";
}
?>

<html>
<head>
	<title>Pending Accounts</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="../tables.css">
</head>

<body>

	<?php 
	if($rank=="admin") {
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
			<b>Business accounts in the pending queue.</b><br /><br />
			<?php
			$sql = "SELECT * FROM `pending_businesses`";
			$result = $conn->query($sql);

			if($result->num_rows > 0) {
				echo("<table class='businesses' id='businesses'>");
				echo("<thead><tr><th>Company Name</th><th>Website</th><th>Primary Contact</th><th>Service Type</th><th>Date Submitted</th><th>Paid</th><th>Override Add</th><th>Remove</th></tr></thead><tbody>");

				while($row = mysqli_fetch_array($result)) {
					echo("<tr><td>" . $row['name'] . "</td><td>" . $row['url'] . "</td><td>" . $row['pcfirst'] . " " . $row['pclast'] . "</td><td>" . $row['servicetype'] . "</td><td>" . $row['datesubmitted'] . "</td><td>" . $row['paid'] . "</td><td><button name='override' value='Override'>Override</button></td><td><button name='remove' value='Remove'>Force Remove</td></tr>");
				}
				echo("</tbody></table>");
			} else {
				echo("Looks like there are no businesses in the pending queue!");
			}
			?>

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