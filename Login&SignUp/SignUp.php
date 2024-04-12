<!DOCTYPE html>
<html lang="en">
<<?php 
    include("../public/menu1.php");
  ?>
  

<!-- Sign up Form -->
    <!-- Button to open the modal -->

<!-- The Modal (contains the Sign Up form) -->
<div>
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
    </div>
  </form>
</div>
    
  
</body>
</html>