<?php
$servername = 'localhost';
$username = 'id1963701_a1120136';
$password = 'Miracle1';
$dbname = "id1963701_content";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>