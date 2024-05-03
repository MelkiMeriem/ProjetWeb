<?php
session_start();
$_SESSION["Verified"]=false;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./admin.css">
</head>
<body>
    <div id="div1">
        <h1>Admin Authentication</h1>
        <form action="./admin_authent.php" method="post">
           <input type="text" name="admin_name" placeholder="admin" autofocus id="name" > 
           <input type="password" name="admin_password" placeholder="password" id="pass">
           <input type="submit" name="verify_button" value="Access " id="submit">
            <?php
        $message1="Enter Password and username";
        $message2="Authentication Failed";
        if (isset($_POST["verify_button"]))
        {
            if(isset($_POST["admin_name"]) && isset($_POST["admin_password"]) && !empty($_POST["admin_name"]) && !empty($_POST["admin_password"]))
            {
                if($_POST["admin_name"]=="admin" && $_POST["admin_password"]=="admin")
                    {
                        $_SESSION["Verified"]=true;
                        header("Location: ./Dashboard_users.php");
                    }
                else{
                    echo "<p class='error_text'>{$message2}</p>";

                }    
            }
            else
            { echo "<p class='error_text'>{$message1}</p>";
            

                
            }

        }
        ?>
        </form></div>
       

       
</body>
</html>
