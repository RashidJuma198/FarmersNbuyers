<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Voters</title>
    <script src="register/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="register/bootstrap/js/popper.min.js"></script>
    <script src="register/bootstrap/js"></script>
    <link rel="stylesheet" href="register/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="register/bootstrap/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"  href="farmer.css" >
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">

</head>
<body class="img js-fullheight" style="background-image: url(images/best.jpeg);">
<div class="logintitle" style=" background-color:white">
        <h2><b>THIKA FARM PRODUCE <br>MANAGEMENT SYSTEM<br>ADMIN SITE</b></h2>
    </div>
    <button style="margin-left: 1400px;height: 40px;width: 100px;border-radius: 10px;">
    <a href="buyer_login.html">LOG OUT</a></button>
            <table class="table table-striped table-bordered table-hover table-striped table-dark">
                <tr>
                    <th>NO.</th>
                    <th>Product_Name</th>
                    <th>Product_Quality</th>
                    <th>Product_Quantity</th>
                    <th>Harvest_Date</th>
                    <th>Expiry_Date</th>
                    <th>Product_Location</th>
                    <th>Farmer_Name</th>
                    <th>Farmer_ID</th>
                    <th>Farmer_Phone</th>
                    <th>Price</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                //connect to the database
                $hostname="Localhost";
                $username="root";
                $password="";
                $dbname="thika";
                //connection
                $connection=mysqli_connect("$hostname","$username","$password","$dbname");
                //check the connnection
                if(!isset($connection)){
                    die("db connection failed!!");
                }

                $sql="SELECT * FROM farmer";
                //implementation using mysqli_query
                $access=mysqli_query($connection,$sql);
                //running the foreach loop
                foreach($access as $user){
                    $userid=$user["User_ID"];
                    $productname=$user["Product_Name"];
                    $productquantity=$user["Product_Quantity"];
                    $productquality=$user["Product_Quality"];
                    $Harvestdate=$user["Product_Harvest_Date"];
                    $expirydate=$user["Product_Expiry_Date"];
                    $location=$user["Product_Location"];

                    $Farmername=$user["Farmer_Name"];
                    $Farmer_ID=$user["Farmer_ID"];
                    $Farmer_PHONE=$user["Farmer_Phone_No"];
                    $Price=$user["Price"];
                    
                    echo "<tr>
                            <td>$userid</td>
                            <td>$productname</td>
                            <td>$productquantity</td>
                            <td>$productquality</td>
                            <td>$Harvestdate</td>
                            <td>$expirydate</td>
                            <td>$location</td>
                            <td>$Farmername</td>
                            <td>$Farmer_ID</td>
                            <td>$Farmer_PHONE</td>
                            <td>$Price</td>
                            <td>
                            <a class='btn btn-success' href='update.php?u_id=$userid&name=$productname&quantity=$productquantity
                            &quality=$productquality&expiry=$expirydate&harvest=$Harvestdate&location=$location&farmername=$Farmername&
                            farmerid=$Farmer_ID&farmerphone=$Farmer_PHONE&price=$Price'>Update</a></td>

                            <td><a class='btn btn-danger' href='delete.php?u_id=$userid'>Delete</a></td>
                            
                            
                         </tr>";
                }
                ?>

            </table>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
</body>
</html>