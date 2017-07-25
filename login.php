<?php
session_start();
include('connect.php');

$email = $_POST['email'];
$password = hash("sha256", $_POST['password']);

$request = "SELECT * FROM `accounts` WHERE `email`=? AND `password`=?";

$stmt = $conn->prepare($request);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {
	$row = mysqli_fetch_array($result);
	$_SESSION['uuid'] = $row['uuid'];
	echo("<script>alert('You have been successfully logged in!');window.location='planit.php';</script>");
} else {
	echo("<script>alert('Incorrect email and password'); window.location='planit.php'</script>");
}
?>