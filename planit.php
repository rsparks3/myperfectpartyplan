<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Plan your party!</title>
	<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="planit/planit.css">

	<?php include("connect.php"); ?>
	<script src="jquery.min.js"></script>
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

		function checkPassword() {
			var pass = document.getElementById("password");
			var confirmpass = document.getElementById("confirmpassword");
			if(pass.value == confirmpass.value) {
				document.getElementById("confirmicon").src = "images/icons/greencheck.ico";
			} else {
				document.getElementById("confirmicon").src = "images/icons/redx.ico";
			}
		}

		function createParty() {
			var data = {
				name : document.getElementById('pname').value,
				host : document.getElementById('host').value,
				location : document.getElementById('location').value,
				contact1 : document.getElementById('contact1').value
			};

			$.ajax({
				url:"planit/createuserparty.php",
				data: data,
				type:"GET"
			}).done(function(json) {
				updateParty();
			}).fail(function(xhr, status, errorThrown) {
			});
		}

		function createPartyButtonClicked() {
			$("#partyname").detach();
			$("#addicon").detach();
			$("#party").append("<span class='editable'><input type='text' id='pname' value='Party Name'></input></span><br />");
			$("#party").append("<span class='editable'><input type='text' id='host' value='Host'></input></span><br />");
			$("#party").append("<span class='editable'><input type='text' id='location' value='Location'></input></span><br />");
			$("#party").append("<span class='editable'><input type='text' id='contact1' value='Contacts'></input></span><br />");
			$("#party").append("<input type='submit' onclick='createParty()'></input>");
		}

		function updateParty() {
			$.ajax({
				url:"planit/getuserparty.php",
				type:"get",
				dataType: 'json'
				}).done(function( json ) {
					var object = JSON.parse(json);
					$("#party").empty();
					var name = $("<span class='editable pname' id='pname' onclick='edit(this)'>" + object['party']['name'] + "<img src='images/icons/pencil.ico' /></span><br />");
					var partySettings = $("<img src='images/icons/gear.ico' id='settingsbutton' width='20px' height='20px'></img>");
					var location = $("<span class='location'>Location: </span><span class='editable location' id='location' onclick='edit(this)'>" + object['party']['location'] + "<img src='images/icons/pencil.ico' /></span><br />");
					var host = $("<span class='host'>Hosted by: </span><span class='editable host' id='host' onclick='edit(this)'>" + object['party']['host'] + "<img src='images/icons/pencil.ico' /></span><br />");
					var businesseslabel = $("<span class='pname' style='font-size:18px;'>Businesses You've Selected</span><br />");
					$("#party").append(name);
					$("#party").append(partySettings);
					$("#party").append(location);
					$("#party").append(host);
					$("#party").append(businesseslabel);

					if(typeof object['party']['businesses'] == 'undefined' || object['party']['businesses'] == '') {
						var nobusinesses = $("<span class='label'>You haven't selected any businesses for this event! Head over to our <a href='locations.php'>directory</a> to find some businesses!</span><br />");
						$("#party").append(nobusinesses);
						$("#party").append("<br /><br />");
						var editPartyButton = $("<button onclick='editParty()' value='Edit Party'>Edit Party</button>");
						$("#party").append(editPartyButton);
						var deletePartyButton = $("<button onclick='deleteParty()' value='Delete Party'>Delete Party</button>");
						$("#party").append(deletePartyButton);
					} else {
						for(var i = 0; i < object['party']['businesses'].length; i++) {

							var businessid = object['party']['businesses'][i]['acctid']

							var data = {
								acctid : businessid
							}

							$.ajax({
								url:"planit/getbusiness.php",
								type:"get",
								data:data,
							}).done(function(businessobjectstring) {
								var businessobject = JSON.parse(businessobjectstring);
								var card = $("<div class='card'></div>");
								$("#party").append(card);
								var bname = $("<span class='businessname'><a href='" + businessobject['url'] + "'>" + businessobject['name'] + "</a></span><br />");
								card.append(bname);
								var bremove = $("<img src='images/icons/redminus.ico' onclick='removeBusiness(" + businessobject['acctid'] + ");'></img>");
								card.append(bremove);
								var baddress = $("<span class='data'>" + businessobject['address'] + "</span><br />");
								card.append(baddress);
								var bcitystate = $("<span class='data'>" + businessobject['city'] + ", " + businessobject['state'] + "</span><br />");
								card.append(bcitystate);
								var bphone = $("<span class='data'>" + businessobject['phone'] + "</span><br />");
								card.append(bphone);
								var bemail = $("<span class='data'>" + businessobject['email'] + "</span><br />");
								card.append(bemail);
								var burl = $("<span class='url'><a href='" + businessobject['url'] + "'>" + businessobject['url'] + "</a></span><br />");
								card.append(burl);
								var bcategory = $("<span class='category'>" + businessobject['category'] + "</span><br />");
								card.append(bcategory);
							}).fail(function(xhr, status, errorThrown) {
								alert("Failed" + errorThrown);
							});
						}

						$("#party").append("<br /><br />");
						var editPartyButton = $("<button onclick='editParty()' value='Edit Party'>Edit Party</button>");
						$("#party").append(editPartyButton);
						var deletePartyButton = $("<button onclick='deleteParty()' value='Delete Party'>Delete Party</button>");
						$("#party").append(deletePartyButton);
					}

					
				}).fail(function(xhr, status, errorThrown) {
			});
			
		}

		function removeBusiness(acctid) {

			var data = {
				acctid : acctid
			}

			$.ajax({
				url: "planit/removebusiness.php",
				type: "get",
				data: data
			}).done(function(success) {
				alert("success: " + success);
				updateParty();
			}).fail(function(xhr, status, errorThrown) {
				alert("failed: " + errorThrown);
			});
		}

		function edit(element) {
			var id = $(element).attr('id');
			var newtextfield = $("<input type='text' id='" + id + "' value='" + $(element).text() + "' />")
			$(element).replaceWith(newtextfield);
			$(newtextfield).blur(function() {
				editParty();
			});
		}

		function editParty() {
			var partyname;
			if($("#pname").is("input")) {
				partyname = $("#pname").val();
			} else {
				partyname = $("#pname").text();
			}
			
			var partylocation;
			if($("#location").is("input")) {
				partylocation = $("#location").val();
			} else {
				partylocation = $("#location").text();
			}

			var partyhost;
			if($("#host").is("input")) {
				partyhost = $("#host").val();
			} else {
				partyhost = $("#host").text();
			}

			var data = {
				partyname: partyname,
				partyhost: partyhost,
				partylocation: partylocation
			}

			$.ajax({
				url: "planit/editparty.php",
				type: "get",
				data: data
			}).done(function(received) {
				updateParty();
			}).fail(function(xhr, status, errorThrown) {
				alert("error: " + errorThrown);
			});
		}

		function deleteParty() {
			if(confirm("Are you sure you want to delete this party?")) {
				$.ajax({
					url: "planit/deleteparty.php",
					type: "get"
				}).done(function(received) {
					if(received != '') {
						alert(received);
					}
					location.reload();
				}).fail(function(xhr, status, errorThrown) {
					alert("error: " + errorThrown);
				});
			} else {
				alert("won't delete");
			}
		}

	</script>
</head>

<body>

	<?php include("header.php"); ?>

	<div class="content">
	<?php
		if(isset($_SESSION['uuid'])) {
			$filepath = "resources/userdata/" . $_SESSION['uuid'] . ".json";
			$udatastring = file_get_contents($filepath);
			$udata = json_decode($udatastring, true);

			?> 
			<div id="userbar">
				<span class='welcome'>Welcome <?php $udata['fname'] ?></span>
				<span class='logout'><a href='admin/logout.php'>Log out</a></span>
			</div>
			<div id="party">
				<span id="partyname">Create a party</span><img src="images/icons/greenplus.ico" onclick="createPartyButtonClicked()" alt="Create" width="20" height="20" id="addicon" />
			</div>
			<?php
		} else {
			?><center>
			<button class="accountbutton" onclick="openCreateDialog()">Create an account!</button> or <button class="accountbutton" onclick="openLoginDialog()">Login</button> to continue.</center>
			<?php
		}
		?>

		<div id="screenmask" onclick="escape()">
		</div>
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
				<tr><td>Name</td><td><input type="text" style="width:100px;margin-right:0;" name='fname' placeholder="First" required/><input type="text" style="width:100px;margin-left:0;" name='lname' placeholder="Last" required/></td></tr>
				<tr><td>Email</td><td><input type="text" name='email' placeholder="Email" required/></td></tr>
				<tr><td>Password</td><td><input type="password" name="password" id="password" placeholder="Password" required/></td></tr>
				<tr><td>Confirm Password</td><td><input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm" required oninput="checkPassword()"/><img src="images/icons/redx.ico" width="14px" height="14px" id="confirmicon"></td></tr>
				</table>
				<input type="submit" value="Create account!" /><br />
			</form>
		</div>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
	<script>
	$(document).ready(function() {
		updateParty();
	});
	</script>
</body>
</html>