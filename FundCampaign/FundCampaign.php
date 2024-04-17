<?php
  session_start();
  include("../DB/database.php");
 
    $cid=$_SESSION["id"] ;
    $psw=$_SESSION["psw"] ;
    $email=$_SESSION["Email"] ;
?>
<?php
include("../public/menu2.php");
?>

  <?php 
 
  echo "
  <body>
  <div class='w3-main' style='margin-left:340px;margin-right:40px'>

  <form class='modal-content' action='Fund.php' method='POST'>
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
