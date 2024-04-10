<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Dashboard_campaigns.css">
</head>
<body>
    <p1 id="title">Campaigns Dashboard</p1>
    <hr>
    <table width="1800" class="content-table">
        <thead>
            <tr class="first_row">
                <th width="200">Name</th>
                <th width="100">Campaign ID</th>
                <th width="700">Purpose</th>
                <th width="200">Owner Email</th>
                <th width="400">OwnerPassword</th>
                <th width="100">Budget</th>
                <th width="200">Imagelink</th>
            </tr>
        </thead>
        <tbody>         
        <?php
        try{
            $db_server="localhost";
            $db_user="root";
            $db_pass="";
            $db_name="manaradb";    
        $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
        
        $sql= "SELECT * FROM campaign";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td>" . $row["CampaignID"] . "</td>";
                echo "<td>" . $row["Purpose"] . "</td>";
                echo "<td>" . $row["OwnerEmail"] . "</td>";
                echo "<td>" . $row["OwnerPassword"] . "</td>";
                echo "<td>" . $row["Budget"] . "</td>";
                echo "<td>". $row["Imagelink"] ."</td>";
                echo "</tr>";
                }
                
        }echo"</tbody>";
        
        mysqli_close($conn);}
        catch(mysqli_sql_exception){
            echo "could not connect to database";
        }
    ?>

    </tbody>
    </table>
    <div id="container">
        <form action="Dashboard_campaigns.php" method="post">
            
            <input type="text" name="id" id="input1" required>
            <div class="labelline">Delete Campaign</div>
            <br>
            <input type="submit" name="submit" value="Delete" id="submit">
            
        </form>
    
    <?php 
    
    $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    if(isset($_POST["submit"])){
    if(isset($_POST["id"])&& !empty($_POST["id"]))  
    {  
        $id=filter_input(INPUT_POST,"id",FILTER_VALIDATE_INT);
        if(empty($id))
        {echo"<p>Enter a correct CampaignID</p>";}
        else{
        $sql = "DELETE FROM campaign WHERE CampaignID = $id";
        if(mysqli_query($conn,$sql)){
        if(mysqli_affected_rows($conn)>0)
            {   echo "<p>Record deleted successfully</p>";
                //this will reload the page after 1.7 seconds 
                //so that the message is shown then the reloading happens
                echo"<script>
                setTimeout(()=>{window.location.href='http://localhost/ProjetWeb/Dashboard/Dashboard_campaigns.php';},1700)
                </script>";
            }
            else{
                echo"<p>No records found with the given Campaign ID</p>";
            }
        mysqli_close($conn);
        }
        else{
            echo "<p>Error deleting record</p>";
        }
       } 

    }  
    else{
        echo"<p>to delete a compaign: enter a valid CampaignID</p>";
    }}
    ?>
        
    </php></div>
</body>
</html>


