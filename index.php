<?php
  include('header.php');
  $res = "";
  if(isset($_GET['id']))
  {
    $file='hasagi signed.wav';
    $output = shell_exec('python unhide_lsb.py '.$file);
    $res = $output;
  }
?>
<!-- beginnig of the testing part -->
<div class="container">
  <ul class="list-group">
  <li class="list-group-item">
    <audio controls="controls">
      <source src="https://docs.google.com/uc?export=download&id=0B_ETxiqrp0SzbF9VQ3JCS2hnSlU">
    </audio><button class="btn" id="get-signature"><i class="icon-download"></i> <a href='index.php?id=1'>Get Signature</a></button>
    <?php echo $res; ?></li>
  <li class="list-group-item"><audio controls="controls">
    <source src="https://drive.google.com/uc?authuser=0&id=1A-smrFlNoXbNL6x2IdK-bEAXUwzDfW7_&export=download">
 </audio><button class="btn" id="get-signature"><i class="icon-download"></i> Get Signature</button></li>
  <li class="list-group-item">Third item</li>
</ul>
</div>