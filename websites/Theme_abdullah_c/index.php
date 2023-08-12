<?php
$error ="";
if (isset($_POST)) {
    if (isset($_POST['vin'])) {

        $vinnumber = $_POST['vin'];

        if (strlen($vinnumber)!= 17) {
            $error = "Please Enter Valid VIN Number";
        } else{
            session_start();
            $_SESSION['vin_number'] = $vinnumber;
            header('Location: loading.php');
        }
    }
    // unset($vinnumber);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css"
        integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>AutoDataRecords</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>

<body>

    <div class="head">
        <?php
        $page_name = "Home";
        include "blades/navbar.php";
        ?>
        <div class="hero">

            <p class="h2">
                Vehicle <br>
                <b>History Check</b>
            </p>

            <form action="index.php" method="POST" class="animate__animated animate__backInUp vin-report-form">
                <input type="text" class="search-header" placeholder="VIN CHECK NUMBER" name="vin" required title="Enter 17 digit VIN Number" pattern="[a-zA-Z0-9].{16,16}">
                <button type="submit" class="search-glass"> <img src="img/magnifying-glass.svg" alt=""></button>
            </form>

            <div class="error">

                <span>
                    <?php if (isset($vinnumber)) {
                        // echo $vinnumber;
                        echo $error;
                    } else {
                        // echo "Please Enter VIN Number";
                        // unset($vinnumber);
                    } ?>
                </span>
            </div>
            <div class="info">
                <!-- <a href=""><span>?</span> What is VIN?</a> -->
                <a href="how-to-order.php"><span>?</span> How to order?</a>

            </div>


        </div>


    </div>

    <main>
        <div class="container vin-section">
            <div class="info info-3" data-aos="fade-down">
                <div class="text-heading">
                    <p>Check <span>Vehicle History</span> in three easy steps</p>
                </div>

                <div class="text-list">
                    <div class="img"><img src="img/keyboard.svg" alt=""></div>
                    <div class="text">Enter the VIN number</div>
                </div>
                <div class="text-list">
                    <div class="img"><img src="img/cards.svg" alt=""></div>
                    <div class="text">Choose VIN report</div>
                </div>
                <div class="text-list">
                    <div class="img"><img src="img/lightbulb.svg" alt=""></div>
                    <div class="text">Find out more</div>
                </div>

            </div>

            <div class="info info-2" data-aos="fade-up">
                <img src="img/main-report-availability-1.png" class="mid" alt="">
            </div>
            <div class="info info-1" data-aos="fade-down">
                <div class="textbox">
                    <p>Data for vehicles from US and Canada</p>
                </div>
                <div class="textbox">
                    <p>Proven and reliable information</p>
                </div>
                <div class="textbox">
                    <p>Online support 24/7 Available</p>
                </div>
            </div>

        </div>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" d="M500,98.9L0,6.1V0h1000v6.1L500,98.9z"></path>
        </svg> -->

        <div class="container section-2">

            <div class="info info">
                <div class="text-heading " data-aos="fade-down">
                    <p class="heading-3">Why use <span>AUTO DATA RECORDS</span>?</p>
                </div>

                <div class="text-list " data-aos="zoom-in-up">

                    <div class="text text-1 animate__animated animate__backInUp"><b>Just purchase the VIN report to prevent purchasing a damaged
                            vehicle.</b> Make an informed decision rather than putting your and your loved ones' safety
                        in jeopardy. You can discover what the vehicle history conceals by just entering the VIN in the
                        search field. If available, you can even view old photos of the vehicle that show damage,
                        recorded miles, and more. <b> When purchasing a car on the secondary market, our vehicle history
                            report greatly assists.</b>
                    </div>
                </div>


            </div>

        </div>
        

        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"></path>
        </svg> -->
        <div class="container section-3 ">

            <div class="def-card" data-aos="flip-left">
                <div class="img"><img src="img/ico-equip-min.svg" alt=""></div>
                <div class="heading-2 ">Vehicle History</div>
                <div class="text-1">Information about offers sales and vehicle owners</div>
            </div>

            <div class="def-card" data-aos="flip-up">
                <div class="img"><img src="img/ico-damages-min.svg" alt=""></div>
                <div class="heading-2">Damages</div>
                <div class="text-1">Information about events and collisions with a vehicle</div>
            </div>
            <div class="def-card" data-aos="flip-up">
                <div class="img"><img src="img/ico-equip-min.svg" alt=""></div>
                <div class="heading-2">Mileage reading</div>
                <div class="text-1">Chronological list of mileage readings</div>
            </div>
            <div class="def-card" data-aos="flip-right">
                <div class="img"><img src="img/ico-service-min.svg" alt=""></div>
                <div class="heading-2">Vehicle inspections</div>
                <div class="text-1">Information on completed surveys / inspections vehicle</div>
            </div>

            <div class="def-card" data-aos="flip-left">
                <div class="img"><img src="img/ico-stolen-min.svg" alt=""></div>
                <div class="heading-2">Information theft</div>
                <div class="text-1">Checking international vehicle records sought</div>
            </div>
            <div class="def-card" data-aos="flip-down">
                <div class="img"><img src="img/ico-photos-min.svg" alt=""></div>
                <div class="heading-2">Archival photo
                </div>
                <div class="text-1">Archival photographic documentation of the vehicle</div>
            </div>
            <div class="def-card" data-aos="flip-down">
                <div class="img"><img src="img/ico-decoder-min.svg" alt=""></div>
                <div class="heading-2">Technical data</div>
                <div class="text-1">List of vehicle equipment options factory</div>
            </div>
            <div class="def-card" data-aos="flip-right">
                <div class="img"><img src="img/ico-decoder-min.svg" alt=""></div>
                <div class="heading-2">Analysis VIN</div>
                <div class="text-1">Checksum verification and validation VIN</div>
            </div>
        </div>



        <div class="container section-2">

            <div class="info info">
                <div class="text-heading " data-aos="fade-down">
                    <p class="heading-3 ">How to decode the <span>VIN number</span>?</p>
                </div>

                <div class="text-list" data-aos="fade-up">

                    <div class="text text-1">Our <b>VIN decoder</b> will provide you with extensive information encoded
                        by the vehicle manufacturer. With this, you get reliable information about the vehicle you
                        interesting, and even verify the equipment of the vehicle VIN. With this, you get reliable
                        information about the vehicle you interesting, and even verify the equipment of the vehicle VIN.
                        Simply enter the VIN number into our system, and after a few seconds you will receive decoded
                        information. On the basis of report you choose interesting and even check the country of origin
                        of the vehicle. The available payment methods, select the most convenient. Pay, and after a few
                        minutes you will receive a notification e-mail about the <b>Vehicle History Report</b>
                        generated.
                    </div>
                </div>


            </div>

        </div>

        <div class="container blogs">


            <div class="text-heading">
                <p class="heading-3 ">Blog</p>
            </div>


            <div class="cards-list ">
                <div class="card" data-aos="zoom-out-up">
                    <div class="chead">
                        <div class="feature">AUTO EXPERT</div>
                    </div>
                    <div class="cbody">
                        <p class="topic">A car with odometer rollback – what the VIN report will tell us about it</p>
                        <p class="body">A new car is a fresh start. It’s the perfect time to leave our old, tired
                            vehicle behind and upgrade to a sleek, shiny new ride. However, sometimes this means</p>
                    </div>
                </div>

                <div class="card" data-aos="zoom-out-up">
                    <div class="chead">
                        <div class="feature">AUTO EXPERT</div>
                    </div>
                    <div class="cbody">
                        <p class="topic">New car re-registration step by step</p>
                        <p class="body">When you purchase a new car, you’ll need to do a couple of things to get that
                            vehicle legally registered in your name. These steps will vary depending on where</p>
                    </div>
                </div>

                <div class="card" data-aos="zoom-out-up">
                    <div class="chead">
                        <div class="feature">AUTOMOTIVE TIPS</div>
                    </div>
                    <div class="cbody">
                        <p class="topic">6 tips on what to consider when buying a car</p>
                        <p class="body">Buying a car is a stressful decision, especially if you’ve never bought one
                            before – there’s a lot of factors to consider, which might seem intimidating at first. When
                            buying</p>
                    </div>
                </div>
                <div class="card" data-aos="zoom-out-up">
                    <div class="chead">
                        <div class="feature">AUTO NEWS</div>
                    </div>
                    <div class="cbody">
                        <p class="topic">Always up to date: Mercedes-Benz vehicles are constantly learning over the air
                        </p>
                        <p class="body">A new car is a fresh start. It’s the perfect time to leave our old, tired
                            vehicle behind and upgrade to a sleek, shiny new ride. However, sometimes this means</p>
                    </div>
                </div>

                <div class="card" data-aos="zoom-out-up">
                    <div class="chead">
                        <div class="feature">AUTO EXPERT</div>
                    </div>
                    <div class="cbody">
                        <p class="topic">The best in its class rolling up to the starting line: New Audi RS 3 now
                            available to order</p>
                        <p class="body">The new Audi RS 3 is best in its class in terms of acceleration and top speed.
                            The torque splitter, installed in an Audi for the first time, gives the vehicle maximum
                            agility and optimum stability.</p>
                    </div>
                </div>


                <div class="card" data-aos="zoom-out-up">
                    <div class="chead">
                        <div class="feature">AUTO NEWS</div>
                    </div>
                    <div class="cbody">
                        <p class="topic">A car with odometer rollback – what the VIN report will tell us about it</p>
                        <p class="body">Mercedes-Benz is further expanding the possibility of keeping programs and
                            systems in the vehicle up to date through updates over the air (OTA). What started with
                            Mercedes-Benz vehicles in the</p>
                    </div>
                </div>


            </div>


        </div>

        <div class="container contactform">


            <div class="text-heading">
                <p class="heading-3 ">Contact Us</p>
            </div>


            <div class="content">
        

        <div class="contact-form row" >

            <!-- <div class="cntimg col d-none d-md-block">
                <img src="img/pexels-roman-pohorecki-230557.jpg" alt="" class="img-fluid">
            </div> -->
            <div class="cntform col-md-12 col-sm-12" data-aos="flip-left">
                <p>Let us know what questions you have and how may we can help</p>
                
                <form  class="form vin-contact-form" action="https://formsubmit.co/32314913c8f17020ee24a9d5b7bcc20b" method="POST" enctype="multipart/form-data">

                    <input class="form-control form-control-lg" name="name" type="text" placeholder="Name" required aria-label="John Doe">
                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Email" required aria-label="someone@example.com">
                    <input class="form-control form-control-lg" type="text" name="subject" placeholder="Subject" required aria-label="Subject">
                    <textarea class="form-control form-control-lg" name="body" placeholder="Leave us a Message..!" required id="" cols="30" rows="7"></textarea>
                    <!-- <input type="hidden" name="_captcha" value="false"> -->
                    <!-- <input type="hidden" name="_next" value="index.php"> -->
                    <input type="hidden" name="_template" value="table">
                    <button type="submit" class="btn form-control">Send Message</button>



                </form>

               
            </div>
        </div>
    </div>

                    


         



        </div>



    </main>



   



    <footer>

        <?php
        include "blades/footer.php";
        ?>
    </footer>

    <script>
    const menuBtn = document.querySelector('.menu-btn');
    const menu = document.querySelector('.navbar');

    menuBtn.addEventListener('click', function() {
        menu.classList.toggle('nav-open')
    })
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>

</html>