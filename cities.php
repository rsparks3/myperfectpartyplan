<html>
<head>
    <title>Aboot this site</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="tables.css">
    <?php include("connect.php"); ?>
</head>

<body>
<?php include("header.php"); ?>

<div class="content">
    <p>
        Awesome! Here's some companies listed in your area!

        <?php 
        $sql = "SELECT * FROM `" . $_GET["state"] . "` WHERE `city`='" . $_GET["city"] . "'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            echo("Great! We've got some companies listed in your area.  Here's a few to start: <br />");
            echo("<table class='companies'>");
            echo("<thead><tr><th>Company Name</th><th>Website</th><th>Address</th><th>Category</th><th>Phone Number</th><th>Email</th></tr></thead><tbody>");

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