<?php
  session_start();
?>              
<!DOCTYPE html>
<html lang="en">


  <?php 
    include("../public/menu2.php");
  ?>
  

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:340px;margin-right:40px;padding-top:10vh;">
    <div class="container">
      <div class="col" style="max-width:650px;">
      <h4 style="margin-bottom:0%;">Information</h4>
      <hr/>
      <div class="row">
        <div class="col" name="Name">
          <h3>Name</h3>
          <p class="fields"><?php echo $_SESSION["Name"]?></p>
        </div>
        <div class="col" name="Email">
          <h3>Email</h3>
          <p class="fields"><?php echo $_SESSION["Email"]?></p>
        </div>
      </div>
      <div class="row">
        <div class="col" name="Age">
          <h3>Age</h3>
          <p class="fields"><?php echo $_SESSION["Age"]?></p>
        </div>
        <div class="col" name="Number of Compaigns">
          <h3>Number of Compaigns</h3>
          <p class="fields"><?php echo $_SESSION["nbrCompaign"]?></p>
        </div>
      </div>
      <br/>
      <h4 style="margin-bottom:0%;">Contribution</h4>
      
      </div>
      <hr/>
      <div class="row">
        
      </div>

    </div>
  </div>
    
</body>
</html>

