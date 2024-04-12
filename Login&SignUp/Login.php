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

        if($psw == $password){

          $_SESSION["Email"] = $email;
          $_SESSION["Age"] = $row["Age"];
          $_SESSION["Name"] = $row["Name"];
          $_SESSION["psw"] = $pwd;
          $nbr_compaign_sql = "SELECT count(CampaignID) as nbrCompaign FROM campaign WHERE OwnerEmail = '$email'";
          $compaign_result = mysqli_query($conn, $nbr_compaign_sql);
          $row2 = mysqli_fetch_assoc($compaign_result);
          $_SESSION["nbrCompaign"] = $row2["nbrCompaign"];
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


<?php 
    include("../public/menu1.php");
  ?>
  

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
  <form class="modal-content"  method="post">
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
      <input  required type="password" placeholder="Enter Password" name="psw" required>

     

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>


      <div class="clearfix">
        <button type="submit" name="login" class="login">Log in</button>
      </div>
    </div>
  </form>
</div>
    
  
</body>
</html>


