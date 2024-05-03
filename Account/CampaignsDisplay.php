<?php
      include("../DB/database.php");
      $MyEmail = $_SESSION["Email"];
      $sql="select * from campaign Where OwnerEmail = '$MyEmail' ";
    ?>
   <?php include("../PrivatePage/ShowCampaigns.php"); ?>
            
    </div>