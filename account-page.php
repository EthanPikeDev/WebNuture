<?php session_start();
//start account logged in page info here
if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
    }

?>

Insert account details/information here. If you would like to logout please <a href="logout.php">Logout Here</a>