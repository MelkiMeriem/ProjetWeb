<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="../Login&SignUp/style.css">
    <link rel="stylesheet" href="../HomePage/HomePage.css">
      <script src="../HomePage/HomePage.js"></script>

    <title>Document</title>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
      <h3 class="w3-padding-64"><b>Manara</b></h3>
    </div>
    <div class="w3-bar-block">
    <a href="../PrivatePage/PrivatePage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
      <a href="../CreateCampaign/CreateCampaign.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Create Campaign</a> 
      <a href="../Account/Account.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Account</a> 
      <a href="../HomePage/HomePage.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log out</a> 
  
    </div>
  </nav>
  
  <!-- Top menu on small screens -->
  <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
      <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
      <span>Manara</span>
    </header>
  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:340px;margin-right:40px">
  
    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
    <?php
    $email=$_POST["email"];
    $psw=$_POST["psw"];
    $amt=$_POST["amt"];
    $cid=$_POST["cid"];
    $currentDate = date("Y-m-d H:i:s");
    $link=mysqli_connect("localhost","root","","manaradb");
    $sql="select * from user where  Email='$email' and Password='$psw'
    ";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        $req1="  insert into fund (fundid ,CampaignID,UserEmail,UserPassword,Date,Amount) 
        values('','$cid','$email' ,'$psw','$currentDate','$amt')";
        
        $req2="
        Update Campaign
        set budget=budget+'$amt'
        where CampaignID='$cid'
        ";
        mysqli_query($link,$req1);
        mysqli_query($link,$req2);
        echo " <h1 class='w3-jumbo'><b>Thank you for your help . </b></h1>";

        
    }
    else{
        echo " <h1 class='w3-jumbo'><b> Wrong Mail or Password. </b></h1>";

    }
    mysqli_close($link);

    ?>
     
    </div>
  

  
    

</div>
    
  
</body>
</html>