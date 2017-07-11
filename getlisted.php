<html>
<head>
	<title>My Perfect Party Plan</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<?php include("connect.php"); ?>
</head>

<body>

	<?php include("header.php"); ?>

	<div class="content">
	<p>
		Hey! Welcome to our party.  Make a business account to get listed!
		<form method='POST' action='createbussinessaccount.php'>
		<table class="getlisted">
			<tr><td>COMPANY NAME</td><td><input type="text" name="companyname"></td></tr>
			<tr><td>MERCHANT ADDRESS</td><td><textarea name="merchaddress" rows="3" cols="30"></textarea></td></tr>
			<tr><td>WEBSITE URL</td><td><input type="text" name="url"></td></tr>
			<tr><td>MERCHANT DESCRIPTION</td><td><textarea name="description" rows="5" cols="30"></textarea></td></tr>
			<tr><td>PRIMARY CONTACT</td><td><input type="text" name="pcfirst" placeholder="First"><input type="text" name="pclast" placeholder="Last"></td></tr>
			<tr><td>BUSINESS PHONE</td><td><input type="text" name="phone"></td></tr>
			<tr><td>CUSTOMER SERVICE EMAIL</td><td><input type="text" name="email"></td></tr>
			<tr><td>BEGIN SERVICE TYPE</td><td><input type="radio" name="service" value="basic">Basic Listing - $360 ANNUALLY (Full address, phone, website, email)<br />
			<input type="radio" name="service" value="logo">Basic Listing with Logo - $420 ANNUALLY (Full address, phone, website, email, logo) <br />
			<input type="radio" name="service" value="premiere">Premiere Listing - $540 ANNUALLY (Basic listing with Logo plus premium placement ad at top of company's category listing)<br />
			</td></tr>
			<tr><td>ADDITIONAL </td><td>insert more stuffz here</td></tr>
		</table>
		</form>
	</p>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>