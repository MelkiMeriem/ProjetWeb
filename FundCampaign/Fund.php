<?php
  session_start();
  include("../DB/database.php");

?>
  <body>

<?php
include("../public/menu2.php");
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
  $cid=$_SESSION["cid"] ;
  $psw=$_SESSION["psw"] ;
  $email=$_SESSION["Email"] ;
  $amt=$_POST["amt"];
  $currentDate = date("Y-m-d H:i:s");
      $req1="INSERT into fund (fundid ,CampaignID,UserEmail,UserPassword,Date,Amount) 
      values('','$cid','$email' ,'$psw','$currentDate','$amt')";
      
      $req2="
      UPDATE Campaign
      SET Budget=Budget+'$amt'
      where CampaignID='$cid'
      ";

      if(mysqli_query($conn,$req1)){
        mysqli_query($conn,$req2);

        echo  "<div class='w3-main' style='margin-left:340px;margin-right:40px' margin-top:40px> <h1 class='w3-jumbo'><b> Thank you for your help. </b></h1> </div>";
       }
     else{
         echo "<div class='w3-main' style='margin-left:340px;margin-right:40px margin-top:40px'> <h1 class='w3-jumbo'><b> Wrong Mail or Password. </b></h1> </div>";
      
  }


  }

     


mysqli_close($conn);
?>
</body>

