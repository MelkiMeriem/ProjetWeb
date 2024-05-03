<?php
  session_start();
?>
<?php

$message = "";

  include("../DB/database.php");

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
      $email = $_POST["email"];
      $psw = $_POST["psw"];
      $email_sql = "SELECT * FROM user WHERE Email = '$email' ";
      
      $email_result = mysqli_query($conn, $email_sql);

      if(mysqli_num_rows($email_result) == 1){

        $row = mysqli_fetch_assoc($email_result);
        $password = $row["Password"];
        $pwd = $_POST["psw"];
        $hash = password_hash($pwd, PASSWORD_DEFAULT);

        if(password_verify($password, $hash)){

          $_SESSION["Email"] = $email;
          $_SESSION["Age"] = $row["Age"];
          $_SESSION["Name"] = $row["Name"];
          $_SESSION["PhoneNumber"] = $row["phone"];
          
          $nbr_compaign_sql = "SELECT count(CampaignID) as nbrCompaign FROM campaign WHERE OwnerEmail = '$email'";
          $nbr_fund_sql = "SELECT count(FundID) as nbrFund FROM fund WHERE UserEmail = '$email'";
          $compaign_result = mysqli_query($conn, $nbr_compaign_sql);
          $fund_result = mysqli_query($conn, $nbr_fund_sql);
          $row2 = mysqli_fetch_assoc($compaign_result);
          $row3 = mysqli_fetch_assoc($fund_result);
          $_SESSION["nbrCompaign"] = $row2["nbrCompaign"];
          $_SESSION["nbrFund"] = $row3["nbrFund"];
          header("Location: ../Account/Account.php");
  
        }
        else{ 

          $message =  "Incorret Password !<br>";

        }
      }
      else{

        $message =  "Sorry ! This Email does not exist.<br>";

      }
    }
    
  mysqli_close($conn);
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
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../HomePage/HomePage.css">
      <script src="../HomePage/HomePage.js"></script>

    <title>Document</title>
</head>
<body>



  <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
      <h3 class="w3-padding-64"><b>Manara</b></h3>
    </div>
    <div class="w3-bar-block">
      <a href="../HomePage/HomePage.php" onclick="w3_close()"  class="w3-bar-item w3-button w3-hover-white">Home</a> 
      <a href="../Login&SignUp/SignUp.php" onclick="w3_close()"  class="w3-bar-item w3-button w3-hover-white">Sign Up</a> 
      <a href="../Login&SignUp/Login.php" onclick="w3_close()"  class="w3-bar-item w3-button w3-hover-white">Log in</a> 
  
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
    
  
    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
      <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption"></p>
      </div>
    </div>
      
<!-- The Modal (contains the Sign Up form) -->
  <form class="modal-content" method="post">
    <div class="container">
      <h1>Log in</h1>
      <p>Please fill in this form to Log in.</p>
      <?php if($message!==""){?>
        <div class="alert alert-danger">
            <?= $message ?>
        </div>
    <?php } ?>
      <hr>
    
      <label for="Email"><b>Email</b></label>
      <input required type="text" placeholder="Enter Email" name="email" required>
      

      <label for="psw"><b>Password</b></label>
      <input required type="password" placeholder="Enter Password" name="psw" required>

     

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>


      <div class="clearfix">
        <button type="submit" class="login">Log in</button>
      </div>
    </div>
  </form>
</div>
    
  
</body>
</html>
