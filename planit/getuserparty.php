<?php
session_start();
if(isset($_SESSION['uuid'])) {
	$uuid = $_SESSION['uuid'];
} else {
	die("You are not logged in!");
}

$filepath = "../resources/userdata/" . $uuid . ".json";
$jsonstring = file_get_contents($filepath);
$result = json_decode($jsonstring, true);

if(isset($result['party'])) {
	echo(json_encode($jsonstring));
} else {
	echo("no parties yet");
}

?>