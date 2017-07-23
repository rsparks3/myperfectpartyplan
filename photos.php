<html>
<head>
	<title>Photos</title>
	<link rel="stylesheet" type="text/css" href="main.css">

	<link rel="stylesheet" type="text/css" href="resources/UberGallery.css" />
	<link rel="stylesheet" type="text/css" href="resources/colorbox/1/colorbox.css" />

	<?php include("connect.php"); ?>

	<script type="text/javascript">
	$(document).ready(function(){
	    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
	});
	</script>

	</script>
</head>

<body>

	<?php include("header.php"); ?>

	<div class="content">
	<p> 
	<?php
	include('resources/UberGallery.php');
	$gallery = UberGallery::init()->createGallery('images/photos');
	?>
	</p>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>