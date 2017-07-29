<html>
<head>
	<title>Aboot this site</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="jquery.min.js"></script>
	<?php include("connect.php"); ?>
	<style>
		#cities,
		#categories {
			padding:10px;
			margin:10px;
			width:30%;
			outline:none;
		}
		#cities:focus,
		#categories:focus {
			outline:none;
		}
	</style>
</head>

<body>
	<?php include("header.php"); ?>

	<div class="content" style="text-align:center;">
	<p> <?php 
		$sql = "SELECT * FROM `Cities` WHERE `State`='" . $_GET["state"] . "'";
		$result = $conn->query($sql);

		if($result->num_rows > 0) {
			echo("<b>Great! What city are you looking for?</b><br />");
			$sql = "SELECT * FROM `Cities` WHERE `State`='" . $_GET["state"] . "'";
			$cities = $conn->query($sql);
			if($cities->num_rows > 0) {
				echo("<form method='get' action='cities.php' id='citiesform'>");
			    echo("<input type='hidden' name='state' value='" . $_GET['state'] . "' /><select id='cities' name='city'>");
			    echo("<option value=''>Select a city you're looking in</option>");
			    while($row = $cities->fetch_assoc()) {
			    	echo("<option value='" . $row['City'] . "'>" . $row['City'] . "</option>");
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

	<script>
		var cities = document.getElementById("cities");

		cities.addEventListener("change", function() {
			$.ajax({
				url: "resources/getcategories.php",
				type: "get"
			}).done(function(data) {
				$("#citiesform").append("<br />");
				$("#citiesform").append("<select id='categories' name='category'></select>");
				$("#categories").append("<option value=''>Select a category</option>");
				$("#categories").change(function() {
					document.getElementById("citiesform").submit();
				});
				var dataObject = JSON.parse(data);
				for(var i = 0; i < dataObject.length; i++) {
					$("#categories").append("<option value='" + dataObject[i] + "'>" + dataObject[i] + "</option>");
				}
			}).fail(function(xhr, status, errorThrown) {

			});
			//document.getElementById("citiesform").submit();
		});
	</script>
</body>
</html>