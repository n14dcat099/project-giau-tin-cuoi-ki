

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
  <a class="navbar-brand" href="index.html">audio steganography</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Upload</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">login</a>
    </li>
  </ul>
</nav>
<br>
<!-- beginnig of the testing part -->
<div class="container">

        <h1>Music Player</h1>
        <div>
            <audio id="player" controls="true"></audio>

            <button class="btn" id="download"><i class="icon-download"></i> Download</button>   

            <button class="btn" id="get-signature"><i class="icon-download"></i> Get Signature</button>         
            
        </div>

        <div id="folderList">
            <div id="folderListTable"></div>
                
        </div>

    </div>

    
    <script src="js/player.js"></script>
</body>
</html>