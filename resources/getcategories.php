<?php
include('../connect.php');

$sql = "SELECT * FROM `categories`";
$result = $conn->query($sql);
$data = array();

if($result->num_rows > 0) {
	while($row = mysqli_fetch_array($result)) {
		array_push($data, $row['category']);
	}
	$data = json_encode($data);
	echo($data);
} else {
	echo("no categories found");
}
?>