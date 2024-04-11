<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaigns Dashboard</title>
    <link rel="stylesheet" href="./Dashboard.css">
</head>
<body>
    <p1 id="title">Campaigns Dashboard</p1>
    <hr>

    <?php
    include('./DB_Connexion.php');
    include('./TableDisplay.php');
        $sql = "SELECT * FROM campaign";
        $result = mysqli_query($conn, $sql);

        $data = []; // Initialize empty array for table data
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row; // Add each row to the data array
            }
        }

        // Table headers for campaigns
        $tableHeaders = ["Name", "Purpose", "Owner Email", "Owner Password", "Campaing ID", "Budget", "Imagelink"];

        // Call displayTable function
        displayTable($data, $tableHeaders, "CampaignID", "Campaign");
?>

    <div id="container">
        <form action="Dashboard_campaigns.php" method="post">
            <input type="text" name="id" id="input1" required>
            <div class="labelline">Delete Campaign</div>
            <br>
            <input type="submit" name="submit" value="Delete" id="submit">
        </form>

        <?php
        require_once('DeleteData.php'); // Include the deleteData.php file

        if (isset($_POST['submit'])) {
          if (isset($_POST['id']) && !empty($_POST['id'])) {
            $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
            deleteData($conn, 'campaign', 'CampaignID', $id); // Call the delete function
          } else {
            echo "<p>Please enter a Campaign ID to delete.</p>";
          }
        }
        mysqli_close($conn);
        ?>
    </div>


</body>
</html>
