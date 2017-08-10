<?php
session_start();
include("../connect.php");

$sql = "SELECT * FROM `feature_images`";
$queryresult = $conn->query($sql);

$linkarray = array();

if($queryresult->num_rows > 0) {
	while($row = mysqli_fetch_array($queryresult)) {
		$linkarray = array_push($linkarray, $row['link']);
	}
	$jsonobject = json_encode($linkarray);
	echo($jsonobject);
}
?>