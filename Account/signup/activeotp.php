<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>

    <style> 

.brand{
    list-style: none;
    margin-left: 600px;
    margin-top: 150px;
}
.brand img{
    width: 80px;
}
.brand li{
    display: flex;
    align-items: center;
    font-size: 25px;
    font-family: 'Libre Baskerville', serif;
font-family: 'Roboto', sans-serif;

}
  .container{
    position:absolute;
    border:4px solid navy;
    margin:10px 600px;
    width:300px;
    
    background-color:white;
  }

  .otp{
    postion:absolute;
    margin:5px 45px;
  }

  .text{
    postion:absolute;
    margin:5px 40px;
  }

  .Submit{
    postion:absolute;
    margin:15px 95px;
  }
  .para{
    background-color:#90EE90;
  }


</style> 

</head>
<body>
<header>
        <div class="brand">
          <ul>
            <li div="brand name">
          <img src="/php_practice/logo/gshiflogo.ico" alt="G-SHIF"><h3>G-SHIF</h3></li>
        </div>
      </header>
<form action="" method="POST">

<div class="container">


     <div class='text'>
        <h2>Enter Your OTP<h2> </div>
         <hr>
        <div class='para'>
        <p>OTP sent successfully on you mail id. Please Check Your Inbox.<p> </div>

      <div class="otp">
        <input type="text" id="otp" name="otp" placeholder=" OTP" required>

</div>

<div class="Submit">
<button type="Submit" class="btn" name="submit">Submit</button>
</div>


</div>
    
    </form>
    
</body>
</html>



<?php

//including connection for local host//
include 'connection.php';

if(isset($_POST['submit'])){

    $Token = mysqli_escape_string($connection,$_POST['otp']);


    $TokenQuery="select * from registration where Token='$Token'";
    $pss = mysqli_query($connection,$TokenQuery);

    $Tokencount = mysqli_num_rows($pss);


    if($Tokencount>0){

      $updatequery = "update registration SET Status='active' ";

      $query = mysqli_query($connection,$updatequery);

      if($query){
      echo "Account Created Successfully";

      ?>
      <script> 
      location.replace("/php_practice/Account/login/login.php"); 
     </script>
      
      <?php
      
     }

    }else {
        echo"Incorrect OTP";}
    }


?>