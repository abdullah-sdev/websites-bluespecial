@extends('frontend.layout.main')
@section('main-container')
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                        src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-498</div>
                    <h1 class="display-5 fw-bolder">Shop item template</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">$45.00</span>
                        <span>$40.00</span>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem
                        modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus
                        ipsam minima ea iste laborum vero?</p>
                    <div class="col-md-6">
                        {{-- <form action="{{ url('/pay') }}" method="post">
                            @csrf
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <input type="hidden" name="amount" value="200">
                            <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                                 <i class="fa fa-paypal" aria-hidden="true"></i>
                                Pay
                            </button>

                            
                        </form> --}}
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select class="custom-select" name="country" id="country">
                                <option selected disabled>Select one</option>
                                <option value="CAN">Canada</option>
                                <option value="US">United States</option>
                                <option value="UK">United Kingdom</option>
                            </select>
                        </div>
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 100%"/>
                        <br>
                        <button onclick='handleClick()' id='proceed' class="btn btn-outline-dark">Proceed</button>
                        <br>
                        <!-- Set up a container element for the button -->
                        <div id="paypal-button-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AT97b7c1hZLt5PQWaTQD5dHn-ahqHSzAx3GvrBgoViqIKX8noUluDwniNKobGTFzzq8_X5eSqvRpJi25&currency=USD"></script>

    <script>

        //Find Which Radio Button is clicked
        // function handleClick(radioBtn)
        // {
        //     productValue = radioBtn.value;
        //     // console.log(productValue);
        //     // document.getElementById('paypal-button-container').style.display = 'block';
        //     document.getElementById('paypal-button-container').style.opacity = '1';
        //     document.getElementById('paypal-button-container').style.height = 'auto';
        // }

        function handleClick(){
            // console.log(document.getElementById('inputQuantity').value);
            productValue = document.getElementById('inputQuantity').value;
            productValue = parseInt(productValue);
            clientCountry = document.getElementById('country').value;
            console.log(clientCountry);
            // console.log( typeof(productValue));
            document.getElementById('proceed').style.display = 'none';
            document.getElementById('inputQuantity').style.display = 'none';
            document.getElementById('paypal-button-container').style.opacity = '1';
            document.getElementById('paypal-button-container').style.height = 'auto';
        }


        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Call your server to set up the transaction
            createOrder: function(data, actions) {
                return fetch('/api/paypal/order/create/', {
                    method: 'post',
                    body:JSON.stringify({
                        "value":productValue,
                        "country":clientCountry
                    })
                }).then(function(res) {
                    return res.json();
                }).then(function(orderData) {
                    return orderData.id;
                });
            },

            // Call your server to finalize the transaction
            onApprove: function(data, actions) {
                return fetch('/api/paypal/order/capture/', {
                    method: 'post',
                    body:JSON.stringify({
                        orderId : data.orderID
                    })
                }).then(function(res) {
                    return res.json();
                }).then(function(orderData) {
                    // Three cases to handle:
                    //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                    //   (2) Other non-recoverable errors -> Show a failure message
                    //   (3) Successful transaction -> Show confirmation or thank you

                    // This example reads a v2/checkout/orders capture response, propagated from the server
                    // You could use a different API or structure for your 'orderData'
                    var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                    if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                        return actions.restart(); // Recoverable state, per:
                        // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                    }

                    if (errorDetail) {
                        var msg = 'Sorry, your transaction could not be processed.';
                        if (errorDetail.description) msg += '\n\n' + errorDetail.description;
                        if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
                        return alert(msg); // Show a failure message (try to avoid alerts in production environments)
                    }

                    // Successful capture! For demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                    // Replace the above to show a success message within this page, e.g.
                    // const element = document.getElementById('paypal-button-container');
                    // element.innerHTML = '';
                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }

        }).render('#paypal-button-container');
    </script>
@endsection
