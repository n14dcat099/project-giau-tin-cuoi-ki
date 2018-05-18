<?php
session_start();
$hostname = "localhost";
$username = "hasagi";
$password = "123456";
$dbname = "hasagi";
$conn = new PDO("mysql:host=$hostname;dbname = $dbname",$username,$password) or die("Fail");
?>