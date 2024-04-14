<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Dashboard.css">
    <title>UsersTable</title>
</head>
<body>
  <?php 
    include ("./DisplayNav.php");
    DisplayNav("./Dashboard_campaigns.php","See Campaigns Dashboard")?>

  <p1 id="title">Users Table</p1>
    

    <?php
    include('../DB/database.php');
    include('./TableDisplay.php');
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);

        $data = []; 
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row; 
            }
        }

        $tableHeaders = ["Name", "Age", "Email", "Password","Phone Number"];

        displayTable($data, $tableHeaders, "CampaignID", "Campaign");
?>

<div id="container">
        <form action="Dashboard_users.php" method="post">
            <input type="text" name="email" id="input1">
            <div class="labelline">Delete User</div>
            <br>
            <input type="submit" name="submit" value="Delete" id="submit"> 
            
        </form>

        <?php
        require_once('./DeleteData.php'); 
        if (isset($_POST['submit'])) {
          if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            deleteData($conn, 'user', 'email', $email); 
          } else {
            echo "<p>Please enter a user email to delete.</p>";
          }
        }
        mysqli_close($conn);
        if (isset($_POST['changedash']))
          {header("Location: ./Dashboard_campaigns.php");}
        ?>
  
    
</body>
</html>