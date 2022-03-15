<?php
if(isset($_GET["u_id"])){
    $userid=$_GET["u_id"];
    $productname=$_GET["name"];
    $productquantity=$_GET["quantity"];
    $productquality=$_GET["quality"];
    $Harvestdate=$_GET["harvest"];
    $ExpiryDate=$_GET["expiry"];
    $location=$_GET["location"];
    $Farmername=$_GET['farmername'];
    $Farmer_ID=$_GET["farmerid"];
    $Farmer_PHONE=$_GET["farmerphone"];
    $Price=$_GET["price"];

 
require_once "connect.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Farmer</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <h2 class="text-center text-info"> Update Farmer</h2>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="vote_handler.php" method="POST">
                Product_Name
                <input class="form-control" name="pname" type="text"  value="<?php echo $productname?>"
                  ><br><br>
                  Product_Quantity
                <input class="form-control"  name="pquantity" type="text" value="<?php echo  $productquantity?>"
                ><br><br>
                 Product_Quality
                <input  class="form-control" type="text" name="pquality" id="" value="<?php echo  $productquality?>">
                <br><br>
                Harvest_Date
                <input  class="form-control" type="text" name="Hdate" id="" value="<?php echo  $Harvestdate?>"><br><br>
                Expiry_Date
                <input  class="form-control" type="text" name="Edate" id="" value="<?php echo  $ExpiryDate?>"><br><br>
                Location
                <input  class="form-control" type="text" name="location" id="" value="<?php echo  $location?>"><br><br>
                Name_Of_The_Farmer
                <input  class="form-control" type="text" name="fname" id="" value="<?php echo  $Farmername?>"><br><br>
                Farmer_ID
                <input  class="form-control" type="text" name="fid" id="" value="<?php echo  $Farmer_ID?>"><br><br>
                Farmer_Phone
                <input type="type" class="form-control" type="text" name="fphone" id="" value="<?php echo  $Farmer_PHONE?>"><br><br>
                Product_Price
                <input  class="form-control" type="text" name="price" id="" value="<?php echo  $Price?>"><br><br>
                <input type="hidden" name="myid" value="<?php echo $userId?>">
                <input type="submit" name="btn_add" class="btn btn-outline-info btn-block" value="Update">
                <a  href="view_voters.php" class="btn btn-outline-info btn-block">Back</a>
                
            </form>
        </div>
        <div class="col-md-2"></div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
</body>
</html>