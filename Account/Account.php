<?php 
  session_start();
  require("Attributes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Account.css">
    <link rel="stylesheet" href="../PrivatePage/PrivatePage.css">
        <link rel="stylesheet" href="../HomePage/HomePage.css">
      <script src="../HomePage/HomePage.js"></script>

    <title>Document</title>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
      <h3 class="w3-padding-64"><b>Manara</b></h3>
    </div>
    <div class="w3-bar-block">
    <a href="../PrivatePage/PrivatePage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
      <a href="../CreateCampaign/CreateCampaign.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Create Campaign</a> 
      <a href="../Account/Account.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Account</a> 
      <a href="../HomePage/HomePage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log out</a> 

  
    </div>
  </nav>
  
  <!-- Top menu on small screens -->
  <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
      <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
      <span>Manara</span>
    </header>
  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  
  <!-- !PAGE CONTENT! -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:340px;margin-right:40px;padding-top:10vh;">
    <div class="container">

      
      <div class="col" style="max-width:650px;">
      <h4 style="margin-bottom:0%;">Information</h4>
      <hr/>
      <div class="row">
        <?php ShowAttribute("Name",$_SESSION["Name"]) ?>
        <?php ShowAttribute("Email",$_SESSION["Email"]) ?>
      </div>
      <div class="row">
        <?php ShowAttribute("Age",$_SESSION["Age"]) ?>
        <?php ShowAttribute("Phone",$_SESSION["Phone"]) ?>
      </div>
      <br/>
      <h4 style="margin-bottom:0%;">Contribution</h4>
      
      </div>
      <hr/>
      <div class="container" style="padding:0; overflow:hidden;">
      <?php include("Contributions.php");?>
      </div>
      
    </div>
  </div>
  
  
  
    
  
</body>
</html>