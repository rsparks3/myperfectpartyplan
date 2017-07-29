<?php 
session_start();
include("../connect.php");
if(isset($_SESSION['username']) && isset($_SESSION['rank'])) {
	$username = $_SESSION['username'];
	$rank = $_SESSION['rank'];
} else {
	$username="";
	$rank="";
}
?>
<DOCTYPE html>
<html lang="en">
<head>
	<title>Manage Content</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src='tinymce/tinymce.min.js'></script>

	<!-- DROPDOWN BOX AND SUBMIT BUTTON STYLING -->
	<style type="text/css">
		select {
			width:300px;
			padding: 7px;
			overflow:hidden;
			background:#EEEEEE;
			border: 1px solid #CCC;
			margin: 5px 5px 15px;
		}

		input[type=submit] {
			border : solid 0px #ffffff;
			border-radius : 3px;
			moz-border-radius : 3px;
			-webkit-box-shadow : 0px 0px 5px rgba(0,0,0,1.0);
			-moz-box-shadow : 0px 0px 5px rgba(0,0,0,1.0);
			box-shadow : 0px 0px 5px rgba(0,0,0,1.0);
			font-size : 20px;
			color : #ffffff;
			padding : 4px 4px;
			background-color : #598c00;
			width:300px;
			margin: 15px 5px 5px;
		}

		input[type=submit]:hover {
			background-color: #3F6301;
		}
	</style>
</head>

<body>
	<?php 
	if($rank=="admin") {
		include("adminheader.php"); 
	} else {
		include("header.php");
	}
	?>

	<div class="content">
	<?php
	if($rank == "admin") {
	?>
		<!--If is logged in as admin-->
			
			<?php
			$sql = "SELECT * FROM `text_content`";
			$result = $conn->query($sql);

			?> <form method="post" action="changepagecontent.php"> <?php
			if($result->num_rows > 0) {
				echo("<select id='pagename' name='pages' onchange='selectPage(this.value)'>");
				echo("<option value=''>Select a page to edit:</option>");
				while($row = mysqli_fetch_array($result)) {
					echo("<option value='" . $row["id"] . "'>" . $row["id"] . "</option>");
				}
				echo("</select>");
				echo("<br />");
			} else {
				echo("Looks like there's no pages to edit!");
			}
			?>
			<textarea id="contentArea" name="content">Your page content will appear here.  </textarea>
			<script>
				tinymce.init({
					selector: "#contentArea",
					allow_html_in_named_anchor: true,
					entity_encoding: "raw",
					height:"480",
					width:"98%",
					menubar: false,
					plugins: "textcolor image imagetools link table code preview",
					fontsize_formats:"8pt 10pt 12pt 14pt 16pt 20pt 24pt 36pt 48pt",
					toolbar: 'undo redo undo redo | insert table | styleselect fontselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor | image link | preview code'
				});
				function selectPage(val) {
					var xhttp;
					xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
						if(this.readyState == 4 && this.status == 200) {
							var editor = tinymce.get('contentArea');
							editor.setContent(this.responseText, {format : 'raw'});
						}
					};
					xhttp.open("GET", "getpage.php?p=" + val, true);
					xhttp.send();
				}
			</script>
			<input type="submit" value="Change page content">
			</form>

	<?php
	} else {
	?>
		<!--If is not logged in-->
		Oops! You're not logged in.  Head over to <a href="index.php">login</a> to get logged in.  
	<?php
	}
	?>
	<br /><br />
	<a href="logout.php">Force Logout</a>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>