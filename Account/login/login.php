<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php include 'stylel.php' ?>
    <?php include 'link.php' ?>
  <?php session_start();
  ?>
</head>
<body>
  <?php

  //including connections//
include 'connection.php';
if(isset($_POST['submit'])){

  //defining the values from form //
  $Email = $_POST['email'];
  $Password = $_POST['password'];

   
  //query to check whether email exists or not in database// 
  $email_search =" select * from registration where Email='$Email' and status='active'";
  $query = mysqli_query($connection,$email_search);
  
  $email_count = mysqli_num_rows($query);

  if($email_count){
       $email_pass = mysqli_fetch_assoc($query);

       //This Query and Password is to connect from database//

       $dbpass= $email_pass['Password'];

       $_SESSION['Name'] = $email_pass['Name'];

       $pass_decode = password_verify($Password,$dbpass);

       if($pass_decode){
      
          $subject ="Welcome to G-SHIF";
          $body = "Hii Customer, You recently logged in G-SHIF WEBSITE. If you didn't login then Please Change your Password.
                  
          
Thanks";
          
          $sender_email ="From: gshif05@gmail.com";
          
          if(mail($Email, $subject, $body, $sender_email)){

            echo "Login Successful";
          
          }
        ?>
       <script>

        location.replace("/php_practice/Homepage/Home.php");
        </script>


        <?php
       
       
       }else{
        echo"Password Incorrect";
       }  


       }else{
        echo "Invalid Email";

       }

    }




  ?>
<header>
  <div class="brand">
    <ul>
      <li div="brand name">
    <img src="/php_practice/logo/gshiflogo.ico" alt="G-SHIF"><h3>G-SHIF</h3></li>
  </div>
</header>
    <div class="container">
       <h1><i class="fa fa-sign-in"></i> Login</h1>
        

       <form action="" method="POST">

                <div class="box1">
                    <i class="fa fa-user"></i>
                  <input type="email" name="email" id="email" placeholder="Enter Your Username/Email">
                </div>

                 <div class="box2">
                  <i class="fa fa-key"></i>
                  <input type="password" name="password" id="password" placeholder="Enter Your Password">
                
                </div> 

                <span class="hide" onclick= "myFunction()">
                  <i id="hide1" class="fa fa-eye"></i>
                  <i id="hide2" class="fa fa-eye-slash"></i>
                </span>

                <div class="forgetpassword">

                  <a href="fg1.php" class="forget-pass">Forgot password?</a>
                </div>

                <div>
                <button type="Submit" class="btn" name="submit">Sign In</button>
                </div>

                <div class="hac">
                  <span>New to G-SHIF ? <a href="/php_practice/Account/signup/Registration.php" class="al">Sign Up</a></span>
                </div>

</form>

     </div>


<script>
  function myFunction(){
    var x = document.getElementById("password");
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");

    if(x.type === 'password'){
      x.type = "text";
      y.style.display = "block";
      z.style.display = "none";

        }else{

      x.type = "password";
      y.style.display = "none";
      z.style.display = "block";
        }
      }
</script>

                
</body>
</html>