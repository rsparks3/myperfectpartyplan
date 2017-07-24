<?php
session_start();
include("connect.php");

$password = hash('sha256', $_POST['password']);

$sql = "INSERT INTO `accounts`(`fname`, `lname`, `email`, `password`, `level`) VALUES (?, ?, ?, ?, 'basic')";
$stmt = $conn->prepare($sql);

$stmt -> bind_param("ssss", $_POST['fname'], $_POST['lname'], $_POST['email'], $password);
if($stmt -> execute()) {
	$sql = "SELECT * FROM `accounts` WHERE `fname`=? AND `lname`=? AND `email`=? AND `password`=?";
	$uuidrequest = $conn->prepare($sql);
	$uuidrequest -> bind_param("ssss", $_POST['fname'], $_POST['lname'], $_POST['email'], $password);
	$uuidrequest -> execute();
	$uuidresult = $uuidrequest->get_result();

	if($uuidresult->num_rows > 0) {
		$row = mysqli_fetch_array($uuidresult);
		$_SESSION['uuid'] = $row['uuid'];
		echo("<script>alert('Successfully created account!'); window.location='planit.php';</script>");
	}
	
} else {
	echo("<script>alert('There was a problem creating your account.'); window.location='planit.php';</script>");
}

?>