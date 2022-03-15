<?php
if(isset($_POST["btn_add"])){
   $userid=$_POST['myid'];
   $productname=$_POST['pname'];
   $productquantity=$_POST['pquantity'];
   $productquality=$_POST['pquality'];
   $Harvestdate=$_POST['Hdate'];
   $ExpiryDate=$_POST['Edate'];
   $location=$_POST['location'];
  // $Farmername=$_POST'fname'];
   $Farmer_ID=$_POST['fid'];
   $Farmer_PHONE=$_POST['fphone'];
   $Price=$_POST['price'];
   

     //connect to the database to save
     require_once "connect.php";
     //Entering data      //connect to the database to save
  require_once "connect.php";
  //update data
  $sql="UPDATE `farmer` SET `Product_Name`='$productname',`Product_Quantity`='$productquantity',`Product_Quality`='$productquality',
   `Product_Harvest_Date`='$Harvestdate',`Product_Expiry_Date`='$ExpiryDate',`Product_Location`='$location',`Farmer_Name`='$Farmername',
    `Farmer_ID`='$Farmer_ID',`Farmer_Phone_No`='$Farmer_PHONE',`Price`='$Price' WHERE `User_ID`='$userid' ";
  /*$sql="INSERT INTO `farmer`(`User_ID`, `Product_Name`, `Product_Quantity`, `Product_Quality`, 
  `Product_Harvest_Date`, `Product_Expiry_Date`, `Product_Location`, `Farmer_Name`, `Farmer_ID`, `Farmer_Phone_No`, `Price`) 
  VALUES (NULL,'$productname','$productquantity','$productquality',
  '$Harvestdate','$ExpiryDate','$location','$Farmername','$Farmer_ID','$Farmer_PHONE','$Price')";*/
  //running the query
  $save=mysqli_query($connection,$sql);
  //check if the data as has been save
  if(isset($save)){
   header("location:View_voters.php");
   
      
  }else{
     echo "<script>alert('Data Not Saved Successfully')</script>";
  }

}