<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Plan your party!</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<?php include("connect.php"); ?>
	<script>
		function openCreateDialog() {
			var screenMask = document.getElementById("screenmask");
			var createDialog = document.getElementById("createDialog");
			screenMask.style.visibility = 'visible';
			createDialog.style.visibility = 'visible';
		}

		function openLoginDialog() {
			var screenMask = document.getElementById("screenmask");
			var loginDialog = document.getElementById("loginDialog");
			screenMask.style.visibility = 'visible';
			loginDialog.style.visibility = 'visible';
		}

		function escape() {
			var screenMask = document.getElementById("screenmask");
			var loginDialog = document.getElementById("loginDialog");
			var createDialog = document.getElementById("createDialog");
			screenMask.style.visibility = 'hidden';
			loginDialog.style.visibility = 'hidden';
			createDialog.style.visibility = 'hidden';
		}
	</script>
	<style>
	#screenmask {
		visibility:hidden;
		position:fixed;
		width:100%;
		height:100%;
		top:0; left:0;
		background:rgba(255, 255, 255, 0.6);
		z-index:300;
	}

	#loginDialog,
	#createDialog {
		visibility:hidden;
		position:fixed;
		top:40%;
		left:50%;
		transform:translate(-50%, -50%);
		width:500px;
		z-index:400;
		background-color:#fff;
		border-radius:8px;
		-moz-border-radius:8px;
		-webkit-border-radius:8px;
		box-shadow:0px 0px 14px 3px rgba(0, 0, 0, 0.45);
		-moz-box-shadow:0px 0px 14px 3px rgba(0, 0, 0, 0.45);
		-webkit-box-shadow:0px 0px 14px 3px rgba(0, 0, 0, 0.45);
		text-align:center;
		padding:20px 5px 20px;
	}

	#loginDialog input,
	#createDialog input {
		padding:5px;
		margin:10px;
		width:200px;
		border:0px;
	}

	#loginDialog input:focus,
	#createDialog input:focus {
		outline:none;
	}

	#loginDialog input[type=text],
	#loginDialog input[type=password],
	#createDialog input[type=text],
	#createDialog input[type=password] {
		border-bottom:1px dashed;
	}

	#createDialog table,
	#createDialog table td {
		border:0;
	}

	#createDialog table {
		margin:auto;
	}
	</style>
</head>

<body>

	<?php include("header.php"); ?>

	<div class="content"><p>
		<?php
		if(isset($_SESSION['username'])) {
			echo("Welcome " . $_SESSION['username']);
		} else {
			?>
			<button class="accountbutton" onclick="openCreateDialog()">Create an account!</button> or <button class="accountbutton" onclick="openLoginDialog()">Login</button> to continue.
			<?php
		}
		?>
	</p></div>

	<div id="screenmask" onclick="escape()"></div>
	<div id="loginDialog">
		<form method="POST" action="login.php">
			<input type="text" name="email" placeholder="Email" /><br />
			<input type="password" name="password" placeholder="Password" /><br />
			<input type="submit" value="Login" />
		</form>
	</div>
	<div id="createDialog">
		<form method="POST" action="createaccount.php">
			<table>
			<tr><td>Name</td><td><input type="text" style="width:100px;margin-right:0;" name='fname' placeholder="First" /><input type="text" style="width:100px;margin-left:0;" name='lname' placeholder="Last" /></td></tr>
			<tr><td>Email</td><td><input type="text" name='email' placeholder="Email" /></td></tr>
			<tr><td>Password</td><td><input type="password" name="password" placeholder="Password" /></td></tr>
			<tr><td>Confirm Password</td><td><input type="password" name="confirmpassword" placeholder="Confirm" /></td></tr>
			</table>
			<input type="submit" value="Create account!" /><br />
		</form>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>