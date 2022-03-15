<?php
SESSION_START();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thika";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Not connected");
}
mysqli_select_db($conn, 'thika');
$user = $_POST['username'];
$password = $_POST['pass'];
$sql = "select * from `registration` where USERNAME='$user' AND PASSWORD='$password'";
$run = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($run);
if ($rows == 1) {
    header("location:index.html?WrongUsernameOrPassword");
} else {
    header("location:farmer.php");
}



