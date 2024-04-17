
<<<<<<< HEAD
<?php
include("../public/menu2.php");
?>  
<div class="w3-main" style="margin-left:340px;margin-right:40px">
=======
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
      <a href="../CreateCampaign/CreateCampaign.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Create Campaign</a> 
      <a href="../Account/Account.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Account</a> 
      <a href="../HomePage/HomePage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log out</a> 
  
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
>>>>>>> a4f4117 (progression)
  
    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
      <h1 class="w3-jumbo"><b>Your platform for mutual aid</b></h1>
    </div>
    <div class="w3-row-padding w3-grayscale">

    <?php
      $link=mysqli_connect("localhost","root","","manaradb");

    $sql="select * from campaign";
    $result = mysqli_query($link, $sql);

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
  mysqli_close($link);

    ?>
    </div>

 </div>   