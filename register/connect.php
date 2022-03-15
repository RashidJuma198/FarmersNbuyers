<?php
$hostname="localhost:3307";
$username="root";
$password="";
$dbname="thika";
//connection
$connection=mysqli_connect("$hostname","$username","$password","$dbname");
//check the connnection
if(!isset($connection)){
    die("db connection failed!!");
}
