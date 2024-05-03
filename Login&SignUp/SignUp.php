<?php
  session_start();
?>     
<!DOCTYPE html>
<html lang="en">

<?php 
    include("../public/menu1.php");
  ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="../HomePage/HomePage.css">
      <script src="../HomePage/HomePage.js"></script>

</head>

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
  </div>
</div>


<!-- Sign up Form -->
    <!-- Button to open the modal -->

<!-- The Modal (contains the Sign Up form) -->
  <form class="modal-content" action="" method="POST" autocomplete="off">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      <label for="age"><b>Age</b></label>
      <input type="text" placeholder="Enter Age" name="age" required>
      <label for="phone"><b>Phone Number</b></label>
      <input type="text" placeholder="Enter Phone Number" name="phone" required>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="submit" class="signup" value="Sign Up">Sign up</button>
      </div>
  </form>
</body>
</html>

<?php
    include("../DB/database.php"); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données du formulaire
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $psw = $_POST["psw"];
  $psw_repeat = $_POST["psw-repeat"];
  $age = $_POST["age"];
  
  // Verify passwords match
  if ($psw != $psw_repeat) {
      echo "The passwords entered are not identical"; 
      exit;
  }
  

  // Validate other fields
  if (empty($name) || empty($psw) || empty($email) || empty($age) || empty($phone)) {
      echo "Please fill in all fields"; 
      exit;
  }
  
  if (!is_numeric($age)) {
      echo "Invalid age"; 
      exit;
  }
  
  if (!is_numeric($phone)) {
      echo "Your Phone Number is Invalid"; 
      exit;
  }
  
  if (!ctype_alnum($psw)) {
      echo "Your Password must contain Letters and Numbers only"; 
      exit;
  }
  
  
  $request = "INSERT INTO user (Name, Email, Password, Age, Phone) VALUES ('$name', '$email', '$psw', '$age', '$phone')";
  mysqli_query($conn, $request);
  echo "You are now signed up"; 
  header("Location: PrivatePage.php");
}
?>