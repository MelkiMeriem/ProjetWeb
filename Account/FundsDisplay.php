<?php   
    include("../DB/database.php");
    $MyEmail = $_SESSION["Email"];
    $sql="select * from fund where UserEmail = '$MyEmail' ";
?>
   <?php include("../PrivatePage/ShowFunds.php"); ?>