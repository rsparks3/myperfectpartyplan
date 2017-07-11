<html>
<head>
	<title>My Perfect Party Plan</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<?php include("connect.php"); ?>
</head>

<body>

	<?php include("header.php"); ?>

	<div class="content">
	<p> <?php 
		$sql = "SELECT * FROM `text_content` WHERE `id`='home'";
		$result = $conn->query($sql);

		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo $row["content"];
			}
		} else {
			echo "No data found";
		}
	 ?>
	</p>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>