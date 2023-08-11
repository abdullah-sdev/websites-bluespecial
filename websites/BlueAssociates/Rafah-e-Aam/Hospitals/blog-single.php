<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>News Single Post || Hospitals || Responsive HTML 5 Template</title>

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

<!--Start top bar area-->
<?php
include 'libs/header.php'
?>
<!--End header-search  area-->        

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
	                <h1>News Single Post</h1>
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
                            <li class="active">News Single Post</li>
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

<!--Start blog Single area-->
<section id="blog-area" class="blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <div class="single-blog-item">
                        <div class="img-holder">
                            <img src="images/blog/blog-single.jpg" alt="Awesome Image">
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">How to handle your kids’ from mystery ailments.</h3>
                            <div class="text">
                                <p class="top">The great explorer of the truth, the master-builder of human happiness worksone rejects, dislikes, avoids pleasure itself, because it is pleasure, but because those who do  know how to pursue pleasure rationally encounter consequences that are extremely seds painful the master-builder of human happiness rejects, dislikes, or avoids pleasure itself, because it is pursue pleasure.</p>
                                <p>Who loves or pursues or desires to obtain pain, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage.</p>
                            </div>
                            <!--Start middle content box-->
                            <div class="middle-content-box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="img-holder">
                                            <img src="images/blog/project-manager.jpg" alt="Awesome Image">
                                        </div>
                                        <div class="text-holder">
                                            <p>They have got my project time with competition  with highly skilled, well-organized denouncing of pleasures experienced team of professional.</p>
                                            <h3>Dohn Gaskel</h3>
                                            <h5>Head of Department</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End middle content box-->
                            <!--Start bottom content box-->
                            <div class="bottom-content-box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-holder">
                                            <p>Know how to pursue pleasure rationally encounter consequences that are extremely painful seds or again is there anyone who loves or pursues or desires to obtain pain of itself, because seds our it pain, but because occasionally circumstances occur which toil and pain can  undertakes laborious physical exercise.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End bottom content box-->
                            <ul class="meta-info">
                                <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>February 14, 2017</a></li>
                                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18 Comments</a></li>
                                <li><a href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>Transplantation</a></li>
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Mark Nicholes</a></li>
                            </ul>
                        </div>    
                    </div>
                    <!--Start tag and social share box-->
                    <div class="tag-social-share-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="social-share clearfix">
                                    <h5>Share<i class="fa fa-share-alt" aria-hidden="true"></i></h5>
                                    <ul class="social-share-links">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End tag and social share box-->
                    <!--Start author box-->
                    <div class="author-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-holder">
                                    <img src="images/blog/author.jpg" alt="Awesome Image">
                                </div>
                                <div class="text-holder">
                                    <h3>Mark Richardson</h3>
                                    <p>We will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                    <ul class="social-link">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End author box-->
                    <!--Start comment box-->
                    <div class="comment-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sec-title pdb-30">
                                    <h3>Read Comments</h3>
                                    <span class="border"></span>
                                </div>
                                <!--Start single comment box-->
                                <div class="single-comment-box">
                                    <div class="img-holder">
                                        <img src="images/blog/comment-1.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="date pull-left">
                                                <h5>Steven Rich – Sep 17, 2016:</h5>
                                            </div>
                                            <div class="review-box pull-right">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single comment box-->
                                <!--Start single comment box-->
                                <div class="single-comment-box">
                                    <div class="img-holder">
                                        <img src="images/blog/comment-2.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="date pull-left">
                                                <h5>William Cobus – Aug 21, 2016:</h5>
                                            </div>
                                            <div class="review-box pull-right">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>there anyone who loves or pursues or desires to obtain pain itself, because it is pain, because occasionally circumstances occur some great pleasure.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single comment box-->
                            </div>
                        </div>
                    </div>
                    <!--End comment box-->
                    <!--Start add comment box-->
                    <div class="add-comment-box">
                        <div class="sec-title pdb-30">
                            <h3>Add Your Comments</h3>
                            <span class="border"></span>
                        </div>
                        <div class="add-rating-box">
                            <h4>Your Rating</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>   
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <form id="add-comment-form" name="comment-form" action="#" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="field-label">First Name*</div>
                                            <input type="text" name="fname" placeholder="" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-label">Last Name*</div>
                                            <input type="text" name="lname" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field-label">Email*</div>
                                            <input type="email" name="email" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field-label">Your Comments</div>
                                            <textarea name="comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="thm-btn bgclr-1" type="submit">Submit Now</button>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End add comment box-->
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
<!--End blog Single area-->                                                                     
  
<!--Start footer area-->  
<?php
include 'libs/footer.php'
?>
<!--End footer bottom area-->

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