<?php
session_start();
include("../connect.php");
if($_SESSION['rank'] == "admin")
{
	$page = $_POST["pages"];
	$content = $_POST["content"];
	$content = mysqli_real_escape_string($conn, $content);

	$sql = "UPDATE `text_content` SET `content`='" . $content . "' WHERE `id`='" . $page . "'";
	$result = $conn->query($sql);

	if($result === TRUE) {
		echo("<script>alert('Success!');window.location='managecontent.php'</script>");
	} else {
		echo("Couldn't update sql database.." . $conn->error);
	}
} else {
	echo("<script>alert('Looks like you don't have access to that resource! Log in to continue');</script>");
}
?>