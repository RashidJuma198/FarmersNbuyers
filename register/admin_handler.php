<?php
SESSION_START();
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "thika";

$conn = mysqli_connect("$servername", "$username", "$password","$dbname");

if (!$conn) {
    die("Not connected");
}

$user = $_POST['username'];
$password = $_POST['pass'];
$sql = "select * from `registration` where USERNAME='Maureen' AND PASSWORD='MA'";
$run = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($run);
if ($rows == 1) {
    header("location:View_voters.php");
} else {
    
    header("location:admin.php?WrongUsernameOrPassword");
}

