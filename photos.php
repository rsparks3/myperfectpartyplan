<html>
<head>
	<title>Photos</title>
	<link rel="stylesheet" type="text/css" href="main.css">

	<link rel="stylesheet" type="text/css" href="resources/UberGallery.css" />
	<link rel="stylesheet" type="text/css" href="resources/colorbox/1/colorbox.css" />
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="resources/colorbox/jquery.colorbox.js"></script>

	<?php include("connect.php"); ?>

	<script type="text/javascript">
	$(document).ready(function(){
	    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
	});
	</script>
</head>

<body>

	<?php include("header.php"); ?>

	<div class="content">
	<p> 
	<?php
	include_once('resources/UberGallery.php');
	$gallery = UberGallery::init()->createGallery('images/photos');
	?>
	</p>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>