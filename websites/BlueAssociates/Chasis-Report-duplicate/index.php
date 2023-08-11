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
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext"
        rel="stylesheet">
    <script type="text/javascript" defer src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" defer src="js/jquery-ui.min.js"></script>

    <title>Virtua - New Amazing HTML5 Template</title>

</head>

<body class="size-1280">
    <!-- PREMIUM FEATURES BUTTON -->
    <!-- <a target="_blank" class="hide-s" href="../template/virtua-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a> -->
    <!-- HEADER -->
    <?php
    include 'blades/header.php'
    ?>

    <!-- MAIN -->
    <main role="main">
        <!-- Header -->
        <header class="section-top-padding background-image text-center" style="background-image:url(img/img-05.jpg)">
            <h1
                class="text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-40 margin-top-130">
                Vehicle History Check
            </h1>
            <p class="text-white">VINCheck is a lookup service that the general public can take advantage of to discover
                if a car has ever been <br> recorded as a salvage vehicle or has a record of an insurance theft claim
                that hasn't been recovered.</p>
            <form action="index.php" method="POST" class="animate__animated animate__backInUp vin-report-form">
                <div class="form-vin">
                    <input type="text" class="search-header" placeholder="Enter Chasis Number" name="vin" required
                        title="Enter 17 digit VIN Number" pattern="[a-zA-Z0-9].{16,16}">
                    <button type="submit" class="search-glass"> <img src="img/magnifying-glass.png" alt=""
                            height="10"></button>
                </div>
            </form>
            <i class="slow icon-sli-arrow-down text-white margin-top-20 text-size-16"></i>
            <!-- Image -->
            <!-- <img class="margin-top-20 center" src="img/app.png" alt=""> -->
            <img class="margin-top-20 center" src="img/slider1-1-removebg.png" alt="">

            <!-- dark full width arrow object -->
            <img class="arrow-object" src="img/arrow-object-dark.svg" alt="">
        </header>

        <!-- Section 1 -->
        <section class="section-small-padding background-dark text-center">
            <div class="line">
                <div class="m-10 l-6 xl-4 center">
                    <div class="margin">
                        <!-- <a class="s-12 m-6 margin-s-bottom" href="/">
                <img class="full-img right" src="img/google-play.svg" alt="">
              </a>
              <a class="s-12 m-6" href="/">
                <img class="full-img" src="img/app-store.svg" alt="">
              </a> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2 -->
        <section class="section-top-padding background-white">
            <div class="line text-center">
                <i class="icon-sli-heart text-primary text-size-40"></i>
                <h2 class="text-dark text-size-50 text-m-size-40">Report <b>Features</b></h2>
                <hr class="break background-primary break-small break-center margin-bottom-50">
            </div>
            <div class="line">
                <div class="margin2x">
                    <div class="s-12 m-6 l-4 margin-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-equalizer text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Unlimited Color
                                Variants</h3>
                            <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat,
                                vel illum dolore nulla facilisis</p>
                            <!-- <a class="text-more-info text-primary" href="/">Read more</a>                 -->
                        </div>
                    </div>
                    <div class="s-12 m-6 l-4 margin-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-layers text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Vehicle History
                            </h3>
                            <p>Information about offers sales and vehicle owners</p>
                            <a class="text-more-info text-primary" href="/">Read more</a>
                        </div>
                    </div>
                    <div class="s-12 m-6 l-4 margin-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-share text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Clean Modern Code
                            </h3>
                            <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat,
                                vel illum dolore nulla facilisis</p>
                            <a class="text-more-info text-primary" href="/">Read more</a>
                        </div>
                    </div>
                    <div class="s-12 m-6 l-4 margin-m-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-paper-plane text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Parallax Background
                            </h3>
                            <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat,
                                vel illum dolore nulla facilisis</p>
                            <a class="text-more-info text-primary" href="/">Read more</a>
                        </div>
                    </div>
                    <div class="s-12 m-6 l-4 margin-m-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-diamond text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Responsive Layoute
                            </h3>
                            <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat,
                                vel illum dolore nulla facilisis</p>
                            <a class="text-more-info text-primary" href="/">Read more</a>
                        </div>
                    </div>
                    <div class="s-12 m-6 l-4 margin-m-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-rocket text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">And many more...
                            </h3>
                            <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat,
                                vel illum dolore nulla facilisis</p>
                            <a class="text-more-info text-primary" href="/">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="section background-white">
            <div class="line text-center">
                <p class="text-primary text-size-20">Lorem ipsum dolor sit amet</p>
                <h2 class="text-dark text-size-50 text-m-size-40">Responsive <b>Components</b></h2>
                <i class="icon-chevron_down text-primary margin-bottom-50 text-size-20"></i>
            </div>

            <div class="l-12 xl-7 center">
                <div class="margin">
                    <!-- Left Column -->
                    <div class="s-12 m-12 l-4 text-right">
                        <div class="margin-right-50">
                            <i class="icon-sli-paper-plane text-primary text-size-40 margin-bottom-20"></i>
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Responsive Carousel
                            </h3>
                            <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat,
                                illum nulla facilisis</p>
                        </div>

                        <div class="line">
                            <hr class="break background-primary break-small right margin-top-bottom-40">
                        </div>

                        <div class="margin-right-50">
                            <i class="icon-sli-bulb text-primary text-size-40 margin-bottom-20"></i>
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Tabs with URL Hash
                            </h3>
                            <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat,
                                dolore nulla facilisis</p>
                        </div>
                    </div>

                    <!-- Middle Column (carousel)-->
                    <div class="s-12 m-12 l-4">
                        <div class="carousel-default owl-carousel carousel-hide-arrows margin-m-top-bottom-50">
                            <div class="item">
                                <img src="img/responsive-01.png" />
                            </div>
                            <div class="item">
                                <img src="img/responsive-02.png" />
                            </div>
                            <div class="item">
                                <img src="img/responsive-03.png" />
                            </div>
                            <div class="item">
                                <img src="img/responsive-04.png" />
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="s-12 m-12 l-4">
                        <div class="margin-left-50">
                            <i class="icon-sli-heart text-primary text-size-40 margin-bottom-20"></i>
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Unlimited Color
                                Variants</h3>
                            <p>Hendrerit in vulputate duis autem vel eum iriure dolor in molestie consequat, vel illum
                                dolore nulla facilisis</p>
                        </div>

                        <div class="line">
                            <hr class="break background-primary break-small margin-top-bottom-40">
                        </div>

                        <div class="margin-left-50">
                            <i class="icon-sli-layers text-primary text-size-40 margin-bottom-20"></i>
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Responsive
                                Navigation</h3>
                            <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie vel illum
                                dolore nulla facilisis</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4 -->
        <section class="background-primary full-width">
            <div class="m-12 l-6 xl-5 xxl-4">
                <img class="full-img" src="img/img-02.jpg" />
            </div>
            <div class="m-12 l-6 xl-7 xxl-8">
                <div class="l-12 xl-11 xxl-8 padding-2x">
                    <h2 class="text-l-size-40 text-size-50 text-white">Always <b>Nearby</b></h2>
                    <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip.</p>
                    <!-- white Start your Business object -->
                    <img class="margin-left-20 margin-top-30 margin-bottom-60" src="img/start-your-business.svg" alt="">
                </div>
            </div>
        </section>

        <!-- Section 5 -->
        <section class="section-small-padding background-grey">
            <div class="line-full-width">
                <div class="margin2x">
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-1.png" />
                    </div>
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-2.png" />
                    </div>
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-3.png" />
                    </div>
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-1.png" />
                    </div>
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-4.png" />
                    </div>
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-5.png" />
                    </div>
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-3.png" />
                    </div>
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-1.png" />
                    </div>
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-5.png" />
                    </div>
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-4.png" />
                    </div>
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-1.png" />
                    </div>
                    <div class="m-6 l-1">
                        <img class="margin-bottom" src="img/logo-2.png" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 7 -->
        <!-- <section class="section-small-padding background-dark text-center">      
        <div class="line">
          <h2 class="text-white text-size-50 text-m-size-40 margin-bottom-20">Get <b>Free Version</b></h2>
          <div class="m-10 l-6 xl-4 center">
            <div class="margin">
              <a class="s-12 m-6 margin-s-bottom" href="/">
                <img class="full-img right" src="img/google-play.svg" alt="">
              </a>
              <a class="s-12 m-6" href="/">
                <img class="full-img" src="img/app-store.svg" alt="">
              </a>
            </div>
          </div>                                                                                               
        </div>       
      </section>      -->

    </main>

    <!-- FOOTER -->
    <?php
      include 'blades/footer.php'
    ?>
    <script type="text/javascript" src="js/responsee.js" defer></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js" defer></script>
    <script type="text/javascript" src="js/template-scripts.js" defer></script>
</body>

</html>