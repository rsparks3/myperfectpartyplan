<?php
session_start();
if(isset($_SESSION['uuid']))
	$uuid = $_SESSION['uuid'];
else
	die();

$name = $_GET['name'];
$location = $_GET['location'];
$host = $_GET['host'];
$contact1 = $_GET['contact1'];

$filepath = "../resources/userdata/" . $uuid . ".json";
$jsonstring = file_get_contents($filepath);
$result = json_decode($jsonstring, true);

if(!isset($result['party'])) {
	$partyarray = array('name' => $name, 'host' => $host, 'location' => $location, 'contact1' => $contact1);
	$result['party'] = $partyarray;
	$myfile = fopen($filepath, "w");
	$encodedjson = json_encode($result);
	fwrite($myfile, $encodedjson);
	fclose($myfile);
	echo(json_encode($result));
} else {
	die("Party already exists!");
}

?>