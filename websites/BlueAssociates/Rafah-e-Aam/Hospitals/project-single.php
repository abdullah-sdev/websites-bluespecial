<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Gallery Single || Hospitals || Responsive HTML 5 Template</title>

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
                            <li class="dropdown current"><a href="about.php">About Us</a>
                                <ul>
                                    <li><a href="about.php">About Hospitals</a></li>
                                    <li><a href="doctors.php">Meet Our Doctors</a></li>
                                    <li><a href="faq.php">FAQ’s</a></li>
                                    <li><a href="testimonials.php">Testimonials</a></li>
                                    <li><a href="project.php">Our Gallery</a></li>
                                    <li><a href="project-single.php">Gallery Single</a></li>
                                </ul>
                            </li>
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
                            <li><a href="time-table.php">Time Table</a></li>
                            <li class="dropdown"><a href="blog-default.php">News</a>
                                <ul>
                                    <li><a href="blog-default.php">News Default</a></li>
                                    <li><a href="blog-large.php">News Large View</a></li>
                                    <li><a href="blog-single.php">News Single Post</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="shop.php">Shop</a>
                                <ul>
                                    <li><a href="shop.php">Shop Products</a></li>
                                    <li><a href="shop-single.php">Products Single</a></li>
                                    <li><a href="shopping-cart.php">Shopping Cart</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="account.php">My Account</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                <!--End mainmenu-->
                <!--Start mainmenu right box-->
                <div class="mainmenu-right-box pull-right">
                    <div class="cart_select">
                        <button><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>(0)</span></button>
                    </div>
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
	                <h1>Gallery Single</h1>
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
                            <li class="active">Gallery</li>
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

<!--Start project single area-->
<section id="project-single-area">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="project-single-carousel">
                    <!--Start single project item-->
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/projects/single-project.jpg" alt="Awesome Image">
                        </div> 
                    </div>
                    <!--End single project item-->
                </div>
            </div>
            <div class="col-md-5">
                <div class="project-info">
                    <div class="inner-content">
                        <p>This formal living room not only needed a focal point but color and style too. Using a high contrast palette of cool grey and blue against the warm cream and wood tones created a dramatic, yet inviting place for lounging and entertaining.</p>
                        <p>Needed a focal point but color and style too. Using a high us contrast palette of cool grey and blue against the warm cream and wooden tones created a dramatic, yet inviting place for lounging.</p>
                        <div class="sec-title">
                            <h1>Informations</h1>
                            <span class="border"></span>
                        </div>
                    </div>
                    <ul class="project-info-list">
                        <li>
                            <div class="icon-holder">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="text-holder">
                                <h5>Client</h5>
                                <p>Saara Lyone Dath</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <i class="fa fa-folder-open" aria-hidden="true"></i>
                            </div>
                            <div class="text-holder">
                                <h5>Technology</h5>
                                <p>Electronic Aspirin</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                            <div class="text-holder">
                                <h5>Start Date</h5>
                                <p>21st February 2017</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                            <div class="text-holder">
                                <h5>End Date</h5>
                                <p>27th March 2017</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="button prev pull-left">
                    <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>Prev</a>    
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="icon-holder text-center">
                    <a href="#">
                        <i class="fa fa-th" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="button next pull-right">
                    <a href="#">Next<i class="fa fa-angle-right" aria-hidden="true"></i></a>    
                </div>
            </div>
        </div>                                          
    </div>
</section>                                                                      
<!--End project single area-->    
  
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