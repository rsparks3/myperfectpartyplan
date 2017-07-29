<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="tables.css">
	<?php include("connect.php"); ?>

	<script>
		function sortTable(n) {
		  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		  table = document.getElementById("companies");
		  switching = true;

		  dir = "asc"; 

		  while (switching) {

		    switching = false;
		    rows = table.getElementsByTagName("TR");

		    for (i = 1; i < (rows.length - 1); i++) {

		      shouldSwitch = false;
		      
		      x = rows[i].getElementsByTagName("TD")[n];
		      y = rows[i + 1].getElementsByTagName("TD")[n];
		      
		      if (dir == "asc") {
		        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
		          
		          shouldSwitch= true;
		          break;
		        }
		      } else if (dir == "desc") {
		        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
		          
		          shouldSwitch= true;
		          break;
		        }
		      }
		    }
		    if (shouldSwitch) {
		      
		      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
		      switching = true;
		      
		      switchcount ++; 
		    } else {
		      
		      if (switchcount == 0 && dir == "asc") {
		        dir = "desc";
		        switching = true;
		      }
		    }
		  }
		}
	</script>
</head>

<body>

	<?php include("header.php"); ?>

	<div class="content">
	<p> 
	<?php
		$sql = "SELECT * FROM `companies` 
			WHERE `address` LIKE LOWER(?) 
			OR `category` LIKE LOWER(?) 
			OR `city` LIKE LOWER(?) 
			OR `email` LIKE LOWER(?) 
			OR `name` LIKE LOWER(?) 
			OR `phone` LIKE LOWER(?)";
		echo("Your search results for: " . $_GET['query'] . "<br /><br />");
		echo("<i>Companies</i><br />");

		$stmt = $conn->prepare($sql);
		$query = "%" . $_GET['query'] . "%";
		$stmt->bind_param("ssssss", $query, $query, $query, $query, $query, $query);
		$stmt->execute();
		$result = $stmt->get_result();

		if($result->num_rows > 0) {
			while($row = mysqli_fetch_array($result)) {
				echo("<div class='card'>");

            	if(isset($_SESSION['uuid'])) {
            		echo("<div title='Click to add this company to your party!'><img class='addbutton' src='images/icons/greenplus.ico' width='15' height='15' onclick='addBusiness(" . $row['acctid'] . ", this)'/></div>");
            	}

            	echo("<span class='businessname'><a href='" . $row['url'] . "'>" . $row['name'] . "</a></span><br />");
            	echo("<span class='data'>" . $row['address'] . "</span><br />");
            	echo("<span class='data'>" . $row['city'] . ", " . $row['state'] . "</span><br />");
            	echo("<span class='data'>". $row['phone'] . "</span><br />");
            	echo("<span class='data'>". $row['email'] . "</span><br />");
            	echo("<span class='url'><a href='" . $row['url'] . "'>" . $row['url'] . "</a></span><br />");
            	echo("<span class='category'>" . $row['category'] . "</span><br />");
            	echo("</div>");
			}

			echo("<br />");
		} else {
			echo("We didn't find any companies matching your query.  Feel free to try again!<br /><br />");
		}
		
		echo("<i>Pages</i><br />");

		$sql2 = "SELECT * FROM `text_content` 
			WHERE `id` LIKE LOWER(?) 
			OR `content` LIKE LOWER(?)";

		$stmt2 = $conn->prepare($sql2);
		$stmt2->bind_param("ss", $query, $query);
		$stmt2->execute();
		$result2 = $stmt2->get_result();

		if($result2->num_rows > 0) {
			while($row2 = mysqli_fetch_array($result2)) {
				if($row2['id'] == 'home') {
					echo("<a href='index.php'>" . $row2['id'] . "</a><br />");
				} else {
					echo("<a href='" . $row2['id'] . ".php'>" . $row2['id'] . "</a><br />");
				}
			}
		} else {
			echo("We didn't find any pages that contained your query.  Feel free to try again!");
		}
	?>
	</p>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>