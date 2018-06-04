<?php
session_start();
$hostname = "localhost";
$username = "hasagi";
$password = "123456";
$dbname = "hasagi";
$conn = new mysqli($hostname, $username, $password, $dbname) or die("Fail");
?>