<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer</title>
    <link rel="stylesheet"  href="farmer.css" >
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">

</head>
<body class="img js-fullheight" style="background-image: url(images/nyanya.jpeg);">

        <h2 class="logintitle"><b>THIKA FARMER  <br>MANAGEMENT SYSTEM</b></h2>
    </div><br><br>
    <button style="margin-left: 1380px;height: 40px;width: 100px;border-radius: 10px;">
    <a href="index.html">LOG OUT</a></button><br><br>
    <div class="row justify-content-center">
			
    
                <form action="submitfarmer.php" Method="POST" class="signin-form"> 
                
                    <LEgend class="logintitle">Products Details</LEgend>
                    <label for="productname" class="logintitle">Product_Name:</label>
                    <input type="text" name="productname" id="productname" required>

                    <label for="quantity" class="logintitle">Product_Quantity:</label>
                    <input type="text" name="quantity" id="quantity" required><br><br><br>

                    <label for="quality" class="logintitle">Product_Quality:</label>
                    <input type="text" name="quality" id="quality" required>


                    <label for="harvest" class="logintitle">Product_Harvest_Date:</label>
                    <input type="date" name="harvest" id="harvest" required><br><br><br>

                    
                    <label for="expiry" class="logintitle">Product_Expiry_Date:</label>
                    <input type="date" name="expiry" id="expiry" required>

                    <label for="location" class="logintitle">Product_Location:</label>
                    <input type="text" name="location" id="location" required><br><br><br>

                    <label for="farmername" class="logintitle">Farmer_Name:</label>
                    <input type="text" name="farmername" id="farmername" required>

                    <label for="farmerid" class="logintitle">Farmer_ID:</label>
                    <input type="text" name="farmerid" id="farmerid" required><br><br><br>

                    <label for="phone" class="logintitle">Farmer_Phone_No:</label>
                    <input type="text" name="phone" id="phone" required>
            
            <label for="price" >Price per:</label>
            <select name="price" id="price"  style=" height:30px ;background-color:rgb(202, 245, 116) ;font-size:20px">
                <option   value="Grams">Grams</option>
                <option  value="Kilogram">Kilogram</option>
                <option  value="Sack">Sack</option>
                <option value="Tonne">Tonne</option>
                <input  type="number" name="price" id="price" placeholder="Kshs..">
            </select>
  

         
        
            <legend class="logintitle">Send To Buyer's</legend>
            <button type="submit" name="submit" style="margin-left: 300px;height: 40px;width: 100px;border-radius: 10px;">Send</button>
            <button type="reset" style="height: 40px;width: 100px;border-radius: 10px;">Reset</button>
            <button type="reset" style="height: 40px;width: 100px;border-radius: 10px;"><a href="index.html">Log Out</a></button>

  


</form>
</body>
</html>