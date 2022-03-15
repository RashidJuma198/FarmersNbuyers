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


if(isset($_POST["submit"])){

  $productname=$_POST['productname'];
  
  $quantity=$_POST['quantity'];
  $quality=$_POST['quality'];
  $harvest=$_POST['harvest'];
  $expiry=$_POST['expiry'];
  $location=$_POST['location'];
  $farmername=$_POST['farmername'];
  $farmid=$_POST['farmerid'];
  $phone=$_POST['phone'];
  $price=$_POST['price'];
  


$sql="INSERT INTO farmer ( `Product_Name`, `Product_Quantity`, `Product_Quality`, `Product_Harvest_Date`,
 `Product_Expiry_Date`, `Product_Location`, `Farmer_Name`, `Farmer_ID`, `Farmer_Phone_No`,`Price`)
 VALUES ('$productname', '$quantity', '$quality', '$harvest', '$expiry', '$location', '$farmername', '$farmid', '$phone','$price');";

$result=mysqli_query($connection,$sql);

if($result===TRUE){
 header("location:farmer.php?Record_Delivered");
  }else{
     echo "Record has Not been entered successfully:".$conn->error;
  }
}

$conn->close();

/*

  $productname=$_POST['name'];
  $quantity=$_POST['quantity'];
  $quality=$_POST['quality'];
  $harvest=$_POST['harvest'];
  $expiry=$_POST['expiry'];
  $location=$_POST['location'];
  $farmid=$_POST['farmerid'];
  $phone=$_POST['phone'];
  $farmername=$_POST['farmername'];


  $sql="INSERT INTO farmer(Product_Name,Product_Quantity,Product_Quality,
  Product_Harvest_Date,Product_Expiry_Date,Product_Location,Farmer_Name,Farmer_ID,Farmer_Phone_No)
  VALUES('$productname','$quantity','$quality','$harvest', '$expiry','$location','$farmid','$phone','$farmername');";

  $result=mysqli_query($conn,$sql);
  if(!($result==True)){
     echo "Record Not Entered".$conn->error;
 }else{
   echo "Record Entered";
 }
 
*/




?>
