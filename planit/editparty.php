<?php
session_start();
if(isset($_SESSION['uuid'])) {
	$uuid = $_SESSION['uuid'];
} else {
	die("Not logged in!");
}

$partyname = $_GET['partyname'];
$partyhost = $_GET['partyhost'];
$partylocation = $_GET['partylocation'];

$filepath = "../resources/userdata/" . $uuid . ".json";
$userdatajson = file_get_contents($filepath);
$userdata = json_decode($userdatajson, true);

if(isset($userdata['party']['name']) && isset($userdata['party']['host']) && isset($userdata['party']['location'])) {
	$userdata['party']['name'] = $partyname;
	$userdata['party']['location'] = $partylocation;
	$userdata['party']['host'] = $partyhost;
	$datafile = fopen($filepath, "w");
	$encodeddata = json_encode($userdata);
	fwrite($datafile, $encodeddata);
	fclose($datafile);
} else {
	die("Party does not exist!");
}
?>