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
</head>

<body>
<?php include("header.php"); ?>

<div class="content">
    <p>
        <?php 
        $sql = "SELECT * FROM `companies` WHERE `state`='" . $_GET["state"]. "' AND `city`='" . $_GET["city"] . "'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            echo("Great! We've got some companies listed in your area.  Here's a few to start.  (Hint: Click on a column to sort by it!) <br /><br />");
            echo("<table class='companies' id='companies'>");
            echo("<thead><tr><th onclick='sortTable(0)'>Company Name</th><th onclick='sortTable(1)'>Website</th><th onclick='sortTable(2)'>Address</th><th onclick='sortTable(3)'>Category</th><th onclick='sortTable(4)'>Phone Number</th><th onclick='sortTable(5)'>Email</th></tr></thead><tbody>");

            while($row = mysqli_fetch_array($result)) {
            	echo("<tr><td>" . $row['name'] . "</td><td>" . $row['url'] . "</td><td>" . $row['address'] . "</td><td>" . $row['category'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['email'] . "</td></tr>");
            }
            echo("</tbody></table>");
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