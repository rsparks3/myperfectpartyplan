<html>
<head>
	<title>Aboot this site</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<?php include("connect.php"); ?>
</head>

<body>
	<?php include("header.php"); ?>

	<div class="content">
	<p> <?php 
		$sql = "SELECT * FROM `Cities` WHERE `State`='" . $_GET["state"] . "'";
		$result = $conn->query($sql);

		if($result->num_rows > 0) {
			echo("Great! What city are you looking for? <br>");
			$sql = "SELECT * FROM `Cities` WHERE `State`='" . $_GET["state"] . "'";
			$cities = $conn->query($sql);
			if($cities->num_rows > 0) {
			    while($row = $cities->fetch_assoc()) {
			        echo "<a href='cities.php?state=" . $_GET["state"] . "&city=" . $row["City"] . "'>" . $row["City"] . "</a><br>";
                }
            }
		} else {
			echo("Oops! It looks like we don't operate in your state yet.  Sorry!");
		}
	 ?>
	</p>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>