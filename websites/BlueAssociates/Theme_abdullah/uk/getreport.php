<?php  
    session_start();


    if(isset($_SESSION['vin_number'])){
        $vinnumber = $_SESSION['vin_number'];
    }else{
        header('Location: index.php');
    }

    include "../admin/dbconn.php";


    // $statusreport = 0;

    if (isset($_POST)) {
        // $vinnumber = $_POST['vin'];

        if (isset($_POST['name']) & isset($_POST['email']) & isset($_POST['phone']) & isset($_POST['country']) & isset($_POST['package'])  ){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['phone'] = $_POST['phone'];
            $_SESSION['country'] = $_POST['country'];
            $_SESSION['package'] = $_POST['package'];
            // $vinnumber = $_POST['vin_number'];
            
            
            header('Location: getreport2.php');
        
        
        // session_destroy();
        
    }



    }





    $cntry = "SELECT * from countries";
    $r_cntry = $conn->query($cntry);

    $pkgs = "SELECT * from pakages";
    $r_pkgs = $conn->query($pkgs);
    // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com')";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css"
        integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">
    <title>Order-Report Form</title>

    <style>
    .getreport {
        /* margin: 0 auto; */
        align-content: center;
    }

    .getreport form {
        display: flex;
        flex-direction: column;
        padding: 3rem;
        font-size: 2rem;
        width: 50%%;
        justify-self: center;
        align-self: center;
        /* text-align:center; */
        /* justify-content: center; */
    }

    .getreport form label {
        font-size: 1.5rem;
        margin-left: 0.5rem;
        font-weight: bold;
        color: rgb(0 46 104);
    }

    .getreport form input,
    select {
        font-size: 2rem;
        padding: 0.5rem;
    }

    button {
        font-size: 2rem;
        margin: 1rem;
        font-weight: bold;
        background-color: #2980b9;
        border: none;
        /* border-radius:10px; */
        color: #fff;
        padding: 1rem;
    }



    /* The Modal (background) */
    /* The Modal (background) */
    </style>
    <style>
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2rem 4rem;
            background-color: #012e68;
            color: white;
            font-size: 1.8rem;
        }

        .modal-body {
            padding: 2rem 4rem;
        }

        .modal-footer {
            padding: 2px 16px;
            background-color: #012e68;
            color: white;
        }
    </style>
</head>

<body>
    <div class="head">

        <center>
            <div class="navbar">
            <a href="index.php" class="logo">

        <span>Auto</span>DataRecords
    </a>
            </div>
        </center>

    </div>


    <main>
        <div class="section container">
            <p class="heading-1">Get Full Report <span>Select package</span> & Get your Vehicle History Report
                instantly!.</p>
            <p class="heading-1"> </p>

        </div>
        <div class="getreport">
           
            <center>
                <form action="" class="vin-report-form" method="post" onsubmit="displayModal(event)">



                    <label for= "name">Full Name</label>
                    <input type="dadadsa" name="name" id="" pattern="[A-Za-z\s]+" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="" required pattern="[A_Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="" required pattern="[0-9._%+-]{8,}">

                    <label for="vin_number">Vin</label>
                    <input type="text" name="vin_number" pattern="[a-zA-Z0-9].{16,16}" required id="" disabled value="<?php echo $vinnumber; ?>">

                    <label for="country">Select Country</label>
                    <select name="country" id="">

                        <?php 
                            if ($r_cntry->num_rows > 0) {
                                // output data of each row
                                while($row = $r_cntry->fetch_assoc()) {
                                //   echo "id: " . $row["cntry_id"]. " - Name: " . $row["countryName"].  "<br>";

                                echo "<option value='" . $row["cntry_id"]. "'>" . $row["countryName"].  "</option>";
                                }
                            }
                        ?>

                    </select>

                    <label for="package">Select package</label>

                    

                    <div id="smart-button-container">
                        <div style="text-align: center;">
                            <div style="margin-bottom: 1.25rem;">
                                <p></p>
                                <select id="item-options"  style="width:100%"  name="package">
                                    <option value="basic" price="29">basic - 29 USD</option>
                                    <option value="silver" price="49">silver - 49 USD</option>
                                    <option value="gold" price="79">gold - 79 USD</option>
                                    <option value="platinum" price="119">platinum - 119 USD</option>
                                </select>
                                <select style="visibility: hidden" id="quantitySelect"></select>
                            </div>
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
         
                   

                    <button type="submit">Proceed</button>

                </form>
            </center>

        </div>

    </main>

    <footer>

        <?php
        include "../blades/footer.php";
        ?>

    </footer>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Terms and Conditions</h2>
            </div>
            <div class="modal-body">
                <ul>
                    <li><p>If the report was not delivered even in spam and junk folders and the customer claims within 48 hours, we would refund his payment.</p></li>
                    <li><p>If there is any type of mistake in a report and the customer claims within 48 hours, we will refund his payment.</p></li>
                    <li><p>
If a customer claims within 48 hours that the transaction made was not by him then we will verify this by matching the mail account on which he requested the report and the mail account by which he made a payment are the same. If they are the same we won't refund otherwise we will refund his payment.</p></li>
                </ul>
            





            </div>
            <div class="modal-footer">
            <button onclick="submitForm()">Accept</button>
    <button onclick="hideModal()">Cancel</button>
            </div>
        </div>

    </div>
    <script>
    function displayModal(event) {
        event.preventDefault(); // Prevent the form from submitting
        document.getElementById("myModal").style.display = "block"; // Display the modal popup
    }

    function hideModal() {
        document.getElementById("myModal").style.display = "none"; // Hide the modal popup
    }

    function submitForm() {
        document.querySelector("form").submit(); // Submit the form data
    }
</script>
    <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    <script>
    // if (true) {

    //     // Your application has indicated there's an error
    //     window.setTimeout(function() {

    //         // Move to a new location or you can do something else
    //         window.location.href = "index.php";
    //         window.location.href = "index.php";

    //     }, 12000);

    // }
    </script>
    <?php

// session_destroy();
$conn->close();
?>

</body>

</html>