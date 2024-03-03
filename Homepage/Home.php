<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>G-SHIF- HOME PAGE</title>
  <link rel="icon" type="image/x-icon" href="/php_practice/logo/gshiflogo.ico">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include 'style2.php' ?>
  <?php include 'link4.php' ?>
  <!-- Favicons 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  Google Fonts 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">-->

  <!-- Vendor CSS Files 
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->

  


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
      <img src="/php_practice/logo/gshiflogo.ico">
        <h1 class="text-light"><a href="index.html"><span>G-SHIF</span></a></h1>
      
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.html">Home</a></li>
          <li><a href="#Con1">About</a></li>
          <li><a href="#section1">Services</a></li>
          <li><a href="\php_practice\Account\User\userprofile.php">Acccount</a></li>
          <li><a href="#">My Cart</a></li>
          <li><a href="http://localhost:3000/">Crowdfunding</a></li>
          
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>G-SHIF</span></h2>
          <p class="animate__animated animate__fadeInUp">G-SHIF is a service provider. Connects Peoples with many other platforms.....</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Food</h2>
          <p class="animate__animated animate__fadeInUp">G-SHIF Provide Food Services</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Shifting</h2>
          <p class="animate__animated animate__fadeInUp">G-SHIF Provide Shifting Services.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services" >
      <div class="container" id="section1">
       <div class="section-title">
          <h2>Our Services</h2>
        <div class="row"> 
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><img src="logo/Goods.png"></div>
              <h4 class="title"><a href="\php_practice\Goods\index.html">GOODS</a></h4>
              <p class="description">G-SHIF is proving Goods service to Customers. Delivery in 12 hours after placing order.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><img src="logo/food.png"></i></div>
              <h4 class="title"><a href="/php_practice/Food/Food-website-Project/index.html">Food</a></h4>
              <p class="description">Food service is available in G-SHIF. Delivery 24*7 Available.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><img src="logo/shifting.png"></div>
              <h4 class="title"><a href="/php_practice/Shiftings/Track-project/index.php">Shifting</a></h4>
              <p class="description">Shifting Service is available in G-SHIF.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><img src="logo/Parcel.png"></div>
              <h4 class="title"><a href="/php_practice/Parcel/index.php">Parcel</a></h4>
              <p class="description">Parcel Service is available in G-SHIF.</p>
            </div>
          </div>

        </div>

      </div>


      <section class="Availability">
        <div class="avl">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <h4>Check Availability:<img src="https://www.freeiconspng.com/thumbs/location-icon-png/map-location-icon-29.png"></h4>
          </div>
      <div class="col-lg-6">
            <form action="" method="post">
            <select name="choice" class="avll">
            <option selected>VIT BHOPAL</option>
            <option>BHOPAL</option>
            <option>INDORE</option>
            <option>ASTHA</option>
            <option>SEHORE</option>
            <option>GWALIOR</option>
            <option>JABALPUR</option>
            <option>NEW DEHI</option>
            <option>JHANSI</option>
            <option>CHATTISGARH</option>
            <option>JHARKHAND</option>  
            <option>PALWAL</option>  
        </select>
            <button type="Submit" class="btn-dark" name="submit1">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
    include 'connection.php';
    if(isset($_POST['submit1'])){
    
      //defining the values from form //

      $avl = mysqli_escape_string($connection,$_POST['choice']);


    $avlq="select * from availability where Available='$avl'";
    $pss = mysqli_query($connection,$avlq);

    $Tokencount = mysqli_num_rows($pss);


    if($Tokencount>0){
      echo"Congratulations! This location is Available. You are free to use our website.";
      

      ?>

      <!--<script>
        alert('Congratulations! This location is Available. You are free to use our website.');
    </script>-->
      <?php

    }else{
      echo"Sorry! This Location is not Available.";
      ?>
      <!--<script>
        alert('Sorry! This Location is not Available.');
    </script>-->
      <?php
    }

  }
           
           ?>



    <!-- ======= Features Section ======= -->
    <section class="features" >
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="https://cdn.technologyadvice.com/wp-content/uploads/2018/02/friendly-chatbot.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h2>24*7 Customer Support.</h2>
            <p class="fst-italic">
            Customer support is a range of customer services to assist customers in making cost effective and correct use of a product.
            </p>
            
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="https://www.nokia.com/sites/default/files/2022-01/cybersecurity4.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h2>Security</h2>
            <p class="fst-italic">
            Security is mostly a superstition. It does not exist in nature, nor do the children of men as a whole experience it. Avoiding danger is no safer in the long run than outright exposure. Life is either a daring adventure, or nothing.
            </p>
            <p>
            A secure website has a web application firewall activated to prevent attacks and hacks. It also follows website security best practices and has no configuration issues or known vulnerabilities. You can use SiteCheck to see if a website has a firewall, any security anomalies, malware, or if it is blocklisted.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h2>Availablility of all services </h2>
            <p>It is very easy for Customer to avail the services if all services are present at one time.</p>
            <ul>
              <li><i class="bi bi-check"></i> Goods service</li>
              <li><i class="bi bi-check"></i> Food Sevices</li>
              <li><i class="bi bi-check"></i> Shifting Services</li>
              <li><i class="bi bi-check"></i> Parcel Services</li>
            </ul>
          </div>
        </div>

        

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->


  <section class="chatbot" >
      <div class="container" id="section2">
       <div  class="section-title" onclick="location.href='/php_practice/chatbot/index.html';">&nbsp; 
          <h2>Click Here to Chat with us!</h2>

</div>
</div>
</section>



  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


  <div class="footer-traker">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Track Your Goods</h4>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
            <input type="text" id="text" name="text" placeholder=" Enter Your ref id" required>
            <button type="Submit" class="btn-dark" name="submit2">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php
    include 'connection.php';
    if(isset($_POST['submit2'])){
    
      //defining the values from form //

      $ref = mysqli_escape_string($connection,$_POST['text']);


    $TokenQuery="select * from enquiry where enquiryid='$ref'";
    $pss = mysqli_query($connection,$TokenQuery);

    $Tokencount = mysqli_num_rows($pss);


    if($Tokencount>0){
    echo"Your Product is under Process. You will notify regularly on your mail id."
      ?>

      <!--<script>
        alert('Your Product is under process');
    </script>-->
      <?php

    }
  }
           
           ?>

   
    <div class="footer-top" id="Con1">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#section1">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/php_practice/Food/Food-website-Project/index.html">Food Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Shifting Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="\php_practice\Goods\index.html">Goods Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Parcel Services</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact" id="">
            <h4>Contact Us</h4>
            <p>
              
              <strong>Phone:</strong> +91 9050570307<br>
              <strong>Email:</strong> gshif05@gmail.com <br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info" >
            <h3>About G-SHIF</h3>
            <p>G-SHIF is a service provider. Connects Peoples with many other platforms.....</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>G-SHIF</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!--<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>-->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>