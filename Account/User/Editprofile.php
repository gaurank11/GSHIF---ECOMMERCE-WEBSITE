<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
   

<style>
*{
    margin:0;
    padding:0;
}
 
.brand{
    list-style: none;
    margin-left: 670px;
    margin-top: 60px;
}

body{
    background: white;
}

div{
    padding:5px 5px;
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
    background-color:white;
    display: inline-block;
    position:absolute;
    border:2px solid navy;
    top:150px;
    left:600px;
    height:520px;
    width:350px;
    border-radius:10px;
}

.container h1{
    border-bottom: 5px solid purple;
    margin-bottom: 30px;
    padding:20px;
}

.name input{
   
   background: none;
   font-size: 17px;
   padding:5px 10px;
   width:70%;
    

}


.phone input{
       
   background: none;
   font-size: 17px;
   padding:5px 10px;
   width:70%;
    

}
.email input{
        
        background: none;
        font-size: 17px;
        padding:5px 10px;
        width:70%;
         
     
}


.password input{
    
    background: none;
    font-size: 17px;
    padding: 5px 8px;
    width:70%;
}

.confirmpassword input{
    
    background: none;
    font-size: 17px;
    padding: 5px 10px;
    width:70%;
}


.btn{

    background-color:grey;
    
    width:300px;
    height:50px;
    outline:none;
    cursor: pointer;
    border-radius: 5px;
    font-size: 22px;
    margin-top:8px;
}
.btn:hover{

    background-color: rgb(64, 62, 62);
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
    <div class="container">
       <h1>Edit Your Profile</h1>
             <form action="" method="POST"> 
             <div class="name">
                <label><h4>Your Name:</h4></label>
                <input type="name" name="name" id="name" placeholder="Full Name" required>
                </div>
        
                <div class="phone">
                <label><h4>Enter Your Phone Number:</h4></label>
                <input type="tel" class="phone" name="phone" placeholder="Enter 10 digit number" >
                </div>
                
             <div class="email">
                    <label><h4>Your Email:</h4></label>   
                  <input type="email" name="email" id="email" placeholder="Enter Your Email Id" required>
                </div>
                <div class="password">
                    <label><h4>New Password:</h4></label>
                  <input type="password" name="password" id="password" placeholder="At least 6 character">
                </div>

                <div class="confirmpassword">
                    <label><h4>Re-enter Password:</h4></label>
                  <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
                </div>
                  <div>
                <button type="Submit" class="btn" name="submit">Update Profile</button>
                </div>
                
</form>
     </div>
</body>
</html>




<?php

//including connection for local host//
include 'connection.php';


//isset is used as we end submit then where it store the data//
if(isset($_POST['submit'])){
 
    $Name = mysqli_escape_string($connection, $_POST['name']);
    $Email =  mysqli_escape_string($connection,$_POST['email']);
    $Mobile =  mysqli_escape_string($connection,$_POST['phone']);
    $password =  mysqli_escape_string($connection,$_POST['password']);
    $cpassword = mysqli_escape_string($connection,$_POST['cpassword']);
   
  //inserting SQL injections for more security// 
    $password =  mysqli_escape_string($connection,$_POST['password']);
    $cpassword = mysqli_escape_string($connection,$_POST['cpassword']);


    //Doing encryption of password so that it become difficult to hack//
    $pass= password_hash($password, PASSWORD_BCRYPT);
    $cpass= password_hash($cpassword, PASSWORD_BCRYPT);
    




    $updatequery1 = "update registration set name = '$Name' where Email='$Email' ";

    $res1= mysqli_query($connection,$updatequery1);

    $updatequery2 = "update registration set phone = '$Mobile' where Email='$Email' ";

    $res2= mysqli_query($connection,$updatequery2);

    $updatequery2 = "update registration set email = '$Email' where Email='$Name' ";

    $res3= mysqli_query($connection,$updatequery3);

     //Query for Password and Confirm Password//  

      if($password === $cpassword) {

        $updatequery = "update registration set password = '$pass' where Email='$Email' ";

        $res= mysqli_query($connection,$updatequery);

        
        }else{
        



        ?>

        <script>
    alert('Password is not matching');
    </script>
        
        <?php
      }
      }
    