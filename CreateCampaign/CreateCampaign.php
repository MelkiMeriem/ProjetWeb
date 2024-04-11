<!DOCTYPE html>
<html lang="en">


<?php 
    include("../public/menu.php");
  ?>

  
  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:340px;margin-right:40px">
  
    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
      <h1 class="w3-jumbo"><b>Your platform for mutual aid</b></h1>
    </div>

  
    
<!-- The Modal (contains the Sign Up form) -->
  <form class="modal-content" action="" method="POST">
    <div class="container">
      <h1>Create Campaign</h1>
      <p>Please fill in this form to create a Campaign.</p>
      <hr>
      <label for="email"><b>Campaign Name:</b></label>
      <input type="text" placeholder="Enter Campaign Name" name="name" required>
      <label for="prp"><b>Purpose :</b></label>
      <input type="text" id="prp" placeholder="Enter the Compaign's Purpose" name="prp" required>
      <label for="img"><b>Image :</b></label><br>
      <input type="file" src="" alt="" name="img"><br>


      <label for="email"><b>Email :</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

     
     

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating a  Campaign you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="submit" class="signup" >Create Campaign</button>
      </div>
    </div>
  </form>
</div>
    
  
</body>
</html>