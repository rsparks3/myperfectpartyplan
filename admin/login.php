<?php 
session_start();
include("../connect.php");
$username = $_POST['username']; 
$password = hash('sha256', $_POST['password']);
$sql = "SELECT * FROM `admin_accounts` WHERE `username`='" . $username . "' AND `password`='" . $password . "'";
$result = $conn->query($sql);
if($result->num_rows > 0) {
	while($row = mysqli_fetch_array($result))
	{
		$_SESSION["username"] = $row["username"];
		$_SESSION["rank"] = $row["rank"];
		echo("<script>alert('Logged in successfully, your rank is" . $_SESSION["rank"] . "');</script>");
	}
} else {
	echo("<script>alert('Could not log in.');</script>");
}
?>
<html>
<head>
	<title>Admin Section</title>
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
	</p>
	</div>

	<div class="footer">
	<?php include("../footer.php"); ?>
	</div>
</body>
</html>