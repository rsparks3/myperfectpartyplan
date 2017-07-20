<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
	<?php include("../connect.php"); ?>

	<style type="text/css">
		#adminlogin {
			width: 300px;
			height: 200px;
			margin: 0 auto 100px;
			z-index:1;
			background:#fff;
			padding: 20px;
			text-align:center;
			box-shadow:0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}

		#adminlogin span {
			font-family:"Courier New";
			font-weight:bold;
			font-size:18px;
			padding: 5px 5px 20px 5px;
		}

		#adminlogin input {
			font-family: "Roboto", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width:100%;
			border:0;
			margin: 0 0 15px;
			padding: 15px;
			box-sizing: border-box;
			font-size:14px;
		}

		#adminlogin button {
			font-family: "Roboto", sans-serif;
			text-transform: uppercase;
			outline:0;
			background:#4CAF50;
			width:100%;
			border:0;
			padding:15px;
			color:#FFFFFF;
			font-size:14px;
			-webkit-transition:all 0.3 ease;
			transition: all 0.3 ease;
			cursor:pointer;
		}

		#adminlogin button:hover, #adminlogin button:active, #adminlogin button:focus {
			background: #43A047;
		}

	</style>
</head>

<body>

	<?php include("header.php"); ?>

	<div class="content">
	<p> 
	<div id="adminlogin">
		<span>Site Admin Login</span><br />
		<form method="post" action="login.php">
		<input type="text" name="username" placeholder="Username"><br />
		<input type="password" name="password" placeholder="Password"><br />
		<button>Login</button>
		</form>
	</div>
	</p>
	</div>

	<div class="footer">
	<?php include("../footer.php"); ?>
	</div>
</body>
</html>