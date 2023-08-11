<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Time Table || Hospitals || Responsive HTML 5 Template</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon-ramc.ico" type="image/x-icon">
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16"> -->

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
</head>
<body>
<div class="boxed_wrapper">

<!--Start Preloader -->
<?php
include 'libs/preloader.php'
?>
<!--End Preloader --> 

<!--Start header area-->
<?php
include 'libs/header.php'
?>
<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--Start mainmenu-->
                <nav class="main-menu pull-left">
                    <div class="navbar-header">   	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li><a href="index.php">Home</a></li>

                            <li class="dropdown"><a href="about.php">About Us</a>
                                <ul>

                                    <li><a href="about.php">Vision</a></li>
                                    <li><a href="about.php">Mission</a></li>
                                    <li><a href="about.php">Gallery</a></li>
                                    <li><a href="about.php">About RMC</a></li>
                                    
                                    <!-- 
                                        <li><a href="about.php">About Hospitals</a></li>
                                        <li><a href="doctors.php">Meet Our Doctors</a></li>
                                    <li><a href="faq.php">FAQ’s</a></li>
                                    <li><a href="testimonials.php">Testimonials</a></li>
                                    <li><a href="project.php">Our Gallery</a></li>
                                    <li><a href="project-single.php">Gallery Single</a></li> -->
                                </ul>
                            </li>
                            <li class="dropdown"><a href="services.php">Services</a>
                                <ul>
                                    <li><a href="cardiac-clinic.php">Emergency services</a></li>
                                    <li><a href="cardiac-clinic.php">Outpatient Department</a></li>
                                    <li><a href="cardiac-clinic.php">Inpatient Department</a></li>
                                    <li><a href="cardiac-clinic.php">Intensive Care Unit</a></li>
                                    <li><a href="cardiac-clinic.php">Operation theatre</a></li>
                                    <li><a href="cardiac-clinic.php">Laboratory</a></li>
                                    <li><a href="cardiac-clinic.php">Radiology</a></li>
                                    <li><a href="cardiac-clinic.php">Ultra Sound - Color doppler</a></li>
                                    <li><a href="cardiac-clinic.php">24-Hours Pharmacy</a></li>
                                    <li><a href="cardiac-clinic.php">Physiotherapy</a></li>
                                </ul>
                            </li>
                            <li  class="current"><a href="time-table.php">Find A Doctor</a></li>
                            <li class="dropdown"><a href="departments.php">Departments</a>
                                <ul>
                                    <li><a href="cardiac-clinic.php">Cardiac Clinic</a></li>
                                    <li><a href="pulmonology.php">Pulmonology</a></li>
                                    <li><a href="gynecology.php">Gynecology</a></li>
                                    <li><a href="neurology.php">Neurology</a></li>
                                    <li><a href="urology.php">Urology</a></li>
                                    <li><a href="gastrology.php">Gastrology</a></li>
                                    <li><a href="pediatrician.php">Pediatrician</a></li>
                                    <li><a href="laborotory.php">Laborotory</a></li>
                                </ul>
                            </li>

                            <li><a href="index.php">Speciality</a></li>
                            <!-- <li><a href="time-table.php">Time Table</a></li>
                            <li class="dropdown"><a href="blog-default.php">News</a>
                                <ul>
                                    <li><a href="blog-default.php">News Default</a></li>
                                    <li><a href="blog-large.php">News Large View</a></li>
                                    <li><a href="blog-single.php">News Single Post</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="dropdown"><a href="shop.php">Shop</a>
                                <ul>
                                    <li><a href="shop.php">Shop Products</a></li>
                                    <li><a href="shop-single.php">Products Single</a></li>
                                    <li><a href="shopping-cart.php">Shopping Cart</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="account.php">My Account</a></li>
                                </ul>
                            </li> -->
                            <li><a href="index.php">Corporate Clients</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                        
                    </div>
                </nav>
                <!--End mainmenu-->
                <!--Start mainmenu right box-->
                <div class="mainmenu-right-box pull-right">
                    <!-- <div class="cart_select">
                        <button><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>(0)</span></button>
                    </div> -->
                    <div class="consultation-button">
                        <a href="#">MAKE APPOINTMENT</a>    
                    </div>
                </div>
                <!--End mainmenu right box-->    
            </div>
        </div>
    </div>
</section>
<!--End mainmenu area-->

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Time Table</h1>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="breadcrumb-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left pull-left">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Time Table</li>
                        </ul>
                    </div>
                    <div class="right pull-right">
                        <a href="#">
                            <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span> 
                        </a>   
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start time table area-->
<div class="time-table-area">
    <div class="container">
        <div class="row pd-bottom">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <select class="selectmenu">
                            <option selected="selected">Select Department</option>
                            <option>Cardiology</option>
                            <option>Pulmonology</option>
                            <option>Gynecology</option>
                            <option>Neurology</option>
                            <option>Urology</option>
                            <option>Gastrology</option>
                            <option>Pediatrician</option>
                            <option>Laboratory</option>
                        </select>  
                    </div>
                    <div class="col-md-6">
                        <div class="input-box">
                            <input type="text" name="date" placeholder="Select Date" id="datepicker">
                            <div class="icon-box">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                        </div>  
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="time-table">
                        <thead>
                            <tr>
                                <th>Time / Days</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span>08.00 - 09.00</span>
                                        <p>am</p>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span>09.00 - 10.00</span>
                                        <p>am</p>
                                    </div>
                                </td>
                                
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span>10.00 - 11.00</span>
                                        <p>am</p>
                                    </div>
                                </td>
                                
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span>11.00 - 12.00</span>
                                        <p>am</p>
                                    </div>
                                </td>
                                
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span>12.00 - 1.00</span>
                                        <p>pm</p>
                                    </div>
                                </td>
                                
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span>1.00 - 2.00</span>
                                        <p>pm</p>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span>2.00 - 3.00</span>
                                        <p>pm</p>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span>3.00 - 4.00</span>
                                        <p>pm</p>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span>4.00 - 5.00</span>
                                        <p>pm</p>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                 <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span>5.00 - 6.00</span>
                                        <p>pm</p>
                                    </div>
                                </td>
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-1">
                                    <div class="inner-content text-center">
                                        <h5>Pediatric</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="single-box time">
                                    <div class="inner-content text-center">
                                        <span>6.00 - 7.00</span>
                                        <p>pm</p>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-3">
                                    <div class="inner-content text-center">
                                        <h5>Neurology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Tomas</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box white">
                                    <div class="inner-content text-center">
                                        <span class="blank"></span>
                                    </div>
                                </td>
                                <td class="single-box bgclr-2">
                                    <div class="inner-content text-center">
                                        <h5>Cardiology</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                                <td class="single-box bgclr-4">
                                    <div class="inner-content text-center">
                                        <h5>Pulmonary</h5>
                                        <span>08.00am -9.00am</span>
                                        <p>Dr. Williamson</p>
                                        <h6 class="level">Level: <span>Beginner</span></h6>
                                    </div>
                                </td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End time table area-->
 
<!--Start footer area-->  
<?php
include 'libs/footer.php'
?>

</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-triangle-inside-circle"></span></div>

<!-- main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Wow Script -->
<script src="js/wow.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/validation.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<!-- fancy box -->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="js/isotope.js"></script>
<script src="js/jquery.prettyPhoto.js"></script> 
<script src="js/jquery.bootstrap-touchspin.js"></script>
<!-- jQuery timepicker js -->
<script src="assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>                               
<!-- Bootstrap bootstrap touchspin js -->
<!-- jQuery ui js -->
<script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- Html 5 light box script-->
<script src="assets/html5lightbox/html5lightbox.js"></script>


<!-- revolution slider js -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="js/custom.js"></script>





</body>


</html>