<?php
require_once("functions.php");
/*require_once("lib/permission.php");*/

session_start();

header('Content-Type: text/html; charset=utf-8');

global $CLIENT_ID, $CLIENT_SECRET, $REDIRECT_URI;
$client = new Google_Client();
$client->setClientId($CLIENT_ID);
$client->setClientSecret($CLIENT_SECRET);
$client->setRedirectUri($REDIRECT_URI);
$client->setScopes('email');

$authUrl = $client->createAuthUrl();    
getCredentials($_GET['code'], $authUrl);

$userName = $_SESSION["userInfo"]["name"];
$userEmail = $_SESSION["userInfo"]["email"];

?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <title>Logged in</title>
    <meta charset="UTF-8">
</head>
<body>

    <br><br><br>

    <form enctype="multipart/form-data" action="formAction.php" method="POST">
        <input type="file" name="file" required>
        <br><br>
        <input type="submit" name="submit" value="Upload to Drive">
    </form>
</body>
</html>


