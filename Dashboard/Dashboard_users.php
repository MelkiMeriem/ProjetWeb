<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Dashboard.css">
    <title>Users_Table</title>
</head>
<body>
    <p1 id="title">Users_Table</p1>
    <hr>

    <?php
    include('./DB_Connexion.php');
    include('./TableDisplay.php');
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);

        $data = []; // Initialize empty array for table data
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row; // Add each row to the data array
            }
        }

        // Table headers for campaigns
        $tableHeaders = ["Name", "Age", "Email", "Password"];

        // Call displayTable function
        displayTable($data, $tableHeaders, "CampaignID", "Campaign");
?>

<div id="container">
        <form action="Dashboard_users.php" method="post">
            <input type="text" name="email" id="input1" required>
            <div class="labelline">Delete User</div>
            <br>
            <input type="submit" name="submit" value="Delete" id="submit">
        </form>

        <?php
        require_once('./DeleteData.php'); // Include the deleteData.php file

        if (isset($_POST['submit'])) {
          if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            deleteData($conn, 'user', 'email', $email); // Call the delete function
          } else {
            echo "<p>Please enter a user email to delete.</p>";
          }
        }
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>