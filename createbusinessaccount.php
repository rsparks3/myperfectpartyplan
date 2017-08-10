<html>
<head>
	<title>Create Business Account</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

	<?php include("header.php"); ?>

	<div class="content">
	<p>

<?php

$companyname = $_POST["companyname"];
$merchaddress = $_POST["merchaddress"];
$url = $_POST["url"];
$description = $_POST["description"];
$pcfirst = $_POST["pcfirst"];
$pclast = $_POST["pclast"];
$pcphone = $_POST['pcphone'];
$pcemail = $_POST['pcemail'];
$phone = $_POST["phone"];
$email = $_POST["email"];
$service = $_POST["service"];

if($companyname!='' && $merchaddress!='' && $url!='' && $pcfirst!='' && $pclast!='' && $phone!='' && $email !='' && $service!='') {
	include('connect.php');
	$sql = "INSERT INTO `pending_businesses`(`name`, `address`, `url`, `description`, `pcfirst`, `pclast`, `pcphone`, `pcemail`, `phone`, `email`, `servicetype`, `paid`, `datesubmitted`, `additional`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '0', NOW(), '');";
	$stmt = $conn->prepare($sql);

	$stmt->bind_param("sssssssssss", $companyname, $merchaddress, $url, $description, $pcfirst, $pclast, $pcphone, $pcemail, $phone, $email, $service);

	$stmt->execute();
	$result = $stmt->get_result();

	echo("Thanks for creating an account with us! For your records, please keep this reference number: A" . mysqli_insert_id($conn) . ".  As soon as we receive payment, your business will become listed on our site.  Please note that if you've requested banner advertisements, a customer service representative will reach out with 1-2 business days to aquire the ad and post it on the requested portion of our site.  Thanks for your business!");
} else {
	echo("Please <a href='getlisted.php'>go back</a> and complete all parts of the form in order to create a business account with us. ");
}
?>

	</p>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>
<?php
include('connect.php');