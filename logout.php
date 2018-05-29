<?php
	include('lib/connector.php');
	if(isset($_SESSION['isLogin']))
	{
		session_destroy();
		header("Location: login.php");
		exit();
	}
	else 
	{
		header("Location: index.php");
		exit();
	}
?>