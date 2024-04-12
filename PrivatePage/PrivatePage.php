
<?php
include("../public/menu2.php");
?>  
<div class="w3-main" style="margin-left:340px;margin-right:40px">
  
<!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
  <h1 class="w3-jumbo"><b>Your platform for mutual aid</b></h1>
</div>
<div class="w3-row-padding w3-grayscale">
<?php
  session_start();
  include("../DB/database.php");
    $sql="SELECT * from campaign";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $name=$row["Name"];
      $imagelink=$row["Imagelink"];
      $purpose=$row["Purpose"];
      $id=$row["CampaignID"];
      $_SESSION["imagelink"]=$imagelink;
      $_SESSION["id"]=$id;
      echo "
      <div class='w3-col m4 w3-margin-bottom'>
      <div class='w3-light-grey' style='height:80%'>
        <img src='../images/$imagelink' alt='' style='width:100%'>
        <div class='w3-container'>
          <p class='w3-opacity'>
           '$name'
            </p>
          <p>'$purpose' 
           <form method='POST' action='../FundCampaign/FundCampaign.php'  >
           <input type='text' value='$id'  id='cid' name='cid' disabled >
          <input type='submit' value='Fund Campaign' id='btn' name='btn'>
          </form></p>
         
        </div>
      </div>
    </div>" ;
      }
      
    }
    mysqli_close($conn);

   
 
 

    ?>
    </div>

 </div>   