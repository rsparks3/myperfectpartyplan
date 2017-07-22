<?php
include('connect.php');

$companyname = $_POST["companyname"];
$merchaddress = $_POST["merchaddress"];
$url = $_POST["url"];
$description = $_POST["description"];
$pcfirst = $_POST["pcfirst"];
$pclast = $_POST["pclast"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$service = $_POST["service"];

$sql = "INSERT INTO `pending_businesses`(`name`, `address`, `url`, `description`, `pcfirst`, `pclast`, `phone`, `email`, `servicetype`, `paid`, `datesubmitted`, `additional`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, '0', NOW(), '')";
$stmt = $conn->prepare($sql);

$stmt->bind_param("sssssssss", $companyname, $merchaddress, $url, $description, $pcfirst, $pclast, $phone, $email, $service);

$stmt->execute();
$result = $stmt->get_result();

echo("success");

?>