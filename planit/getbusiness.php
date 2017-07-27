<?php 
include('../connect.php');
$acctid = $_GET['acctid'];

$sql = "SELECT * FROM `companies` WHERE `acctid`=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $acctid);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {
	$row = mysqli_fetch_array($result);
	$data = array('name'=>$row['name'], 'address'=>$row['address'], 'city'=>$row['city'], 'state'=>$row['state'], 'phone'=>$row['phone'], 'email'=>$row['email'], 'url'=>$row['url'], 'category'=>$row['category']);
	$jsonstring = json_encode($data);
	echo($jsonstring);
}

?>