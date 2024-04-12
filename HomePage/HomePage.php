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
      
  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Services.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>
        Manara is a dynamic online platform
         designed to empower individuals, 
         communities, and organizations to raise funds for personal causes, projects, emergencies, and charitable initiatives. Whether you're a passionate entrepreneur, a community activist, or someone facing unexpected challenges, HopeLift is here to provide a supportive space where dreams are nurtured and challenges are
         overcome with collective effort.
    </p>
  </div>
  

  <!-- The Campaigns -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="../images/img1.jpg" alt="" style="width:100%">
        <div class="w3-container">
          <p class="w3-opacity">
            Help the people of Gaza
          </p>
          <p>Civilians are paying a horrific price for the ongoing war.
          </p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="../images/img2.jpg" alt="" style="width:100%">
        <div class="w3-container">
          <p class="w3-opacity">
            Raising funds to evacuate civilians from Gaza
            </p>
          <p>Here are directions and tips if you want to raise money for those trying to leave Gaza.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="../images/img3.jpg" alt="" style="width:100%">
        <div class="w3-container">
          <p class="w3-opacity">
            Help my family in Gaza get to safety
           </p>
          <p> My cousin Mahmoud lives in Gaza and he lost his business and his house.
             Help him evacuate the Gaza Strip.</p>
        </div>
      </div>
    </div>
  </div>



</body>
</html>
