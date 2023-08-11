@extends('frontend.layout.main')
@section('main-container')
    
    

    <main>
        <div class="section container">
            <p class="heading-1">Get Full Report <span>Select package</span> & Get your Vehicle History Report
                instantly!.</p>
            <p class="heading-1"> </p>

        </div>
        <div class="getreport">

            


            {{-- <form action="{{url('/proceedtopaypal')}}" class="vin-report-form" method="POST" onsubmit="displayModal(event)">

                @csrf
                <div class="error">
                    <pre>
                        @php
                            print_r($errors->all());
                        @endphp
                    </pre>
                </div>
                



                <button type="submit">Proceed</button>

            </form> --}}

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="vin-report-form">
                @csrf
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="E6T2B76PVX7EN">
                <input type="hidden" value="2" name="tax"> 
                <table>
                    <tr>
                        <td>
                            <input type="hidden" name="on0" value="PACKAGES">
                            <label for="package">Select Package</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="os0" style="width:100%">
                                <option value="basic">Basic $29.00 USD</option>
                                <option value="silver">Silver $49.00 USD</option>
                                <option value="gold">Gold $79.00 USD</option>
                                <option value="platinum">Platinum $119.00 USD</option>
                            </select> 
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="currency_code" value="USD">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit"
                    alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>


        </div>

    </main>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="hideModal()">&times;</span>
                <h2>Terms and Conditions</h2>
            </div>
            <div class="modal-body">
                <ul>
                    <li>
                        <p>If the report was not delivered even in spam and junk folders and the customer claims within
                            48 hours, we would refund his payment.</p>
                    </li>
                    <li>
                        <p>If there is any type of mistake in a report and the customer claims within 48 hours, we will
                            refund his payment.</p>
                    </li>
                    <li>
                        <p>
                            If a customer claims within 48 hours that the transaction made was not by him then we will
                            verify this by matching the mail account on which he requested the report and the mail
                            account by which he made a payment are the same. If they are the same we won't refund
                            otherwise we will refund his payment.</p>
                    </li>
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
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "hidden";
            }
        }
    </script>
    <script>
    // if (true) {

    //     // Your application has indicated there's an error
    //     window.setTimeout(function() {

    //         // Move to a new location or you can do something else
    //         window.location.href = "index.html";
    //         window.location.href = "index.html";

    //     }, 12000);

    // }
    </script>

<script>
    var countries = [];
    
countries['america'] = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'District Of Columbia','Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana','Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana','Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio',  'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island','South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];
countries['canada'] =[
            "British Columbia", 
            "Ontario", 
            "Newfoundland and Labrador", 
            "Nova Scotia", 
            "Prince Edward Island", 
            "New Brunswick", 
            "Quebec", 
            "Manitoba", 
            "Saskatchewan", 
            "Alberta", 
            "Northwest Territories", 
            "Nunavut",
            "Yukon Territory"
        ];

document.querySelector("select[name='country']").addEventListener("change", function(){
var element = countries[this.value.toString().toLowerCase()];
if (element)
{
//clone:
var select = document.querySelector("select[name='city']").cloneNode();
var node = document.createElement("option");
node.value = 0;
node.setAttribute("disabled", true);
node.setAttribute("selected", true);
node.textContent = "Select a city";
select.appendChild(node);
countries[this.value.toString().toLowerCase()].forEach(function(element){
var node = document.createElement("option");
node.value = element;
node.textContent = element;	
select.appendChild(node);				
});

document.querySelector("select[name='city']").parentElement.replaceChild(select, document.querySelector("select[name='city']"));
}
}, false);
</script>

   @endsection