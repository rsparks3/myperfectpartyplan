<html>
<head>
    <title>Aboot this site</title>
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

	<style>
		.card {
			display:inline-block;
			margin:10px;
			padding:10px;
			background-color:#FDFDFD;

			-webkit-box-shadow: 0px 0px 20px -2px rgba(0,0,0,0.64);
			-moz-box-shadow: 0px 0px 20px -2px rgba(0,0,0,0.64);
			box-shadow: 0px 0px 20px -2px rgba(0,0,0,0.64);
			border-radius: 9px 9px 9px 9px;
			-moz-border-radius: 9px 9px 9px 9px;
			-webkit-border-radius: 9px 9px 9px 9px;
		}
	</style>
</head>

<body>
<?php include("header.php"); ?>

<div class="content">
    <p>
        <?php 
        $sql = "SELECT * FROM `companies` WHERE `state`='" . $_GET["state"]. "' AND `city`='" . $_GET["city"] . "'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {

            while($row = mysqli_fetch_array($result)) {
            	echo("<div class='card'>");
            	echo("<span class='businessname'><a href='" . $row['url'] . "'>" . $row['name'] . "</a></span><br />");
            	echo("<span class='data'>" . $row['address'] . "</span><br />");
            	echo("<span class='data'>". $row['phone'] . "</span><br />");
            	echo("<span class='data'>". $row['email'] . "</span><br />");
            	echo("<span class='url'><a href='" . $row['url'] . "'>" . $row['url'] . "</a></span><br />");
            	echo("<span class='category'>" . $row['category'] . "</span><br />");
            	echo("</div>");
            }
            
        } else {
            echo("Oops! We didn't find any companies in your city yet!");
        }
        ?>
    </p>
</div>

<div class="footer">
    <?php include("footer.php"); ?>
</div>
</body>
</html>