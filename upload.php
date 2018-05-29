<?php
	include('header.php');

?>

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
 