<style>

/**
* Template Name: Moderna - v4.10.0
* Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #444;
}

a {
  color: #4fa6d5;
  text-decoration: none;
}

a:hover {
  color: #45beff;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6,
.font-primary {
  font-family: "Roboto", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
  background: #68A4C4;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #85b6cf;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  background: #1e4356;
}

#header.header-transparent {
  background: none;
}

#header.header-scrolled {
  background: rgba(30, 67, 86, 0.8);
  height: 60px;
}

#header .logo h1 {
  font-size: 28px;
  margin: 0;
  padding: 4px 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header .logo h1 a,
#header .logo h1 a:hover {
  color: #fff;
  text-decoration: none;
}

#header .logo img {
  padding: 5px;
  margin: 5px 0px;
  max-height: 100px;
}

#main {
  margin-top: 80px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-family: "Open Sans", sans-serif;
  font-size: 14px;
  color: #fff;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #a2cce3;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  color: #1c3745;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #68A4C4;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(17, 38, 48, 0.9);
  transition: 0.3s;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #1e4356;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #68A4C4;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #68A4C4;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 90vh;
  overflow: hidden;
  position: relative;
}

#hero::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 0;
  width: 130%;
  height: 95%;
  background: linear-gradient(to right, rgba(30, 67, 86, 0.8), rgba(30, 67, 86, 0.6)), url("/php_practice/logo/gshiflogo.ico") center  no-repeat;
  z-index: 0;
  border-radius: 0 0 50% 50%;
  transform: translateX(-50%) rotate(0deg);
}

#hero::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 0;
  width: 130%;
  height: 96%;
  background: #68A4C4;
  opacity: 0.3;
  z-index: 0;
  border-radius: 0 0 50% 50%;
  transform: translateX(-50%) translateY(18px) rotate(2deg);
}

#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero h2 {
  color: #fff;
  margin-bottom: 30px;
  font-size: 48px;
  font-weight: 700;
}

#hero p {
  width: 80%;
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  margin: 0 auto 30px auto;
  color: #fff;
}

#hero .carousel-control-prev,
#hero .carousel-control-next {
  width: 10%;
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
  background: none;
  font-size: 48px;
  line-height: 1;
  width: auto;
  height: auto;
}

#hero .btn-get-started {
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 50px;
  transition: 0.5s;
  line-height: 1;
  margin: 10px;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid #68A4C4;
}

#hero .btn-get-started:hover {
  background: #68A4C4;
  color: #fff;
  text-decoration: none;
}

@media (min-width: 1024px) {
  #hero p {
    width: 60%;
  }

  #hero .carousel-control-prev,
  #hero .carousel-control-next {
    width: 5%;
  }
}

@media (max-width: 768px) {
  #hero::after {
    width: 180%;
    height: 95%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) rotate(0deg);
  }

  #hero::before {
    top: 0;
    width: 180%;
    height: 94%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) translateY(20px) rotate(4deg);
  }
}

@media (max-width: 575px) {
  #hero h2 {
    font-size: 30px;
  }

  #hero::after {
    left: 40%;
    top: 0;
    width: 200%;
    height: 95%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) rotate(0deg);
  }

  #hero::before {
    left: 50%;
    top: 0;
    width: 200%;
    height: 94%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) translateY(20px) rotate(4deg);
  }
}

/*--------------------------------------------------------------
# Hero No Slider Section
--------------------------------------------------------------*/
#hero-no-slider {
  width: 100%;
  height: 100vh;
  overflow: hidden;
  position: relative;
  text-align: center;
}

#hero-no-slider::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(to right, rgba(30, 67, 86, 0.8), rgba(30, 67, 86, 0.6)), url("../img/hero-bg.jpg") center top no-repeat;
}

#hero-no-slider h2 {
  color: #fff;
  margin-bottom: 15px;
  font-size: 48px;
  font-weight: 700;
}

#hero-no-slider p {
  color: #fff;
}

#hero-no-slider .btn-get-started {
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 50px;
  transition: 0.5s;
  line-height: 1;
  margin: 10px;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid #68A4C4;
}

#hero-no-slider .btn-get-started:hover {
  background: #68A4C4;
  color: #fff;
  text-decoration: none;
}

@media (max-width: 575px) {
  #hero-no-slider h2 {
    font-size: 30px;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
}

.section-bg {
  background-color: #f3f8fa;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 28px;
  font-weight: 400;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.section-title h2::before {
  content: "";
  position: absolute;
  display: block;
  width: 120px;
  height: 1px;
  background: #ddd;
  bottom: 1px;
  left: calc(50% - 60px);
}

.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 40px;
  height: 3px;
  background: #68A4C4;
  bottom: 0;
  left: calc(50% - 20px);
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background-color: #f3f8fa;
  min-height: 40px;
}

.breadcrumbs h2 {
  font-size: 28px;
  font-weight: 300;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #6c757d;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }

  .breadcrumbs ol {
    display: block;
  }

  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# Our Services
--------------------------------------------------------------*/
.services {
  padding-bottom: 20px;
}

.services .icon-box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  margin: 0 0 40px 0;
  background: #fff;
  box-shadow: 0 5px 26px 0 rgba(68, 88, 144, 0.14);
  transition: all 0.3s ease-in-out;
  text-align: center;
  border: 1px solid #fff;
}

.services .icon {
  margin: 0 auto 20px auto;
  padding-top: 17px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 72px;
  height: 72px;
}

.services .icon i {
  font-size: 36px;
  line-height: 1;
}

.services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .title a {
  color: #111;
}

.services .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
}

.services .icon-box-pink .icon {
  background: #fceef3;
}

.services .icon-box-pink .icon i {
  color: #ff689b;
}

.services .icon-box-pink:hover {
  border-color: #ff689b;
}

.services .icon-box-cyan .icon {
  background: #e6fdfc;
}

.services .icon-box-cyan .icon i {
  color: #3fcdc7;
}

.services .icon-box-cyan:hover {
  border-color: #3fcdc7;
}

.services .icon-box-green .icon {
  background: #eafde7;
}

.services .icon-box-green .icon i {
  color: #41cf2e;
}

.services .icon-box-green:hover {
  border-color: #41cf2e;
}

.services .icon-box-blue .icon {
  background: #e1eeff;
}

.services .icon-box-blue .icon i {
  color: #2282ff;
}

.services .icon-box-blue:hover {
  border-color: #2282ff;
}

/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/
.why-us .container {
  box-shadow: 0 5px 25px 0 rgba(214, 215, 216, 0.6);
  background: #fff;
}

.why-us .icon-box+.icon-box {
  margin-top: 50px;
}

.why-us .icon-box .icon {
  float: left;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 72px;
  height: 72px;
  background: #f3f8fa;
  border-radius: 6px;
  transition: 0.5s;
}

.why-us .icon-box .icon i {
  color: #68A4C4;
  font-size: 32px;
}

.why-us .icon-box:hover .icon {
  background: #68A4C4;
}

.why-us .icon-box:hover .icon i {
  color: #fff;
}

.why-us .icon-box .title {
  margin-left: 95px;
  font-weight: 700;
  margin-bottom: 10px;
  font-size: 18px;
  text-transform: uppercase;
}

.why-us .icon-box .title a {
  color: #343a40;
  transition: 0.3s;
}

.why-us .icon-box .title a:hover {
  color: #68A4C4;
}

.why-us .icon-box .description {
  margin-left: 95px;
  line-height: 24px;
  font-size: 14px;
}

.why-us .video-box {
  position: relative;
}

.why-us .video-box img {
  padding-top: 15px;
  padding-bottom: 15px;
}

.why-us .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(#68A4C4 50%, rgba(104, 164, 196, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: absolute;
  left: calc(50% - 47px);
  top: calc(50% - 47px);
  overflow: hidden;
}

.why-us .play-btn::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.why-us .play-btn::before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(104, 164, 196, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

.why-us .play-btn:hover::after {
  border-left: 15px solid #68A4C4;
  transform: scale(20);
}

.why-us .play-btn:hover::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Features
--------------------------------------------------------------*/
.features .row+.row {
  margin-top: 100px;
}

.features h3 {
  font-weight: 400;
  font-size: 24px;
}

.features ul {
  list-style: none;
  padding: 0;
}

.features ul li {
  padding-bottom: 10px;
}

.features ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #68A4C4;
}

.features p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about h3 {
  font-weight: 400;
  font-size: 26px;
}

.about ul {
  list-style: none;
  padding: 0;
}

.about ul li {
  padding-bottom: 10px;
}

.about ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #68A4C4;
}

.about p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Facts
--------------------------------------------------------------*/
.facts .counters span {
  font-size: 48px;
  display: block;
  color: #68A4C4;
}

.facts .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Roboto", sans-serif;
  font-size: 14px;
}

/*--------------------------------------------------------------
# Our Skills
--------------------------------------------------------------*/
.skills {
  padding: 60px 0;
}

.skills .progress {
  height: 35px;
  margin-bottom: 10px;
}

.skills .progress .skill {
  line-height: 35px;
  padding: 0;
  margin: 0 0 0 20px;
  text-transform: uppercase;
}

.skills .progress .skill .val {
  float: right;
  font-style: normal;
  margin: 0 20px 0 0;
}

.skills .progress-bar {
  width: 1px;
  text-align: left;
  transition: 0.9s;
}


/*--------------------------------------------------------------
# Service Details
--------------------------------------------------------------*/
.service-details {
  padding-bottom: 10px;
}

.service-details .card {
  border: 0;
  padding: 0 30px;
  margin-bottom: 60px;
  position: relative;
}

.service-details .card-img {
  width: calc(100% + 60px);
  margin-left: -30px;
  overflow: hidden;
  z-index: 9;
  border-radius: 0;
}

.service-details .card-img img {
  max-width: 100%;
  transition: all 0.3s ease-in-out;
}

.service-details .card-body {
  z-index: 10;
  background: #fff;
  border-top: 4px solid #fff;
  padding: 30px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  margin-top: -60px;
  transition: 0.3s;
}

.service-details .card-title {
  font-weight: 700;
  text-align: center;
  margin-bottom: 20px;
}

.service-details .card-title a {
  color: #1e4356;
  transition: 0.3s;
}

.service-details .card-text {
  color: #5e5e5e;
}

.service-details .read-more a {
  color: #777777;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  transition: 0.3s;
}

.service-details .read-more a:hover {
  color: #68A4C4;
}

.service-details .card:hover img {
  transform: scale(1.1);
}

.service-details .card:hover .card-body {
  border-color: #68A4C4;
}

.service-details .card:hover .card-body .card-title a {
  color: #68A4C4;
}

/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
.pricing .row {
  padding-top: 40px;
}

.pricing .box {
  padding: 40px;
  margin-bottom: 30px;
  box-shadow: 0px 0px 30px rgba(73, 78, 92, 0.15);
  background: #fff;
  text-align: center;
}

.pricing h3 {
  font-weight: 300;
  margin-bottom: 15px;
  font-size: 28px;
}

.pricing h4 {
  font-size: 46px;
  color: #68A4C4;
  font-weight: 400;
  font-family: "Open Sans", sans-serif;
  margin-bottom: 25px;
}

.pricing h4 span {
  color: #bababa;
  font-size: 18px;
  display: block;
}

.pricing ul {
  padding: 0;
  list-style: none;
  color: #999;
  text-align: left;
  line-height: 20px;
}

.pricing ul li {
  padding-bottom: 12px;
}

.pricing ul i {
  color: #68A4C4;
  font-size: 18px;
  padding-right: 4px;
}

.pricing ul .na {
  color: #ccc;
}

.pricing ul .na i {
  color: #ccc;
}

.pricing ul .na span {
  text-decoration: line-through;
}

.pricing .get-started-btn {
  background: #1e4356;
  display: inline-block;
  padding: 6px 30px;
  border-radius: 20px;
  color: #fff;
  transition: none;
  font-size: 14px;
  font-weight: 400;
  font-family: "Roboto", sans-serif;
  transition: 0.3s;
}

.pricing .get-started-btn:hover {
  background: #68A4C4;
}

.pricing .featured {
  z-index: 10;
  margin: -30px -5px 0 -5px;
}

.pricing .featured .get-started-btn {
  background: #68A4C4;
}

.pricing .featured .get-started-btn:hover {
  background: #85b6cf;
}

@media (max-width: 992px) {
  .pricing .box {
    max-width: 60%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 767px) {
  .pricing .box {
    max-width: 80%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 420px) {
  .pricing .box {
    max-width: 100%;
    margin: 0 auto 30px auto;
  }
}
/*              
# Map
--------------------------------------------------------------*/
.map {
  padding: 0;
  margin-bottom: -6px;
}

.map iframe {
  width: 100%;
  height: 380px;
}


/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: #0b212d;
  padding: 0 0 30px 0;
  color: #fff;
  font-size: 14px;
}

#footer .footer-traker {
  padding: 50px 0;
  background: #0d2735;
}

#footer .footer-traker h4 {
  font-size: 30px;
  margin: 0 0 20px 0;
  padding: 0;
  line-height: 1;
  font-weight: 600;
  color: #a2cce3;
}

#footer .footer-traker form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
}

#footer .footer-traker form input[type=text] {
  font-size:20px;
  border: 0;
  padding: 4px;
  width: calc(100% - 100px);
}

#footer .footer-traker form input[type=submit] {
  font-size: 50px;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  padding: 0 20px;
  margin: 3px;
  background: #68A4C4;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
}

#footer .footer-traker form input[type=submit]:hover {
  background: #468db3;
}

#footer .footer-top {
  background: #0d2735;
  border-top: 1px solid #17455e;
  border-bottom: 1px solid #123649;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 18px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  color: #a2cce3;
  font-weight: 600;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Roboto", sans-serif;
  color: #fff;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #1e4356;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #68A4C4;
  color: #fff;
  text-decoration: none;
}

#footer .footer-top h4 {
  font-size: 18px;
  font-weight: 600;
  color: #a2cce3;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #a2cce3;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #fff;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  color: #a2cce3;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact p {
  line-height: 26px;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
}

#footer .credits a {
  color: #a2cce3;
}

.avl img{
  width:30px;
}
.avl{

   width:700px;

}
select{
  width:250px;
}
.btn-dark{
  border:none;
}
</style>