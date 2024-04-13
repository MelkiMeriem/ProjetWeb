<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_server = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "manaradb";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    if (!$conn) {
        throw new Exception("Could not connect: " . mysqli_connect_error());
    }
   //echo "Connected successfully";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>