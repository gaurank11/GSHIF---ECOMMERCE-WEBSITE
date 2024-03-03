<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <?php include 'link.php' ?>

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
    height:350px;
    width:350px;
    border-radius:10px;
}

.container h1{
    border-bottom: 5px solid purple;
    margin-bottom: 30px;
    padding:20px;
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
       <h1>Change Your Password</h1>
             <form action="" method="POST"> 
                

             <div class="email">
                    <label><h4>Your Email:</h4></label>   
                  <input type="email" name="email" id="email" placeholder="Enter Your Email Id" required>
                </div>
                <div class="password">
                    <label><h4>New Password:</h4></label>
                  <input type="password" name="password" id="password" placeholder="At least 6 character" required>
                </div>

                <div class="confirmpassword">
                    <label><h4>Re-enter Password:</h4></label>
                  <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
                </div>
                  <div>
                <button type="Submit" class="btn" name="submit">Submit</button>
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
 
    $Email =  mysqli_escape_string($connection,$_POST['email']);
   
  //inserting SQL injections for more security// 
    $password =  mysqli_escape_string($connection,$_POST['password']);
    $cpassword = mysqli_escape_string($connection,$_POST['cpassword']);


    //Doing encryption of password so that it become difficult to hack//
    $pass= password_hash($password, PASSWORD_BCRYPT);
    $cpass= password_hash($cpassword, PASSWORD_BCRYPT);
    

     //Query for Password and Confirm Password//  

      if($password === $cpassword) {

        $updatequery = "update registration set password = '$pass' where Email='$Email' ";

        $res= mysqli_query($connection,$updatequery);

        //for mailing//

        if($res){
          
          $subject = "Password Reset Successfully";
          $body = "Dear Customer, Congratulations! Your Password has been reset successfully.
          
Thanks";
          $sender_email ="From: gshif05@gmail.com";

          if(mail($Email, $subject, $body, $sender_email)){
          echo"Congratulation You have Successfully Updated Your Password";
              
              /*$_SESSION['msg'] = "Check your mail to verify your email address $Email";
              header('location:login.php');

            }else{
              echo"Verification failed";
            }*/
      

           
        ?>
         <script> location.replace("login.php"); 
        </script>
         
         <?php
         
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

  




 // bin2hex//

?>