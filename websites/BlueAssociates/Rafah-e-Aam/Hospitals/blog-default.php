<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>News Default || Hospitals || Responsive HTML 5 Template</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

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

<!--Start top bar area-->
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
                            <li><a href="index.php">Find A Doctor</a></li>
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
	                <h1>News Default</h1>
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
                            <li class="active">News Default</li>
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

<!--Start blog area-->
<section id="blog-area" class="blog-default-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <div class="row">
                        <!--Start single blog post-->
                        <div class="col-md-6">   
                            <div class="single-blog-item wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                                <div class="img-holder">
                                    <img src="images/blog/blog-default-1.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="blog-single.php"><span class="flaticon-plus-symbol"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <a href="blog-single.php">
                                        <h3 class="blog-title">How to handle your kids’ from mystery ailments</h3>
                                    </a>
                                    <div class="text">
                                        <p>The great explorer of the truth, master builder of human happiness one rejects, dislikes, or avoids pleasure itself because it is pleasure.</p>
                                    </div>
                                    <ul class="meta-info">
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>February 14, 2017</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>21 Comments</a></li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                        <!--End single blog post-->
                        <!--Start single blog post-->
                        <div class="col-md-6">   
                            <div class="single-blog-item wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                                <div class="img-holder">
                                    <img src="images/blog/blog-default-2.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="blog-single.php"><span class="flaticon-plus-symbol"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <a href="blog-single.php">
                                        <h3 class="blog-title">Negative statin stories add to heart health risk</h3>
                                    </a>
                                    <div class="text">
                                        <p>There anyone who loves or pursues or desires to obtain pains of itself, because it is pain because occasionally circumstances occur.</p>
                                    </div>
                                    <ul class="meta-info">
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>January 21, 2017</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18 Comments</a></li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                        <!--End single blog post-->
                    </div>
                    <div class="row">
                        <!--Start single blog post-->
                        <div class="col-md-6">   
                            <div class="single-blog-item wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                                <div class="img-holder">
                                    <img src="images/blog/blog-default-3.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="blog-single.php"><span class="flaticon-plus-symbol"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <a href="blog-single.php">
                                        <h3 class="blog-title">Lung cancer survival rate in England improves</h3>
                                    </a>
                                    <div class="text">
                                        <p>Which toil and pain can procure him some great pleasure. To take a trivial example, which of us  laborious physical exercise.</p>
                                    </div>
                                    <ul class="meta-info">
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>January 15, 2017</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>09 Comments</a></li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                        <!--End single blog post-->
                        <!--Start single blog post-->
                        <div class="col-md-6">   
                            <div class="single-blog-item wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                                <div class="img-holder">
                                    <img src="images/blog/blog-default-4.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="blog-single.php"><span class="flaticon-plus-symbol"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <a href="blog-single.php">
                                        <h3 class="blog-title">How to handle your kids’ from mystery ailments</h3>
                                    </a>
                                    <div class="text">
                                        <p>The great explorer of the truth, master builder of human happiness one rejects, dislikes, or avoids pleasure itself because it is pleasure.</p>
                                    </div>
                                    <ul class="meta-info">
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>February 14, 2017</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>21 Comments</a></li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                        <!--End single blog post-->
                    </div>
                    <div class="row">
                        <!--Start single blog post-->
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0"> 
                            <div class="single-blog-item">
                                <div class="img-holder">
                                    <img src="images/blog/blog-default-5.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="blog-single.php"><span class="flaticon-plus-symbol"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <a href="blog-single.php">
                                        <h3 class="blog-title">Negative statin stories add to heart health risk.</h3>
                                    </a>
                                    <div class="text">
                                        <p>There anyone who loves or pursues or desires to obtain pains of itself, because it is pain because occasionally circumstances occur.</p>
                                    </div>
                                    <ul class="meta-info">
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>January 21, 2017</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18 Comments</a></li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                        <!--End single blog post-->
                        <!--Start single blog post-->
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0"> 
                            <div class="single-blog-item">
                                <div class="img-holder">
                                    <img src="images/blog/blog-default-6.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="blog-single.php"><span class="flaticon-plus-symbol"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <a href="blog-single.php">
                                        <h3 class="blog-title">Lung cancer survival rate in England improves</h3>
                                    </a>
                                    <div class="text">
                                        <p>Which toil and pain can procure him some great pleasure. To take a trivial example, which of us  laborious physical exercise.</p>
                                    </div>
                                    <ul class="meta-info">
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>anuary 15, 2017</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>09 Comments</a></li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                        <!--End single blog post-->
                    </div>
                    <!--Start post pagination-->
                    <div class="row">
                        <div class="col-md-12"> 
                            <ul class="post-pagination text-center">
                                <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div> 
                    </div>
                    <!--End post pagination-->
                </div>
            </div>
            <!--Start sidebar Wrapper-->
            <div class="col-lg-4 col-md-6 col-sm-7 col-xs-12">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <form class="search-form" action="#">
							<input placeholder="Search..." type="text">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="categories clearfix">
                            <li><a href="#">Procedures<span>(6)</span></a></li>
                            <li><a href="#">Transplantation<span>(2)</span></a></li>
                            <li><a href="#">Management<span>(5)</span></a></li>
                            <li><a href="#">Healthcare Tips<span>(10)</span></a></li>
                            <li><a href="#">Uncategorized<span>(4)</span></a></li>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3>Popular Posts</h3>
                        </div>
                        <ul class="popular-post">
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/popular-post-1.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#"><h5 class="post-title">How to handle your kids’<br> from mystery ailments</h5></a>
                                    <h6 class="post-date">June 21, 2017</h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/popular-post-2.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#"><h5 class="post-title">Lung cancer survival rate in <br>England improves</h5></a>
                                    <h6 class="post-date">February 14, 2017</h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/popular-post-3.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#"><h5 class="post-title">Negative statin stories add <br>to heart health risk</h5></a>
                                    <h6 class="post-date">January 17, 2017</h6>
                                </div>
                            </li>
                           
                           
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single-sidebar-->    
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3 class="pull-left">Instagram</h3>
                            <a class="pull-right follow-us" href="#">Follow Us</a>
                        </div>
                        <ul class="instagram">
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/instagram-1.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/instagram-2.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/instagram-3.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/instagram-4.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/instagram-5.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/instagram-6.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> 
                        </ul>
                    </div>
                    <!--End single-sidebar--> 
                    <!--Start single-sidebar-->
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3>Facebook Feed</h3>
                        </div>
                        <div class="fb-feed">
                            <img src="images/sidebar/facebook-feed.jpg" alt="">
                        </div>     
                    </div> 
                    <!--End single-sidebar-->  
                    <!--Start single-sidebar-->
                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="sec-title">
                            <h3>Tag Cloud</h3>
                        </div>
                        <ul class="popular-tag">
                            <li><a href="#">Ideas</a></li>
                            <li><a href="#">Doctor</a></li>
                            <li><a href="#">Experts</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Growth</a></li>
                        </ul>      
                    </div> 
                    <!--End single-sidebar-->
                </div>    
            </div>
            <!--End Sidebar Wrapper-->  
        </div>
    </div>
</section> 
<!--End blog area-->                                                                        
  
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