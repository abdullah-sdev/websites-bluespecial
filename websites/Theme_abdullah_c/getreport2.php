<?php
session_start();


if(isset($_SESSION['vin_number'])){
    $vinnumber = $_SESSION['vin_number'];
}else{
    header('Location: index.php');
}

include "admin/dbconn.php";


  

        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $phone = $_SESSION['phone'];
        $country = $_SESSION['country'];
        $package = $_SESSION['package'];




        // include "blades/transaction.php";






$cntry = "SELECT * from countries";
$r_cntry = $conn->query($cntry);

// $pkgs = "SELECT * from packages";
// $r_pkgs = $conn->query($pkgs);
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css"
        integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
        width: 50%;
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
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="" pattern="[A-Za-z\s]+" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="" required pattern="[0-9._%+-]{8,}">

                    <label for="vin_number">Vin</label>
                    <input type="text" name="vin_number" required id="">

                    <label for="country">Select Country</label>
                    <select name="country" id="">
                        <!-- Populate the options dynamically based on your data -->
                        <?php
                        // Fetch countries data from the database and populate the options
                        $cntry = "SELECT * from countries";
                        $r_cntry = $conn->query($cntry);

                        if ($r_cntry->num_rows > 0) {
                            while ($row = $r_cntry->fetch_assoc()) {
                                echo '<option value="' . $row["cntry_id"] . '">' . $row["countryName"] . '</option>';
                            }
                        }
                        ?>
                    </select>

                    <!-- <label for="package">Select package</label> -->
                    <!-- PayPal Smart Payment Buttons -->
                    <!-- <div id="smart-button-container">
                        <div style="text-align: center;">
                            <div style="margin-bottom: 1.25rem;">
                                <p></p>
                                <select id="item-options" name="package">
                                    <option value="basic" price="29">basic - 29 USD</option>
                                    <option value="silver" price="49">silver - 49 USD</option>
                                    <option value="gold" price="79">gold - 79 USD</option>
                                    <option value="platinum" price="119">platinum - 119 USD</option>
                                </select>
                                <select style="visibility: hidden" id="quantitySelect"></select>
                            </div>
                            <div id="paypal-button-container"></div>
                        </div>
                    </div> -->


                    

        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="E6T2B76PVX7EN">
        <table>
            <tr>
                <td><input type="hidden" name="on0" value="PACKAGES">
                <label for="os0">Select package</label>
            </td>
            </tr>
            <tr>
                <td>
                    <select name="os0">
                        <option value="basic">basic $29.00 USD</option>
                        <option value="silver">silver $49.00 USD</option>
                        <option value="gold">gold $79.00 USD</option>
                        <option value="platinum">platinum $119.00 USD</option>
                    </select> 
                </td>
            </tr>
        </table>
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit"
            alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
                </form>

            </center>
            <!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="E6T2B76PVX7EN">
        <table>
        <tr><td><input type="hidden" name="on0" value="PACKAGES">PACKAGES</td></tr><tr><td><select name="os0">
            <option value="basic">basic $29.00 USD</option>
            <option value="silver">silver $49.00 USD</option>
            <option value="gold">gold $79.00 USD</option>
            <option value="platinum">platinum $119.00 USD</option>
        </select> </td></tr>
        </table>
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    
    </form> -->

        </div>

    </main>

    <footer>

        <?php
        include "blades/footer.php";
        ?>

    </footer>




    <?php

// session_destroy();
$conn->close();
?>
 <script src="https://www.paypal.com/sdk/js?client-id=<?php echo $clientID ?>"
                        data-sdk-integration-source="button-factory"></script>
<script>
                    function initPayPalButton() {
                        var shipping = 0;
                        var itemOptions = document.querySelector("#smart-button-container #item-options");
                        var quantity = parseInt();
                        var quantitySelect = document.querySelector("#smart-button-container #quantitySelect");
                        if (!isNaN(quantity)) {
                            quantitySelect.style.visibility = "visible";
                        }
                        var orderDescription = '';
                        if (orderDescription === '') {
                            orderDescription = 'Item';
                        }
                        paypal.Buttons({
                            style: {
                                shape: 'rect',
                                color: 'gold',
                                layout: 'vertical',
                                label: 'checkout',

                            },
                            createOrder: function(data, actions) {
                                var selectedItemDescription = itemOptions.options[itemOptions.selectedIndex]
                                    .value;
                                var selectedItemPrice = parseFloat(itemOptions.options[itemOptions
                                    .selectedIndex].getAttribute("price"));
                                var tax = (0 === 0 || false) ? 0 : (selectedItemPrice * (parseFloat(0) /
                                    100));
                                if (quantitySelect.options.length > 0) {
                                    quantity = parseInt(quantitySelect.options[quantitySelect.selectedIndex]
                                        .value);
                                } else {
                                    quantity = 1;
                                }

                                tax *= quantity;
                                tax = Math.round(tax * 100) / 100;
                                var priceTotal = quantity * selectedItemPrice + parseFloat(shipping) + tax;
                                priceTotal = Math.round(priceTotal * 100) / 100;
                                var itemTotalValue = Math.round((selectedItemPrice * quantity) * 100) / 100;

                                return actions.order.create({
                                    purchase_units: [{
                                        description: orderDescription,
                                        amount: {
                                            currency_code: 'USD',
                                            value: priceTotal,
                                            breakdown: {
                                                item_total: {
                                                    currency_code: 'USD',
                                                    value: itemTotalValue,
                                                },
                                                shipping: {
                                                    currency_code: 'USD',
                                                    value: shipping,
                                                },
                                                tax_total: {
                                                    currency_code: 'USD',
                                                    value: tax,
                                                }
                                            }
                                        },
                                        items: [{
                                            name: selectedItemDescription,
                                            unit_amount: {
                                                currency_code: 'USD',
                                                value: selectedItemPrice,
                                            },
                                            quantity: quantity
                                        }]
                                    }]
                                });
                            },
                            onApprove: function(data, actions) {
                                return actions.order.capture().then(function(orderData) {

                                    // Full available details
                                    console.log('Capture result', orderData, JSON.stringify(
                                        orderData, null, 2));

                                    // Show a success message within this page, e.g.
                                    const element = document.getElementById(
                                        'paypal-button-container');
                                    element.innerHTML = '';
                                    element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                    // Or go to another URL:  actions.redirect('thank_you.html');
                                    window.location.href = "blades/transaction.php";

                                });
                            },
                            onError: function(err) {
                                console.log(err);
                            },
                        }).render('#paypal-button-container');
                    }
                    initPayPalButton();
                    </script>
</body>

</html>