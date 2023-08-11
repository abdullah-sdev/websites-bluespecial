<?php
session_start();
if(isset($_SESSION['vin_number'])){
    $vinnumber = $_SESSION['vin_number'];
}else{
    header('Location: index.php');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>Requesting...</title>

    <style>
    .head {
        /* margin: 0 auto; */
        text-align: center;
        justify-self: center;
        padding: 2rem 0rem;
        /* display:flex; */
        /* background: #82b8ff; */
        /* background-image: linear-gradient(to right, #182e4a , #3569ac); */
        background-image: linear-gradient(to right, #136388 , #1b78a5);
        /* height: 15vh; */
    }


    .head a {
        /* margin: 0 auto; */
        /* text-align: center; */
        /* padding: 25px; */
        /* display: flex; */
        margin-top:10px;
        font-size: 2rem;
        font-weight: 550;
        color: #000;

    }
    .head a span{
        
        color:#28a5df;
    }
    .head a img{
        height:60px;
    }
    main .section {

        text-align: center;
    }

    main .section p {
        /* padding: 5px; */
        font-size: 1.3rem;
        /* color: #000000; */

    }
    </style>

</head>

<body>

    <?php
    // include 'blades/header.php';
    ?>

    <div class="head">

        <a href="#" class="logo">
            <img src="img/logo.svg" alt="">
            
            <span>Vin</span> History Check
        </a>


        <!-- <hr>  -->
    </div>

    <main role="main">
        <div class="section">
            <p>Checking For Vehicle</p>
            <p class="heading-2">
                <?php echo $vinnumber; ?>
            </p>
        </div>
    </main>



    <?php
        include "blades/footer.php";
        ?>



    <script>
    if (true) {

        // Your application has indicated there's an error
        window.setTimeout(function() {

            // Move to a new location or you can do something else
            window.location.href = "getreport.php";

        }, 1000);

    }
    </script>




</body>

</html>