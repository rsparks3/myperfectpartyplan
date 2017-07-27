<?php
session_start();
if(isset($_SESSION['uuid'])) {
	$uuid = $_SESSION['uuid'];
} else {
	die("Not logged in!");
}

$acctid = $_GET['acctid'];

$filepath = "../resources/userdata/".$uuid.".json";
$jsonstring = file_get_contents($filepath);
$result = json_decode($jsonstring, true);

if(!isset($result['party']['businesses'])) {
	$businessesarray = array('acctid'=>$acctid);
	$result['party']['businesses'][] = $businessesarray;
	$myfile = fopen($filepath, "w");
	$encodedjson = json_encode($result);
	fwrite($myfile, $encodedjson);
	fclose($myfile);
} else {
	array_push($result['party']['businesses'], array('acctid'=>$acctid));
	$myfile = fopen($filepath, "w");
	$encodedjson = json_encode($result);
	fwrite($myfile, $encodedjson);
	fclose($myfile);
}
?>