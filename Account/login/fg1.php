<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <?php include 'link.php' ?>
    

    <style>
        <style>
*{
    margin:0;
    padding:0;
}
 
.brand{
    list-style: none;
    margin-left: 670px;
    margin-top: 40px;
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
        margin-left:10px;
        padding:5px 15px;
        width:68%;
         
     
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
       <h1>Recover Your Account</h1>
       <p>Please Fill email id properly
             <form action="" method="POST"> 
                
        
                <div class="email">
                <i class="fa fa-envelope" aria-hidden="true"></i><input type="email" name="email" id="email" placeholder="Enter Your Email Id" required>
                </div>

               
                
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


  //inserting SQL injections for more security// 
   
    $Email =  mysqli_real_escape_string($connection,$_POST['email']);
   


    //Query for already existing Email//

    $emailquery="select * from registration where Email='$Email'";
    $qs = mysqli_query($connection,$emailquery);

    $emailcount = mysqli_num_rows($qs);

    if($emailcount>0){

        
        //for mailing//
          
        $userdata = mysqli_fetch_array($qs);

        $username = $userdata['Name'];
        $token = $userdata['Token'];


          $subject ="Password";
          $body = "Hii, $username Your G-SHIF Code to reset password is $token 
          
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
         <script> location.replace("fgotp.php"); 
        </script>
         
         <?php
         
        }
        
      }else{
        echo"No Email Found";
      }
    }






 // bin2hex//

?>