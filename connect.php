<?php
$servername = 'localhost';
$username = 'a1120136';
$password = 'Miracle1';
$dbname = "a1120136";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>