<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include'style.php' ?>
    <title>Gshif-Shipment</title>
   
    </style>
  </head>

  <body>
    <nav class="navbar background h-nav">
      <ul class="nav-list">
        <div class="logo"><img src="image/Logo.png" alt="LOGO" /></div>
        <li><a href="#home">Home</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="#About">Services</a></li>
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
          <p class="text-big">
            Now tracking your package is quite easy with Gshif. Just click on the
            button and enter your parcel id and get the exact location of your
            parcel
          </p>
          <p class="text-big">
            For enjoying the fast,secure and affordable delivery services is now
            convienient with Gshif
          </p>

          <div class="buttons">
            <a class="sum"href="TrackOrder.html"><button class="btn">Track your order</button></a> 
            <a href="DeliveryService.html"><button class="btn">Delivery Services</button></a>
          </div>
        </div>

        <div class="second-half">
          <img src="image/Logo.png" alt="LOGO" />
        </div>
      </div>
    </section>

    <!-- *************************************************************************************** -->
    <section class="section">
      <div class="paras">
      <p class="sectionTag text-big" id="About">About us</p>
      <p class="sectionSubTag text-small">
        Our vision is to make shipping simple and easily usable for all. We are providing best services in every field. 
      </div>
      </p>
      <div class="thumbnail">
        <img class= "abus"src="image/about us.jpg" alt="" class="imgFluid">
      </div>
    </section>

    <section class="section section-left">
      <div class="paras">
      <p class="sectionTag text-big">Services</p>
      <p class="sectionSubTag text-small">
        We provide every kind of service for the shipment form delivering small things to all the goods of homes. We provide different vehicle as per requirement to make sure your delivery product will be safe to the place.Effective order tracking via SMS and Email notifications, White labeled shipment tracking page and Easy pickup for return order.
      </div>
      </p>
      <div class="thumbnail">
        <img class= "serv" src="image/services.jpg" alt="" class="imgFluid">
      </div>
    </section>

    <section class="section sup">
      <div class="paras">
      <p class=" sectionTag text-big ">Support</p>
      <p class="sectionSubTag text-small">
        Gshif guide - A guided to using Gshif features and process
        Integration Help Guide - Store,Carrier, and other Integration reference and how-to guides.
        Work flow Guides -  A series of article to guide you using Gshif-Shipment based on different kind of workflow.
        Gshif-Shipment Mobile Guide - Everthying you need tO know about Gshif mobile app.
        Troubleshooting guide - Troubleshoot common issue, error messages, and related questions.
        Frequently Asked Questions - Frequently asked questions around topics not covered in the other available categories.
      </div>
      </p>
      <div class= "thumbnail">
        <img class= "supp"src="image/support.jpg" alt="" class="imgFluid">
      </div>
    </section>

    <section class="Enquiry">
      <h1 class="text-advance" id="form"> Shifting Form </h1>
      <div class="form" >
      <form action="" method="POST"> 

                         <div class="form-input">
                       <input type= "name" name="name" class="name" placeholder="Full Name" required>
</div>

                <div class="form-input">
               
                <input type="tel" class="phone" class="phone" placeholder="Enter 10 digit number" required>
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
            <option >late shifting</option>
            <option>about agent</option>
            <option>Payment</option>
            <option selected>other</option>
            
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


<script>
    alert('connection successful');
    </script>

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
