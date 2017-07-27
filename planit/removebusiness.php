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
$object = json_decode($jsonstring, true);

$index = array_search(array('acctid'=>$acctid), $object['party']['businesses']);
unset($object['party']['businesses'][$index]);
$object['party']['businesses'] = array_values($object['party']['businesses']);

$myfile = fopen($filepath, "w");
$encodedjson = json_encode($object);
fwrite($myfile, $encodedjson);
fclose($myfile)
?>