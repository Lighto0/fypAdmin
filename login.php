<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kuarters PDRM</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>
	.navbar-fixed-left {
	  width: 140px;
	  position: fixed;
	  border-radius: 0;
	  height: 100%;
	}

	.navbar-fixed-left .navbar-nav > li {
	  float: left;  /* Cancel default li float: left */
	  width: 139px;
	}

	.navbar-fixed-left + .container {
	  padding-left: 180px;
	}

	/* On using dropdown menu (To right shift popuped) */
	.navbar-fixed-left .navbar-nav > li > .dropdown-menu {
	  margin-top: -50px;
	  margin-left: 140px;
	}
</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  
<?php
	if(isset($_SESSION["alert"]))
	{
		if(($_SESSION["alert"] == true))
		{

?>
<div class="alert alert-<?= $_SESSION["alert-type"] ?>">
  $_SESSION["alert-msg"]
</div>
<?php

		}
	}
?>
    <div class="navbar navbar-inverse navbar-fixed-left">
	  <a class="navbar-brand" href="#">Admin</a>
	  
	</div>
	<div class="container">
	 <div class="row">
	   <h2>Login Page</h2>
	   <form name="formlogin" method="post" action="login_p.php">
	   		<div class="form-group">
	   			<label>Username</label>
	   			<input type="text" name="username">
	   		<div>
	   		<div class="form-group">
	   			<label>Password</label>
	   			<input type="password" name="password">
	   		<div>
	   		<div class="form-group">
	   			<input type="submit" name="btnSubmit" text="Submit">
	   		<div>
	   </form>
	 </div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>