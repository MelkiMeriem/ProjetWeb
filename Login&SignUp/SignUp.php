<?php
  session_start();
?>     
<!DOCTYPE html>
<html lang="en">

<?php 
    include("../public/menu2.php");
    include("../DB/database.php"); 
  ?>

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
  <form class="modal-content" action="../Account/Account.php" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      <label for="age"><b>Age</b></label>
      <input type="text" placeholder="Enter Age" name="age" required>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les données du formulaire
  $name = $_POST["name"];
  $email = $_POST["email"];
  if("psw"=="psw-repeat"){  // Here, you're comparing two strings "psw" and "psw-repeat", not their respective POST values
      $psw = $_POST["psw"]; 
  } else {
      echo "the passwords entered are not identical"; 
  }
  $age = $_POST["age"];
  if(empty($name)){
      echo "please enter username"; 
  }
  if(empty($psw)){
      echo "please enter a password"; 
  } else {
      $hash=password_hash($psw,PASSWORD_DEFAULT);
  }
  if(empty($email)){
      echo "please enter you email"; 
  }
  if(empty($age)){
      echo "please enter your age"; 
  }
  if (!is_numeric($age)) {
      die("L'âge doit être numérique.");
  }
  if (!ctype_alnum($psw)) {
      die("Le mot de passe doit être alphanumérique.");
  }
} // Here's the closing curly brace for the if ($_SERVER["REQUEST_METHOD"] == "POST") block

// Ajouter les données à la base de données
$request = "INSERT INTO manaradb (name, email, psw , age ) VALUES ('$name', '$email', '$hash','$age')";
try {
  $stmt = mysqli_prepare($conn, $request);
} catch(mysqli_connect_error) {
  echo "could not register"; 
}

if ($stmt) {
  // Binder les paramètres
  mysqli_stmt_bind_param($stmt, "ssis", $name, $email, $age, $hash);
  // Exécuter la déclaration
  if (mysqli_stmt_execute($stmt)) {
      // Rediriger vers une page de confirmation
      echo "you are now signed up"; 
      header("Location: PrivatePage.php");
      exit;
  } else {
      echo "Erreur d'exécution de la requête : " . mysqli_error($conn);
  }
  // Fermer la déclaration
  mysqli_stmt_close($stmt);
} else {
  echo "Erreur de préparation de la requête : " . mysqli_error($conn);
}
// Fermer la connexion à la base de données
mysqli_close($conn);

?>
