<?php
	if ( !isset($_SESSION["isLogin"]))
	{
		header("Location: index.php");
	}
?>