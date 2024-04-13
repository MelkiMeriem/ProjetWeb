<?php
      
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // Fetch associative array
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $name=$row["Name"];
      $imagelink=$row["Imagelink"];
      $purpose=$row["Purpose"];
      $id=$row["CampaignID"];


      echo "
    <div class='w3-col m4 w3-margin-bottom'>
    <div class='w3-light-grey'>
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
  </div>" ;};}
  mysqli_close($conn);

    ?>