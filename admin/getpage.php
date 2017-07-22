<?php
include("../connect.php");
$p = $_GET['p'];

$sql = "SELECT * FROM `text_content` WHERE `id`='" . $p . "'";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)) {
	echo($row['content']);
}
?>