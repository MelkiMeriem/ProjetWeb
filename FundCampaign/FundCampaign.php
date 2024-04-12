<?php
  session_start();
  include("../DB/database.php");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
 
    $cid=$_SESSION["id"] ;
    $psw=$_SESSION["psw"] ;
    $email=$_SESSION["Email"] ;
    $amt=$_POST["amt"];
    $currentDate = date("Y-m-d H:i:s");
        $req1="  INSERT into fund (fundid ,CampaignID,UserEmail,UserPassword,Date,Amount) 
        values('','$cid','$email' ,'$psw','$currentDate','$amt')";
        
        $req2="
        Update Campaign
        set budget=budget+'$amt'
        where CampaignID='$cid'
        ";
        mysqli_query($conn,$req1);
        echo " <h1 class='w3-jumbo'><b>Thank you for your help . </b></h1>";

        
    }
    else{
        echo " <h1 class='w3-jumbo'><b> Wrong Mail or Password. </b></h1>";

    }
    
       
  
  
mysqli_close($conn);
?>
<?php
include("../public/menu2.php");
?>

  <?php 
 
  echo "
  <body>
  <div class='w3-main' style='margin-left:340px;margin-right:40px'>

  <form class='modal-content' action='' method='POST'>
    <div class='container'>
      <h1>Fund Campaign</h1>
      <p>Please fill in this form to Fund the Campaign.</p>
      <hr>
      <label for='email'><b>Email :</b></label>
      <input type='text' VALUE='$email' name='email' disabled >
    
      <label for='amt'><b>Campaign's ID : </b></label><br>
      <input type='text' name='cid' disabled value='$cid' >
       <br>
      <label for='amt'><b>Amount</b></label><br>
      <input type='text' placeholder='Enter the Amount' name='amt' required>

     

      <div class='clearfix'>
        <button type='submit' class='signup'>Fund The Campaign</button>
      </div>
    </div>
  </form>
</div>
</body>"
    
?>
<?php

?>