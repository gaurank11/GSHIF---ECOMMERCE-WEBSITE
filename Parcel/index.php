<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'style5.php' ?>
    <title>Gshif-Parcel</title>
  </head>

  <body>
    <nav class="navbar background h-nav">
      <ul class="nav-list">
        <div class="logo"><img src="image/Logo.png" alt="LOGO" /></div>
        <li><a href="#home">Home</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="#Services">Services</a></li>
        <li><a href="#support">Support</a></li>
        <li><a href="#Contactus">Contact us</a></li>
        <li class="rig"><a href="#Contact us"><input placeholder="Search here" type="text" name="search" id="search" />
          <button class="btn-sm">search</button></a></li>
      </ul>
      <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </nav>
    <!-- ****************************************************************************************** -->
    <section class="background firstsection">
      <div class="box-main">
        <div class="first-half">
          <h1 class="text-big" >
            <span>G-SHIF Parcel Service</span>
            </h1>
          </p>
          <p class="text-big">
            Enjoy the fast,secure and affordable delivery services is now
            convienient with Gshif
          </p>

          <div class="buttons">
            <a class="sum"href="TrackOrder.html"><button class="btn">Track your order</button></a> 
            <a href="#form"><button class="btn">Enquire Now</button></a>
          </div>
        </div>

        
      </div>
    </section>

    <!-- *************************************************************************************** -->
    <section class="section">
      <div class="paras">
      <p class="sectionTag text-big" id="About">About us</p>
      <p class="sectionSubTag text-small">
        We are one of the prominent courier service companies offering an array of services,in a wide range network,that covers a number of location.We are committed to offer fast,secure and affordable on-time services.
      </div>
      </p>
      <div class="thumbnail">
        <img class= "abus"src="image/about us.jpg" alt="" class="imgFluid">
      </div>
    </section>

    <section class="section section-left">
      <div class="paras">
      <p class="sectionTag text-big" id="Services">Services</p>
      <p class="sectionSubTag text-small">
        We provide every kind of service for the Parcel Delivery(like- Express Delivery, Standard Delivery).Express Delivery ensures that your urgent documents or package reach the recipient at the earliest. Standard Delivery ensures that your Consignment reaches the recipient within the standard timelines.
      </div>
      </p>
      <div class="thumbnail">
        <img class= "serv" src="image/services.jpg" alt="" class="imgFluid">
      </div>
    </section>

    <section class="section sup">
      <div class="paras">
      <p class=" sectionTag text-big " id="support">Support</p>
      <p class="sectionSubTag text-small">
        24*7 Support is availabe.We are Happy to Help You. For Us Customer concern is very important. If you face any issue then please Contact Us.
      </div>
      </p>
      <div class= "thumbnail">
        <img class= "supp"src="image/support.jpg" alt="" class="imgFluid">
      </div>
    </section>

    <section class="steps">
      <img src="image/steps.jpg">
    </section>


    <section class="Enquiry">
      <h1 class="text-advance" id="form"> Fill the Form </h1>
      <div class="form" >
      <form action="" method="POST"> 

                         <div class="form-input">
                       <input type= "name" name="name" class="name" placeholder="Full Name" required>
</div>

                <div class="form-input">
               
                <input type="tel" class="phone" name="phone" placeholder="Enter 10 digit number" required>
                </div>

                <div class="form-input">
                      
                  <input type="email" name="email" class="email" placeholder="Enter Your Email Id" required>
                </div>

                
                <div class="form-input">
                <input type="text" class="text" name="text" placeholder="Enter Your Address" required></div>

        <button type="Submit" class="btn-dark" name="Submit1">Submit</button>   

</form>
</div>
   </section>
    <section class="contact" >
      <h1 class="text-advance" id="Contactus">Contact Us </h1>
      <div class="form">
      <form action="" method="POST">
        <div class="form-input">
            <label>Name:</label>
          <input type="name" name="name" class="name" placeholder="Full Name">
        </div>

         <div class="form-input">
            <label>Mobile Number:</label>
          <input type="tel" name="phone" class="phone" placeholder="Enter 10 digit Mobile Number">
        
        </div> 

        <div class="form-input">
            <label>Email:</label>
            <input type="email" name="email" class="email" placeholder="Enter Your Email">
        </div>

        <div class="form-input">
        <label>Choose Your Issue:</label>
        <select name="choice" class="choice" default:Your issue>
            <option >late delivery</option>
            <option>late process</option>
            <option>Payment</option>
            <option selec>other</option>
            
        </select>
        </div>
        <div class="form-input">
            <label>Comment:</label>
           <input type="text" name="con" class="comment" required>
        </div>

        <div>
        <input type="submit" class="btn" name="submit" >
        </div>
        
    </form>
</body>
</html>



<?php

include 'connection.php';

if(isset($_POST['submit'])){

    $Name = $_POST['name'];
    $Mobile = $_POST['phone'];
    $Email = $_POST['email'];
    $Complaintt = $_POST['choice'];
    $Complaint = $_POST['con'];

   

    $insertquery = "insert into complaints(Name,Mobile,Email,Complaintt,Complaint) values('$Name','$Mobile','$Email','$Complaintt','$Complaint')";

    $res= mysqli_query($connection,$insertquery);
}

?>


<?php


//including connection for local host//
include 'connection.php';


//isset is used as we end submit then where it store the data//
if(isset($_POST['Submit1'])){

  


  $Name = $_POST['name'];
  $Mobile = $_POST['phone'];
  $Email = $_POST['email'];
  $Address = $_POST['text'];
  
  $req= (rand(10000000,100000000));

  $insertquery = "insert into enquiry(name,phone,email,address,enquiryid,Status) values('$Name','$Mobile','$Email','$Address','$req','Inactive')";

  $res= mysqli_query($connection,$insertquery);

  if($res){
          
    $subject ="Reference Number";
    $body = " Your reference number for tracking is $req 
    
Thanks";
    $sender_email ="From: gshif05@gmail.com";

    if(mail($Email, $subject, $body, $sender_email)){
    echo"Check your for reference number";
}else{


  ?>

  <script>
alert('Password is not matching');
</script>
  
  <?php
}
}
}

        
 // bin2hex//

?>