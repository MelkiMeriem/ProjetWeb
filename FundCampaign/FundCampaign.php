<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="../Login&SignUp/style.css">
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
      <a href="../CreateCampaign/CreateCampaign.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Create Campaign</a> 
      <a href="../Account/Account.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Account</a> 
      <a href="../HomePage/HomePage.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log out</a> 
  
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
  <div class="w3-main" style="margin-left:340px;margin-right:40px">
  
    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
      <h1 class="w3-jumbo"><b>Your platform for mutual aid</b></h1>
    </div>

  <?php 
  $id=$_POST["cid"];
  $btn=$_POST["btn"];
  ?>
    
  <form class="modal-content" action="Fund2.php" method="POST">
    <div class="container">
      <h1>Fund Campaign</h1>
      <p>Please fill in this form to Fund the Campaign.</p>
      <hr>
      <label for="email"><b>Email :</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <label for="amt"><b>Campaign's ID : </b></label><br>
      <input type="text" name="cid" value=<?php echo $id ?> disabled >
       <br>
      <label for="amt"><b>Amount</b></label><br>
      <input type="text" placeholder="Enter the Amount" name="amt" required>

     

      <div class="clearfix">
        <button type="submit" class="signup" >Fund The Campaign</button>
      </div>
    </div>
  </form>
</div>
    
  
</body>
</html>