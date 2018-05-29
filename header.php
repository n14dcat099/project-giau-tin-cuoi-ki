<?php
	include_once('lib/connector.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title> ahihi </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <!-- testing part -->
  <meta charset="utf-8">
  <title>Music Player</title>
  <link href="bower_components/bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet">
  <link href="bower_components/bootstrap/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">audio steganography</a>

  <!-- Links -->
  <ul class="navbar-nav">
  <?php
  		if($_SESSION['isLogin'])
  		{
  			echo "<li class='nav-item'>
      <a class='nav-link' href='upload.php'>Upload</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='#'>hello ".htmlspecialchars($_SESSION['username'])."</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='logout.php'>logout</a>
    </li>";
  		} 
  		else
  		{
  			echo "<li class='nav-item'>
      <a class='nav-link' href='login.php'>login</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='register.php'>register</a>
    </li>";
  		}
   ?>
  </ul>
</nav>
<br>