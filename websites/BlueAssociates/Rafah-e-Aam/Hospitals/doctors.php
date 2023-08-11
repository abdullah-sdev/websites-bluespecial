




<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Doctors || Hospitals || Responsive HTML 5 Template</title>

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
	                <h1>Our Doctors</h1>
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
                            <li class="active">Doctors</li>
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

<!--Start team area-->
<section class="team-area doctor doctor-page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-tabs tab-menu">
                    <li><a href="#cardiologist" data-toggle="tab">Cardiologist</a></li>
                    <li class="active"><a href="#gynaecologist" data-toggle="tab">Gynaecologist</a></li>
                    <li><a href="#neurologist" data-toggle="tab">Neurologist</a></li>
                    <li><a href="#ophthalmologist" data-toggle="tab">Ophthalmologist</a></li>
                    <li><a href="#paediatrician" data-toggle="tab">Paediatrician</a></li>
                    <li><a href="#practitioner" data-toggle="tab">General Practitioner</a></li>
                </ul>   
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="cardiologist">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
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
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
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
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                    <!--Start single tab pane-->
                    <div class="tab-pane active" id="gynaecologist">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
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
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
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
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="neurologist">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
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
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
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
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="ophthalmologist">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                             <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
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
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
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
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="paediatrician">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
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
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
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
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="practitioner">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
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
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
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
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
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
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
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
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
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
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
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
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                </div>
            </div>
        </div>
    </div>
</section> 
<!--End team area--> 
  
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