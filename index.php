<!DOCTYPE html>
<html>
<head>
	<title>My Perfect Party Plan</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<?php include("connect.php"); ?>

	
	<style>
		.display-left, .display-right {
			cursor:pointer;
			width:auto;
			padding:16px;
			color:white;
			font-weight:bold;
			font-size:18px;
			transition:0.6s ease;
			border-radius: 0 3px 3px 0;
			border:none;
			position:absolute;
			top:45%;
		}
		.display-right{
			right: 0;
			border-radius: 3px 0 0 3px;
		}
		.display-right, .display-left {
			background-color:rgba(0, 0, 0, 0.8);
		}
		nav .search {
			display:none;
		}
		#slideshowcontainer .searchbox {
			position:absolute;
			top:250px;
			left:50%;
			width:35%;
			min-width:100px;
			transform:translateX(-50%);
			z-index:;
			
			display: inline-block;
			  -webkit-box-sizing: content-box;
			  -moz-box-sizing: content-box;
			  box-sizing: content-box;
			  padding: 15px 25px;
			  border-radius: 6px;
			  border:0;
			  font: normal 16px/normal "Trebuchet MS", Helvetica, sans-serif;
			  color: rgba(49,0,107,1);
			  -o-text-overflow: clip;
			  text-overflow: clip;
			  background: rgba(255,255,255,1);
			  text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
			  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
			  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
			  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
			  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
		}

		#slideshowcontainer .searchbox:focus {
			outline:none;
		}

		::-webkit-input-placeholder { color:#DDC9FF; }
		::-moz-placeholder { color:#DDC9FF; }
		:-moz-placeholder { color:#DDC9FF; }
		:-ms-input-placeholder { color:#DDC9FF; }
		::-ms-input-placeholder { color:#DDC9ff; }
	</style>

	<script src="jquery.min.js"></script>
	<script src="bxslider/jquery.bxslider.min.js"></script>
	<link href="bxslider/jquery.bxslider.css" rel="stylesheet" />
</head>

<body>

	<?php include("header.php"); ?>

	<div class="content">
		<div id="slideshowcontainer">
			<ul class="featurephotos">
				<li><img class="slides" src="images/index/image1.jpg" /></li>
				<li><img class="slides" src="images/index/image2.jpg" /></li>
				<li><img class="slides" src="images/index/image3.jpg" /></li>
				<li><img class="slides" src="images/index/image4.jpg" /></li>
			</ul>
			<form method="GET" action="search.php">
			<input class="searchbox" type="search" name="query" placeholder="Start typing a city to look for businesses">
			</form>
		</div>

		<script>
		$(document).ready(function() {
			$(".featurephotos").bxSlider({
				auto: true,
				default:4000
			});
		});
		/*var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("slides");
			if(n > x.length) {slideIndex = 1}
			if(n < 1) {slideIndex = x.length} ;
			for(i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			x[slideIndex-1].style.display = "block";
		}*/
		</script>

	<p> <?php 
		$sql = "SELECT * FROM `text_content` WHERE `id`='home'";
		$result = $conn->query($sql);

		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo $row["content"];
			}
		} else {
			echo "No data found";
		}
	 ?>
	</p>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>