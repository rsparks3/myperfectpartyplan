<?php
session_start();
if(isset($_SESSION['uuid'])) {
	$uuid = $_SESSION['uuid'];
} else {
	die("Not logged in!");
}

$filepath = "../resources/userdata/". $uuid . ".json";
$userdatajson = file_get_contents($filepath);
$userdata = json_decode($userdatajson, true);

if(isset($userdata['party'])) {
	unset($userdata['party']);
	$datafile = fopen($filepath, "w");
	$encodeddata = json_encode($userdata);
	fwrite($datafile, $encodeddata);
	fclose($datafile);
}
?>