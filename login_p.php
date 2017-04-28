<?php

$mysqli = new mysqli("localhost", "root", "admin", "pdrm12");

	  if (!isset($_POST["username"]))
	  {
	  	$_SESSION["alert"] = true;
	  	$_SESSION["alert-type"] = error;
	  	$_SESSION["alert-msg"] = "username not provided";

	  	header('Location: '."login.php");
	  }


	   if (!isset($_POST["password"]))

	  {

		$_SESSION["alert"] = true;
	  	$_SESSION["alert-type"] = error;
	  	$_SESSION["alert-msg"] = "username not provided";

	  	header('Location: '."login.php");	

	  }

	  
		$password = md5($_POST["password"]);
		/*
		echo ("SELECT userid FROM user where namaUser like '" . $_POST["username"] . "'  and passwordUser like '" .  $password . "'");
		exit;
		*/
	  if ($result = $mysqli->query("SELECT userid FROM user where namaUser like '" . $_POST["username"] . "'  and passwordUser like '" .  $password . "'")) {

			while($row = $result->fetch_array()) {

				$myArray[] = $row;

			}

			if (isset($myArray))

			{

				$_SESSION["alert"] = true;
			  	$_SESSION["alert-type"] = "success";
			  	$_SESSION["alert-msg"] = "login success";

			  	header('Location: '."index.php");	

			}

			else

			{
				$_SESSION["alert"] = true;
			  	$_SESSION["alert-type"] = "error";
			  	$_SESSION["alert-msg"] = "username n password is not match";

			  	header('Location: '."login.php");

			}			

			echo json_encode($return);

			exit;

		}

				$return = array('result'=>0,'msg'=>'username n password is not match');				

		echo json_encode($return);

		exit; 