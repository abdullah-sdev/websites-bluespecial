<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Departments Single || Gastrology || Hospitals || Responsive HTML 5 Template</title>

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
	                <h1>Gastrology</h1>
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
                            <li><a href="departments.php">Department</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Gastrology</li>
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

<!--Start departments single area-->
<section id="departments-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">  
                <div class="tab-box">
                    <div class="tab-content">
                        <!--Start single tab pane-->
                        <div class="tab-pane" id="ds1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="images/department/tab-content-1.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>
                        </div>
                        <!--End single tab pane-->
                        <!--Start single tab pane-->
                        <div class="tab-pane active" id="ds2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="images/department/tab-content-2.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>
                        </div>
                        <!--End single tab pane-->
                        <!--Start single tab pane-->
                        <div class="tab-pane" id="ds3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="images/department/tab-content-3.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>   
                        </div>
                        <!--End single tab pane-->
                        <!--Start single tab pane-->
                        <div class="tab-pane" id="ds4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="images/department/tab-content-4.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>  
                        </div>
                        <!--End single tab pane-->
                        <!--Start single tab pane-->
                        <div class="tab-pane" id="ds5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="images/department/tab-content-5.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>  
                        </div>
                        <!--End single tab pane-->
                    </div>
                    <ul class="nav nav-tabs tab-menu">
                        <li>
                            <a href="#ds1" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-1.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="iocn-holder">
                                                    <span class="flaticon-plus-symbol"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#ds2" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-2.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="iocn-holder">
                                                    <span class="flaticon-plus-symbol"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </a>
                        </li>
                        <li>
                            <a href="#ds3" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-3.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="iocn-holder">
                                                    <span class="flaticon-plus-symbol"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#ds4" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-4.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="iocn-holder">
                                                    <span class="flaticon-plus-symbol"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#ds5" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="images/department/tab-menu-5.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="iocn-holder">
                                                    <span class="flaticon-plus-symbol"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="text-box">
                    <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born wewill give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure sed rationally encounter consequences that are extremely painful.</p>
                    <p>Denouncing pleasure and praising pain was born wewill give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness rationally.</p>
                </div> 
                
                <div class="pricing-box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-box">
                                <h3>Investigation</h3>
                                <ul>
                                    <li>Gastroscopy .......... <span>$320</span></li>
                                    <li>Colonoscopy .......... <span>$145</span></li>
                                    <li>Bronshoscopy .......... <span>$270</span></li>
                                    <li>Paratyroid Scan .......... <span>$80</span></li>
                                    <li>Allergy Testing .......... <span>$385</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-box">
                                <h3>Treatments</h3>
                                <ul>
                                    <li>Paratyroid Scan .......... <span>$80</span></li>
                                    <li>Allergy Testing .......... <span>$385</span></li>
                                    <li>Colonoscopy .......... <span>$145</span></li>
                                    <li>Gastroscopy .......... <span>$320</span></li>
                                    <li>Bronshoscopy .......... <span>$270</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="service-plan">
                    <div class="sec-title">
                        <h1>Our Services</h1>
                        <span class="border"></span>
                    </div>
                    <div class="row">
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-transport"></span>
                                </div>
                                <div class="text-box">
                                    <h3>24 Hrs Ambulance</h3>
                                    <p>How all this mistaken idea denoucing pleasure and praisings pain was born complete account expound.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-drink"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Food & Dietry</h3>
                                    <p>There anyone who loves or pursues or to obtain pain of itself, because it is but because occasionally.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-avatar"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Special Nurses</h3>
                                    <p>Pursues or desires to obtain pain itself, because is pain, because occasionally circumstances occur procure.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-church"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Places of Worship</h3>
                                    <p>Undertakes laborious physical exercise, except to obtain some advantage from it but who has any right.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                    </div>
                </div>
                
                <div class="team-area doctor">
                    <div class="sec-title">
                        <h1>Meet Our Doctors</h1>
                        <span class="border"></span>
                    </div>
                    <div class="row">
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-team-member">
                                <div class="img-holder">
                                    <img src="images/team/1.jpg" alt="Awesome Image">
                                    <div class="overlay-style">
                                        <div class="box">
                                            <div class="content">
                                                <div class="top">
                                                    <h3>Marc Parcival</h3>
                                                    <span>Newyork</span>
                                                </div>
                                                <span class="border"></span>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Marc Parcival</h3> 
                                        <span>Newyork</span>   
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-team-member">
                                <div class="img-holder">
                                    <img src="images/team/2.jpg" alt="Awesome Image">
                                    <div class="overlay-style">
                                        <div class="box">
                                            <div class="content">
                                                <div class="top">
                                                    <h3>Alen Bailey</h3>
                                                    <span>Newyork</span>
                                                </div>
                                                <span class="border"></span>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Marc Parcival</h3> 
                                        <span>Newyork</span>   
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-team-member">
                                <div class="img-holder">
                                    <img src="images/team/3.jpg" alt="Awesome Image">
                                    <div class="overlay-style">
                                        <div class="box">
                                            <div class="content">
                                                <div class="top">
                                                    <h3>Basil Andrew</h3>
                                                    <span>Newyork</span>
                                                </div>
                                                <span class="border"></span>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Marc Parcival</h3> 
                                        <span>Newyork</span>   
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>   
            </div> 
            
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                <div class="departments-sidebar">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="title">
                            <h3>Departments</h3>    
                        </div>
                        <ul class="all-departments">
                            <li>
                                <a href="cardiac-clinic.php">Cardiac Clinic</a>
                            </li>
                            <li>
                                <a href="pulmonology.php">Pulmonology</a>
                            </li>
                            <li>
                                <a href="gynecology.php">Gynecology</a>
                            </li>
                            <li>
                                <a href="neurology.php">Neurology</a>
                            </li>
                            <li>
                                <a href="urology.php">Urology</a>
                            </li>
                            <li class="active">
                                <a href="gastrology.php">Gastrology</a>
                            </li>
                            <li>
                                <a href="pediatrician.php">Pediatrician</a>
                            </li>
                            <li>
                                <a href="laborotory.php">Laboratory</a>
                            </li>
                        </ul>
                    </div> 
                    <!--Ens single sidebar--> 
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="title">
                            <h3>Opening Hours</h3>    
                        </div>
                        <ul class="opening-time">
                            <li>Mon to Friday: <span>09.00 to 18.00</span></li>
                            <li>Saturday: <span>10.00 to 16.00</span></li>
                            <li>Sunday: <span>10.00 to 14.00</span></li>
                        </ul>
                    </div> 
                    <!--Ens single sidebar--> 
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="title">
                            <h3>Quick Contact</h3>    
                        </div>
                        <div class="contact-us">
                            <ul class="contact-info">
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-pin"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Park Drive, Varick 2nd Str<br>NY 10012, USA</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-technology"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Getwell@Hospitals.com</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-technology-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>(123) 0200 12345 & 7890</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> 
                    <!--Ens single sidebar-->       
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End Medical Departments area--> 

<!--Start slogan area-->
<section class="slogan-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title pull-left">
                    <h2>If you are a patient seeking quality healthcare at affordable prices!.</h2>
                </div>
                <div class="button pull-right">
                    <a class="thm-btn bgclr-1" href="#">Make an Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>  
<!--End slogan area-->

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