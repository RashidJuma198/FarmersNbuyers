<?php
 $hostname="localhost:3307";
 $username="root";
 $password="";
 $dbname="elgon";
 //connection
 $connection=mysqli_connect("$hostname","$username","$password","$dbname");
 //check the connnection
 if(!$connection){
     die("db connection failed!!");
 }
 
if(isset($_POST["btn_add"])){
   $userid=$_POST["myid"];
   $productname=$_POST["pname"];
   $productquantity=$_POST["pquantity"];
   $productquality=$_POST["pquality"];
   $Harvestdate=$_POST["Hdate"];
   $ExpiryDate=$_POST["Edate"];
   $location=$_POST["location"];
   $Farmername=$_POST['fname'];
   $Farmer_ID=$_POST["fid"];
   $Farmer_PHONE=$_POST["fphone"];
   $Price=$_POST["price"];
   


   $hostname="localhost";
   $username="root";
   $password="";
   $dbname="elgon";
   //connection
   $connection=mysqli_connect("$hostname","$username","$password","$dbname");
   //check the connnection
   if(!$connection){
       die("db connection failed!!");
   }
   
 
  //update data
  $sql="UPDATE `farmer` SET `Product_Name`='$productname',`Product_Quantity`='$productquantity',
  `Product_Quality`='$productquality',`Product_Harvest_Date`='$Harvestdate',`Product_Expiry_Date`='$ExpiryDate',
  `Product_Location`='$location',`Farmer_Name`='$Farmername',`Farmer_ID`='$Farmer_ID',`Farmer_Phone_No`='$Farmer_PHONE',`Price`='$Price'
   WHERE `User_ID`='$userid';";
   //running the query
  $save=mysqli_query($connection,$sql);
  //check if the data as has been save
  if(!$save){
   die("Update Failed");   
  }else{
     header("location:View_voters.php");
  }

}