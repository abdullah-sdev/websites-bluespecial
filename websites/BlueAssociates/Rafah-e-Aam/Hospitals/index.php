<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Home || Hospitals || Responsive HTML 5 Template</title>

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


<?php
include 'libs/preloader.php'
?>


<?php
$current = "index";
include 'libs/header.php'
?>
<!--Start mainmenu area-->


<!--End mainmenu area-->


<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <li data-transition="rs-20">
                <img src="images/slides/1.jpg"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="220" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box mar-lft">
                        <h1>Hospitals providing total<br> healthcare <span>Solutions.</span></h1>
                        <p>Denouncing pleasure and praising pain was born and we will <br>give you a complete account of the system.</p>
                        <div class="button">
                            <a class="#" href="#">Read More</a>
                            <a class="btn-style-two" href="#">Departments</a>           
                        </div>  
                    </div>
                </div>
               
            </li>
            <li data-transition="fade">
                <img src="images/slides/2.jpg" alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

                <div class="tp-caption  tp-resizeme" 
                    data-x="right" data-hoffset="0" 
                    data-y="top" data-voffset="220" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box">
                        <h1>Hospitals providing total<br> healthcare <span>Solutions.</span></h1>
                        <p>Denouncing pleasure and praising pain was born and we will <br>give you a complete account of the system.</p>
                        <div class="button">
                            <a class="#" href="#">Read More</a>
                            <a class="btn-style-two" href="#">Departments</a>           
                        </div>  
                    </div>
                </div>
                
            </li>
            <li data-transition="fade">
                <img src="images/slides/3.jpg"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="220" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box mar-lft">
                        <h1>Hospitals providing total<br> healthcare <span>Solutions.</span></h1>
                        <p>Denouncing pleasure and praising pain was born and we will <br>give you a complete account of the system.</p>
                        <div class="button">
                            <a class="#" href="#">Read More</a>
                            <a class="btn-style-two" href="#">Departments</a>           
                        </div>  
                    </div>
                </div>

            </li>
        </ul>
    </div>
</section>
<!--End rev slider wrapper-->

<!--Start call to action area-->

<!-- <section class="callto-action-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="title-box text-center">
                        <span class="flaticon-calendar"></span>
                        <h2>Make an Appointment</h2>    
                    </div>
                    <div class="form-holder clearfix">
                        <form id="appointment" class="clearfix" name="appointment-form" action="https://st.ourhtmldemo.com/new/Hospitals/inc/sendmail.php" method="post">
                            <div class="single-box mar-right-30">    
                                <div class="input-box">
                                    <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                                </div>
                                <div class="input-box">
                                    <select class="selectmenu">
                                        <option selected="selected">Select Doctor</option>
                                        <option>Marc Parcival</option>
                                        <option>Alen Bailey</option>
                                        <option>Basil Andrew</option>
                                        <option>Giles Franklin</option>
                                        <option>Edgar Denzil</option>
                                        <option>Garfield Feris</option>
                                    </select>  
                                </div>
                            </div>
                            <div class="single-box">    
                                <div class="input-box">  
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
                                <div class="input-box">
                                    <input type="text" name="date" placeholder="Select Date" id="datepicker">
                                    <div class="icon-box">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>       
                            </div>
                            <button class="thm-btn bgclr-1" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>    
                        </form>      
                    </div> 
                       
                </div>
            </div>
        </div>
    </div>
</section> -->

                        <!--End call to action area-->


  
<!--Start service area-->
<section class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="img-holder">
                    <img src="images/services/doctor.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <p>As a tertiary referral ICU to provide state of the art care with the help of very good professionals and infrastructure.</p>  
                    </div>    
                </div>
            </div>
            <div class="col-md-8">
                <div class="text-holder">
                    <!--Start tab box-->
                    <div class="tab-box">
                        <div class="tab-content">
                            <!--Start single tab pane-->
                            <div class="tab-pane" id="opthalmology">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Best Services</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3>Emergency Services</h3>
                                                <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="images/services/service-big-1.jpg" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>  
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane active" id="laboratory">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Outpatient</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3>Laboratory Analysis</h3>
                                                <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and the master-builder of human happiness. Expound the actual teachings of the great explorer of the truth.</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="images/services/service-big-2.jpg" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>  
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane" id="cardiac">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Best Services</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3>Cardiac Clinic Analysis</h3>
                                                <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and the master-builder of human happiness. Expound the actual teachings of the great explorer of the truth.</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="images/services/service-big-3.jpg" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>     
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane" id="outpatient">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Best Services</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3>OutPatient Analysis</h3>
                                                <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and the master-builder of human happiness. Expound the actual teachings of the great explorer of the truth.</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="images/services/service-big-4.jpg" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>     
                            </div>
                            <!--End single tab pane-->
                        </div>
                        <ul class="nav nav-tabs tab-menu">
                            <li>
                                <a href="#opthalmology" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-1.jpg" alt="Awesome Image">
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
                                <h3>Opthalmology</h3>
                            </li>
                            <li>
                                <a href="#opthalmology" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-1.jpg" alt="Awesome Image">
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
                                <h3>Opthalmology</h3>
                            </li>
                            <li>
                                <a href="#opthalmology" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-1.jpg" alt="Awesome Image">
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
                                <h3>Opthalmology</h3>
                            </li>
                            <li>
                                <a href="#opthalmology" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-1.jpg" alt="Awesome Image">
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
                                <h3>Opthalmology</h3>
                            </li>
                            <li>
                                <a href="#opthalmology" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-1.jpg" alt="Awesome Image">
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
                                <h3>Opthalmology</h3>
                            </li>
                            <li class="active">
                                <a href="#laboratory" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-2.jpg" alt="Awesome Image">
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
                                <h3>Laboratory</h3>
                            </li>
                            <li>
                                <a href="#cardiac" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-3.jpg" alt="Awesome Image">
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
                                <h3>Cardiac Clinic</h3>
                            </li>
                            <li>
                                <a href="#outpatient" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="images/services/service-small-4.jpg" alt="Awesome Image">
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
                                <h3>OutPatient</h3>
                            </li>
                        </ul> 
                    </div>
                    <!--End tab box--> 
                </div>
            </div>
        </div>
    </div>
</section>  
<!--End service area-->
 
<!--Start team area-->
<section class="team-area">
    <div class="container">
        <div class="sec-title">
            <h1>Team of Consultants</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
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
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
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
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
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
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-team-member">
                    <div class="img-holder">
                        <img src="images/team/4.jpg" alt="Awesome Image">
                        <div class="overlay-style">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <h3>Edgar Denzil</h3>
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
                            <h3>Edgar Denzil</h3> 
                            <span>Newyork</span>   
                        </div>    
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
    </div>
</section> 
<!--End team area-->
 
<!--Start fact counter area-->
<section class="fact-counter-area" style="background-image:url(images/resources/fact-counter-bg.jpg);">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Keep your headup & be patient</h1>
            <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the<br> system and expound the actual teachings of the great.</p>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <div class="single-item text-center">
                            <div class="icon-holder">
                                <span class="flaticon-medical"></span> 
                            </div>
                            <h1><span class="timer" data-from="1" data-to="25" data-speed="5000" data-refresh-interval="50">25</span></h1>
                            <h3>Years of Experience</h3>
                        </div>
                    </li>
                    <li>
                        <div class="single-item text-center">
                            <div class="icon-holder">
                                <span class="flaticon-smile"></span> 
                            </div>
                            <h1><span class="timer" data-from="1" data-to="284" data-speed="5000" data-refresh-interval="50">284</span></h1>
                            <h3>Well Smiley Faces</h3>
                        </div>
                    </li>
                    <li>
                        <div class="single-item text-center">
                            <div class="icon-holder">
                                <span class="flaticon-medical-1"></span> 
                            </div>
                            <h1><span class="timer" data-from="1" data-to="176" data-speed="5000" data-refresh-interval="50">176</span></h1>
                            <h3>Heart Transplant</h3>
                        </div>
                    </li>
                    <li>
                        <div class="single-item text-center">
                            <div class="icon-holder">
                                <span class="flaticon-ribbon"></span> 
                            </div>
                            <h1><span class="timer" data-from="1" data-to="142" data-speed="5000" data-refresh-interval="50">142</span></h1>
                            <h3>Awards Holded</h3>
                        </div>
                    </li>
                </ul>
            </div>
            <!--End single item-->
     
        </div>
    </div>
</section>
<!--End fact counter area--> 
 
<!--Start testimonial area-->
<section class="testimonial-area">
    <div class="container">
        <div class="sec-title mar0auto text-center">
            <h1>What Our Clients Say</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-12">
                <div class="testimonial-carousel">
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="images/testimonial/1.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                        </div>
                        <div class="name">
                            <h3>Rossy Miranda</h3>
                            <span>Newyork</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="images/testimonial/2.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>The master-builder of human happiness one rejects, dislikes, or avoids pleasure itself, because it is pleasure pursue.</p>
                        </div>
                        <div class="name">
                            <h3>Peter Lawrence</h3>
                            <span>California</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="images/testimonial/1.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                        </div>
                        <div class="name">
                            <h3>Rossy Miranda</h3>
                            <span>Newyork</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="images/testimonial/2.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>The master-builder of human happiness one rejects, dislikes, or avoids pleasure itself, because it is pleasure pursue.</p>
                        </div>
                        <div class="name">
                            <h3>Peter Lawrence</h3>
                            <span>California</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="images/testimonial/1.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                        </div>
                        <div class="name">
                            <h3>Rossy Miranda</h3>
                            <span>Newyork</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="images/testimonial/2.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>The master-builder of human happiness one rejects, dislikes, or avoids pleasure itself, because it is pleasure pursue.</p>
                        </div>
                        <div class="name">
                            <h3>Peter Lawrence</h3>
                            <span>California</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                </div>
            </div>
            <!--End single item-->

        </div>
    </div>
</section>
<!--End testimonial area--> 



<!--Start facilities Appointment area-->

<!--End facilities Appointment area-->
 
<!--Start brand area-->

<!--End brand area-->
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