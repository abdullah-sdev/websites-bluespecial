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
    <title>How To Order a Vehicle History Report</title>


</head>

<body>
    <div class="head">
        <?php
        $page_name = "How to order a vehicle history report";
        
        include "blades/navbar.php";
        ?>
        <?php
        include "blades/breadcrumbs.php";
        ?>

    </div>


    <main>
        <div class="container" style="padding: 1rem 7rem; ">

            <div class="text-heading">
                <p class="heading-1" style="text-align: start; justify-self: center; ">How to order a vehicle history report</p>
            </div>
            <div class="text" style="font-weight:600">
                <p>However you arrived to the AutoDataRecords website – through the blog, through our home page or as a result of searching information about VIN or vehicle history. It doesn’t matter – for your convenience we have provided a number of boxes where you can check a VIN number. This brings us to the first step.</p>
            </div>
        </div>



        <div class="container section-2">
            <div class="heading-1">Step 1: Enter your VIN number</div>
            <br>
            <!-- <div class="image-sample"><img src="img/pexels-mike-b-120049.jpg" alt=""></div> -->
            <div class="text">
                <p>Enter 17 characters in the appropriate box and click “Check”.</p>
            </div>
            <!-- <div class="cta-button"></div> -->

        </div>

        <div class="container section-2">
            <div class="heading-1">Step 2: See what data our reports contain</div>
            <br>
            <!-- <div class="image-sample"><img src="img/pexels-mike-b-120049.jpg" alt=""></div> -->
            <div class="text">
                <p>You would not be making a blind bargain. Depending on the vehicle, you will see such basic information as year of manufacture, brand, model, but also additional details – event history, mileage or information from stolen vehicle databases. Check it out yourself – all you need to do is enter a VIN number at the top of the page. Note: if no data is available at this point, no data will be included in the post-purchase report.

Here you can also decide what to purchase – we offer several types of reports. If your future car was imported, e.g. from Belgium, the Netherlands or USA, you will have an additional decision to make. You may buy a report with additional data from these countries.

</p>

            </div>
            <!-- <div class="cta-button"></div> -->

        </div>
        <div class="container section-2">
            <div class="heading-1">Step 3: Pay for the selected vehicle history report</div>
            <!-- <div class="image-sample"><img src="img/pexels-mike-b-120049.jpg" alt=""></div> -->
            <div class="text">
                <br>
                <p>If you have a discount code or a PREPAID code, enter it before selecting a payment method. Enter your e-mail address, which will also serve as your account login. You can choose from many convenient payment methods. After making a choice, follow the on-screen instructions.

Payment processing time is usually 2–3 minutes, however in case of a traditional bank transfer it may be longer, especially at the weekends and during holidays.

When your payment is successful, you will receive a payment confirmation e-mail and – if it is your first purchase – another e-mail with a password to your account. If you are a first-time buyer and you cannot find the e-mail with your password, be sure to also check the SPAM folder.</p>
            </div>
            <!-- <div class="cta-button"></div> -->

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

        menuBtn.addEventListener('click', function () {
            menu.classList.toggle('nav-open')
        })
    </script>
</body>

</html>