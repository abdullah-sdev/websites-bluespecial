<!--Start header area-->

<!--Start top bar area-->
<!-- <section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="top-left">
                    <p><span class="flaticon-phone"></span>24 hours emergency & ambulance Service: +321 789 01 2345</p> 
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="top-right clearfix">
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><button class="thm-btn2 bgclr-1"> Careers</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--End top bar area-->  

<!--Start header area--> 
<section class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-5">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/resources/RafaheaamMedicalCenterlogo.png" alt="Awesome Logo">
                        
                    </a>
                </div>
                
            </div>
           
            <div class="col-lg-5 col-md-6">
                <div class="header-right pull-right">
                
                
                    <ul>
                        <li>
                        <!-- <div class="icon-holder">
                                <span class="flaticon-phone"></span>
                            </div> -->
                            <div class="text-holder">
                                <h4>General, Orthopedic & Trauma Center</h4>
                                <span>+92 336 3743774</span>    
                            </div>

                        </li>
                        
                        <li>
                            
                            <div class="text-holder">
                                
                                <div class="top-right clearfix">
                    <div class="social-links headaa" style="display:flex;">
                        <div><a href="https://www.facebook.com/rmcpk" target="_blank"><i class="fa fa-facebook"></i></a></div>
                        <!-- <div><a href="#"><i class="fa fa-twitter"></i></a></div>
                        <div><a href="#"><i class="fa fa-google-plus"></i></a></div> -->
                        <!-- <div><a href="#"><i class="fa fa-instagram"></i></a></div> -->
                        <div><a href="https://www.linkedin.com/company/rafah-e-aam-medical-centre" target="_blank" ><i class="fa fa-linkedin"></i></a></div>
                        <!-- <div><a href="#" class="thm-btn2 bgclr-1">Careers</a></div> -->
                        <!-- <div><button class="thm-btn2 bgclr-1"> Careers</button></div> -->
            </div>
            <!-- <div><button class="thm-btn2 bgclr-1"> Careers </button></div> -->
                </div>  
                            </div>
                        </li>

                        <li>

                            <div class="text-holder">
                                <h4>24 Hours Emergency Services</h4>
                                    
                            </div>
                        </li>
                                
                    </ul>
                    <!-- <div class="search-button pull-right">
                        <div class="toggle-search">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>    
                        </div>
                    </div> -->
                    
                </div>
            </div>

            
        </div>
    </div>
</section>   
<!--End header area-->  

<!--Start header-search  area-->
<!-- <section class="header-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="search-form pull-right">
                    <form action="#">
                        <div class="search">
                            <input type="search" name="search" value="" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--End header-search  area-->   

<!--  -->
<!-- class="current" in li -->

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
                            <li <?php  if($current == "index") {echo 'class="current"';} ?>><a href="index.php">Home</a></li>

                            <li class="dropdown <?php  if($current == "about") {echo 'current';} ?>"  ><a>Our Hospital</a>
                                <ul>

                                    <li><a href="gallery.php">Photo Gallery</a></li>
                                    <li><a href="about.php">About RMC</a></li>
                                    <!-- <li><a href="about.php">Gallery</a></li>
                                    <li><a href="about.php">About RMC</a></li> -->
                                    
                                    <!-- 
                                        <li><a href="about.php">About Hospitals</a></li>
                                        <li><a href="doctors.php">Meet Our Doctors</a></li>
                                    <li><a href="faq.php">FAQ’s</a></li>
                                    <li><a href="testimonials.php">Testimonials</a></li>
                                    <li><a href="project.php">Our Gallery</a></li>
                                    <li><a href="project-single.php">Gallery Single</a></li> -->
                                </ul>
                            </li>
                            <li class="dropdown <?php  if($current == "services") {echo 'current';} ?>" ><a>Services</a>
                                <ul>
                                    <li><a href="emergencyservices.php">Emergency services</a></li>
                                    <li><a href="outpatient.php">Outpatient Department</a></li>
                                    <li><a href="inpatient.php">Inpatient Department</a></li>
                                    <li><a href="intensive-care-unit.php">Intensive Care Unit</a></li>
                                    <li><a href="operation-theatre.php">Operation theatre</a></li>
                                    <li><a href="laboratory.php">Laboratory</a></li>
                                    <li><a href="radiology.php">Radiology</a></li>
                                    <li><a href="ultra-sound.php">Ultra Sound - Color doppler</a></li>
                                    <li><a href="pharmacy.php">24-Hours Pharmacy</a></li>
                                    <li><a href="physiotherapy.php">Physiotherapy</a></li>
                                </ul>
                            </li>
                            <li <?php  if($current == "fidoctor") {echo 'class="current"';} ?>><a href="schedule.php">Find A Doctor</a></li>
                            <!-- <li class="dropdown <?php  if($current == "department") {echo 'current';} ?>"><a href="departments.php">Departments</a>
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
                            </li> -->

                            <!-- <li <?php  if($current == "special") {echo 'class="current"';} ?>><a href="index.php">Speciality</a></li> -->
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
                            <li <?php  if($current == "cclients") {echo 'class="current"';} ?>><a href="corporateclients.php">Corporate Clients</a></li>
                            <li class="dropdown" <?php  if($current == "contact") {echo 'class="current"';} ?>><a>Contact Us</a>

                                <ul>
                                    <li> <a  href="careers.php">Career</a> </li>
                                    <li><a  href="contact.php">Quick Contact</a> </li>
                                </ul>
                            </li>
                        </ul>
                        
                    </div>
                </nav>
                <!--End mainmenu-->
                <!--Start mainmenu right box-->
                <div class="mainmenu-right-box pull-right">
                    <!-- <div class="cart_select">
                        <button><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>(0)</span></button>
                    </div> -->
                    <!-- <div class="consultation-button">
                        <a href="#">Career</a>    
                    </div> -->
                </div>
                <!--End mainmenu right box-->    
            </div>
        </div>
    </div>
</section>

