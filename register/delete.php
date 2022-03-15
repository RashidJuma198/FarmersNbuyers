<?php
if(isset($_GET["u_id"])){
    $myId=$_GET["u_id"];
    //connecting to the database
    require_once "connect.php";

    //running the delete query
    $deleteQuery="DELETE FROM `farmer` WHERE User_ID='$myId'";
    //implementing the mysqli_query
    $del=mysqli_query($connection,$deleteQuery);
    //checking if the data has been deleted
    if(isset($del)){
        //if the data has been deleted redirect the system back to the view voters page
        header("location:View_voters.php");
    }else{
        echo "<script>alert('Data has not been deleted')</script>";
    }
}