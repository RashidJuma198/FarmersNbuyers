<?php
SESSION_START();
header("location:buyer.php");
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "elgon";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Not connected");
}
mysqli_select_db($conn, 'elgon');
$user = $_POST['username'];
$password = $_POST['pass'];
$sql = "select * from `buyer` where USERNAME='$user' AND PASSWORD='$password'";
$run = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($run);
if ($rows == 1) {
    header("location:buyer_login.html?WrongUsernameOrPassword");
} else {
    header("location:buyer.php");
}




