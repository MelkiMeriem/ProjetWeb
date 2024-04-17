<?php
      
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // Fetch associative array
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $CampaignID=$row["CampaignID"];
      $Date=$row["Date"];
      $Amount=$row["Amount"];
      $Compaign_name_sql = "SELECT * FROM campaign Where CampaignID = '$CampaignID'";
      $Compaign_name_sql_result = mysqli_query($conn, $Compaign_name_sql);
      if (mysqli_num_rows($Compaign_name_sql_result) == 1){
        $Compaign_name_row = mysqli_fetch_array($Compaign_name_sql_result);
        $CampaignName = $Compaign_name_row["Name"];
      }
      else{
        $CampaignName = "This Campaign does not exist";
      }

      echo '
        <div class="fundRow row">
            <div class="col" name="campaign">
                <h5>Compaign</h5>
                <p class="p">'.$CampaignName.'</p>
            </div>
            
            <div class="col">
                <h5>Amount</h5>
                <p class="p">'.$Amount.'</p>
            </div>
            
            <div class="col">
                <h5>Date</h5>
                <p class="p">'.$Date.'</p>
            </div>
        </div>' ;};}
  mysqli_close($conn);

    ?>