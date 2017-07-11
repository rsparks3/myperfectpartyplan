<html>
<head>
	<title>My Perfect Party Plan</title>
	<link rel="stylesheet" type="text/css" href="main.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
	<script src="js/raphael.js"></script>
	<script src="js/jquery.usmap.js"></script>

	<script>
		$(document).ready(function() {
			  $('#map').usmap({
			  	'stateStyles': {
			  		fill: '#8800BA',
			  		"stroke-width": 2,
			  		'stroke' : '#5F0082'
			  	},
			  	'stateHoverStyles': {
			  		fill: '#5F0082'
			  	},
			  	'click' : function(event, data) {
			  		window.location.href = 'states.php?state=' + data.name;
			  	}
			  });
		});
	</script>
</head>

<body>

	<?php include("header.php"); ?>

	<div class="content" style="text-align:center;"> <br />
		<h2 style="margin:auto; font-family:'Trebuchet MS'; color:#63004D;">Where's your party at?</h2><br />
		<div id="map" style="width:800px; height:800px; margin: auto; "></div>

	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>