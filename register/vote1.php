<?php
if(isset($_POST["btn_add"])){
    $Votersname=$_POST["votername"];
    $VotersID=$_POST["voterid"];
    $VotersCounty=$_POST["votercounty"];
    $VotersGender=$_POST["votergender"];
    $VotersPhone=$_POST["voterphone"];
   //connecting to the database
   require_once "connect.php";

   //inserting data to the database
   $sql="INSERT INTO `voter`( `V_name`, `V_id_number`,
    `V_county`, `V_gender`, `V_phone`) 
    VALUES ('$Votersname','$VotersID',
   '$VotersCounty','$VotersGender','$VotersPhone')";
    //implementing the $sql query
   $save=mysqli_query($connection,$sql);
   //checking if the data has been entered succesfully
   if(isset($save)){
       
        header("location:add_vote.php");
        echo "<div class='alert alert-success'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>";
        
   }else{
    echo "<script>alert('Data Not saved Succussfuly!!')</script>";
   }
   
}