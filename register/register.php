<?php
SESSION_START();
header("location:index.html");
$servername="localhost:3307";
$username="root";
$password="";
$dbname="elgon";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Not connected");
}
mysqli_select_db($conn,'elgon');
$user=$_POST['username'];
$password=$_POST['pass'];
$sql="select * from `registration` where USERNAME='$user' AND PASSWORD='$password'";
$run=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($run);
if($rows == 1){
    header("location:register.html?UserNameExist");
}else{
    $insertQuery="INSERT INTO registration(ID,USERNAME,PASSWORD) VALUES(NULL,'$user','$password')";
    $SAVE=mysqli_query($conn,$insertQuery);
}


