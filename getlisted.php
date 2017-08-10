<html>
<head>
	<title>Get Listed</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<?php include("connect.php"); ?>

	<style>
	.getlisted {
		background: white;
		padding: 5px;
		min-width: 70%;
		margin: auto;

	}

	tr {
		border-top: 1px solid #C1C3D1;
		border-bottom: 1px solid #C1C3D1;
		color: #666B85;
		font-size: 14px;
		font-weight: normal;
		text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
	}

	tr:hover {
		background: #FFF1B5;
	}

	tr td {
		padding-top: 5px;
		padding-left: 10px;
		padding-right: 10px;
		padding-bottom: 5px;
	}

	tr td:first-child {
		width: 200px;
	}

	tr td:nth-child(2) {
		max-width: 500px;
	}

	tr td input[type=text] {
		width: 250px;
	}

	#createacct {
		margin-top: -50px;
	}

	#createacct input[type=text] {
		font-style: italic;
		padding: 0px 0px 0px 0px;
		background: transparent;
		outline: none;
		border: none;
		border-bottom: 1px dashed #83A4C5;
		overflow: hidden;
		resize: none;
		height: 20px;
	}

	#createacct textarea {
		font-style: italic;
		padding: 0px 0px 0px 0px;
		background: transparent;
		outline: none;
		border: none;
		border-bottom: 1px dashed #83A4C5;
		overflow: hidden;
		width:250px;
	}

	#createacct textarea:focus,
	#createacct input[type=text]:focus {
		border-bottom: 1px dashed #5023AA;
	}

	</style>

</head>

<body>

	<?php include("header.php"); ?>

	<div class="content">
	<p>
		Hey! Make a business account to get listed!<br ><br />
		To get listed, please fill out the following form, with everything as you want it to appear in our directory.  If your business is <i>not</i> listed on our site, your company will be automatically added to our directory after payment is processed.  To retain customer security, if your business is <i>already</i> listed, a customer service representative will contact you within 48 hours of payment being processed to confirm business details and transfer ownership to your business account.  If you're here to <i>renew</i> or <i>modify</i> a listing, please do this through your business account portal instead.<br /><br />
		<b>If you're having any trouble before, during, or after the listing process, please contact customer service with your concern.  Thanks for your business!</b><br /><br />
		<form method='POST' action='createbusinessaccount.php' id="createacct">
		<table class="getlisted">
			<tr><td>COMPANY NAME</td><td><input type="text" name="companyname" required></td></tr>
			<tr><td>MERCHANT ADDRESS</td><td><textarea name="merchaddress" rows="3" cols="30" required></textarea></td></tr>
			<tr><td>WEBSITE URL</td><td><input type="text" name="url" required></td></tr>
			<tr><td>MERCHANT DESCRIPTION</td><td><textarea name="description" rows="5" cols="30" required></textarea></td></tr>
			<tr><td>PRIMARY CONTACT</td><td><input type="text" name="pcfirst" placeholder="First" required><input type="text" name="pclast" placeholder="Last" required></td></tr>
			<tr><td>PRIMARY CONTACT PHONE</td><td><input type="text" name="pcphone" required></td></tr>
			<tr><td>PRIMARY CONTACT EMAIL</td><td><input type="text" name="pcemail" required></td></tr>
			<tr><td>CUSTOMER SERVICE PHONE</td><td><input type="text" name="phone" required></td></tr>
			<tr><td>CUSTOMER SERVICE EMAIL</td><td><input type="text" name="email" required></td></tr>
			<tr><td>BEGIN SERVICE TYPE</td><td><input type="radio" name="service" value="basic" required>Basic Listing - $360 ANNUALLY (Full address, phone, website, email)<br />
			<input type="radio" name="service" value="logo" required>Basic Listing with Logo - $420 ANNUALLY (Full address, phone, website, email, logo) <br />
			<input type="radio" name="service" value="premiere" required>Premiere Listing - $540 ANNUALLY (Basic listing with Logo plus premium placement ad at top of company's category listing)<br />
			</td></tr>
			<tr><td>ADDITIONAL </td><td></td></tr>
			<tr><td></td><td><input type="submit" value="SUBMIT FORM"></td></tr>
		</table>
		</form>
	</p>
	</div>

	<div class="footer">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>