<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <?php include 'style.php' ?>
    <?php include 'link.php' ?>
    
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
       <h1>Welcome to G-SHIF</h1>
             <form action="" method="POST"> 
                <div class="name">
                <label><h4>Your Name:</h4></label>
                <input type="name" name="name" id="name" placeholder="Full Name" required>
                </div>
        
                <div class="email">
                    <label><h4>Your Email:</h4></label>   
                  <input type="email" name="email" id="email" placeholder="Enter Your Email Id" required>
                </div>

                <div class="phone">
                <label><h4>Enter Your Phone Number:</h4></label>
                <input type="tel" class="phone" name="phone" placeholder="Enter 10 digit number" required>
                </div>
                <div class="password">
                    <label><h4>Create Password:</h4></label>
                  <input type="password" name="password" id="password" placeholder="At least 6 character" required>
                </div>

                <div class="confirmpassword">
                    <label><h4>Re-enter Password:</h4></label>
                  <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
                </div>
                  <div>
                <button type="Submit" class="btn" name="submit">Sign Up</button>
                </div>
                <div class="hac">
                    <span>Already have a account? <a href="/php_practice/Account/login/login.php" class="al">Login</a></span>
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


  //inserting SQL injections for more security// 
    $Name = mysqli_escape_string($connection, $_POST['name']);
    $Email =  mysqli_escape_string($connection,$_POST['email']);
    $Mobile =  mysqli_escape_string($connection,$_POST['phone']);
    $password =  mysqli_escape_string($connection,$_POST['password']);
    $cpassword = mysqli_escape_string($connection,$_POST['cpassword']);


    //Doing encryption of password so that it become difficult to hack//
    $pass= password_hash($password, PASSWORD_BCRYPT);
    $cpass= password_hash($cpassword, PASSWORD_BCRYPT);
    
    //for random token//

    $token = (rand(1000,10000));

   //Query for already existing mobile number//

    $phonequery="select * from registration where Mobile='$Mobile'";
    $ps = mysqli_query($connection,$phonequery);

    $phonecount = mysqli_num_rows($ps);

    if($phonecount>0){
      echo"Mobile Number already exists";
    }else {

    //Query for already existing Email//

    $emailquery="select * from registration where Email='$Email'";
    $qs = mysqli_query($connection,$emailquery);

    $emailcount = mysqli_num_rows($qs);

    if($emailcount>0){
      echo"email already exists";
    }else {

     //Query for Password and Confirm Password//  

      if($password === $cpassword) {


        $insertquery = "insert into registration(Name,Email,Mobile,Password,Confirm,Token,Status) values('$Name','$Email','$Mobile','$pass','$cpass','$token','inactive')";

        $res= mysqli_query($connection,$insertquery);

        //for mailing//

        if($res){
          
          $subject ="Email Verification";
          $body = " Your G-SHIF Verification Code is $token 
          
Thanks";
          $sender_email ="From: gshif05@gmail.com";

          if(mail($Email, $subject, $body, $sender_email)){
          echo"Check Your Email to verify your account";
              
              /*$_SESSION['msg'] = "Check your mail to verify your email address $Email";
              header('location:login.php');

            }else{
              echo"Verification failed";
            }*/
      

           
        ?>
         <script> location.replace("activeotp.php"); 
        </script>
         
         <?php
         
        }
        if($res){
          
          $subject ="Welcome TO G-SHIF";
          $body = "Hi, $Name. Welcome to G-SHIF Family. We are happy to see in our G-SHIF Family. Hope You will have a great journey with G-SHIF.
       
          
Thanks";
            $sender_email ="From: gshif05@gmail.com";

            if(mail($Email, $subject, $body, $sender_email)){
            echo"Check Your Email to verify your account";
            }

      }else{


        ?>

        <script>
    alert('Password is not matching');
    </script>
        
        <?php
      }
      }
    }
  }
}
    }
  




 // bin2hex//

?>