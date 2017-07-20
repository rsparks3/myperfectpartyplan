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
	<div class="logo"><img src="logo.gif" alt="My Perect Party Plan" /></div>
	<div class="search" style="padding-top:23px;padding-right:50px;">
		<form method="GET" action="search.php"><input type="search" placeholder="Search" name="query"></form>
	</div>
</div>

<nav>
  <ul>
    <li>
      <a href="index.php">Home</a>
    </li>
    <li>
      <a href="about.php">About</a>
    </li>
    <li>
      <a href="locations.php">Directory</a>
    </li>
    <li>
      <a href="#">Photos</a>
    </li>
    <li>
    	<a href="#">Contact</a>
    </li>
  </ul>
</nav>
