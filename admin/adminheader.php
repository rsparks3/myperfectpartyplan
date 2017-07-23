<style type="text/css">
	.search input {
		outline:none;
	}
	.search input[type=search] {
		-webkit-appearance:textfield;
		-webkit-box-sizing:content-box;
		font-family:inherit;
		font-size:100%;
	}

	.search input::-webkit-search-decoration,
	.search input::-webkit-search-cancel-button {
		display: none; 
	}

	.search input[type=search] {
		background:url("/resources/icons/search-icon.png") no-repeat 9px center;
		border:solid 1px #ccc;
		padding:9px 10px 9px 32px;
		width:130px;

		-webkit-border-radius:10em;
		-moz-border-radius:10em;
		border-radius: 10em;

		-webkit-transition: all .5s;
		-moz-transition: all .5s;
		transition: all .5s;
	}

	.search input[type=search]:focus {
		width:200px;
		background-color:#fff;
		border-color:#66CC75;

		-webkit-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
		-moz-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
		box-shadow: 0 0 5px rgba(109, 207, 246, .5);
	}

	.search input:-moz-placeholder {
	color: #999;
	}
	.search input::-webkit-input-placeholder {
		color: #999;
	}
</style>
<div class="header" style="display:flex;justify-content: space-between;"">
	<div class="logo"><img src="logo.gif" alt="My Perfect Party Plan" /></div>
	<nav>
		  <ul>
		    <li>
		      <a href="adminpanel.php">Admin Panel</a>
		    </li>
		    <li>
		      <a href="pendingaccounts.php">Pending Accounts</a>
		    </li>
		    <li>
		      <a href="managecontent.php">Manage Content</a>
		    </li>
		    <li>
		      <a href="userrequests.php">User Requests</a>
		    </li>
		    <li>
		    	<a href="#">Help Tickets</a>
		    </li>
		  </ul>
		</nav>
</div>
	  
