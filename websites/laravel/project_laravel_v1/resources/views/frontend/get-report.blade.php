@extends('frontend.layout.main')
@section('main-container')
    
    

    <main>
        <div class="section container">
            <p class="heading-1">Get Full Report <span>Select package</span> & Get your Vehicle History Report
                instantly!.</p>
            <p class="heading-1"> </p>

        </div>
        <div class="getreport">

            


            <form action="{{url('/proceedtopaypal')}}" class="vin-report-form" method="POST" onsubmit="displayModal(event)">

                @csrf
                <div class="error">
                    {{-- <pre>
                        @php
                            print_r($errors->all());
                        @endphp
                    </pre> --}}
                </div>
                <label for="name">Full Name</label>
                <input type="dadadsa" name="name" id="" value="{{old('name')}}">
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>

                <label for="email">Email</label>
                <input type="email" name="email" id="" value="{{old('email')}}" >
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>

                <label for="phone">Phone Number</label>
                <input type="number" name="phone" id="" value="{{old('phone')}}">
                <span class="text-danger">
                    @error('phone')
                    {{$message}}
                    @enderror
                </span>

                
                <label for="vin_number">Vin</label>
                {{-- <input type="text" name="vin" id=""> --}}
                {{-- <input type="text" name="vin" id="" value="{{ old('vin')?:$request['vin']?:""}}"> --}}
                {{-- <input type="text" name="vin" id="" value="" > --}}
                
                     @if(isset($request['vin']))

                      <input type="text" name="vin" id="" value="{{$request['vin']}}"> 

                    @elseif (!isset($request['vin']))
                    <input type="text" name="vin" id="" value="{{old('vin')}}">
                    
                    @else
                     <input type="text" name="vin" id="" value="" >
                    @endif
                
                
                <span class="text-danger">
                    @error('vin')
                    {{$message}}
                    @enderror
                </span>


                
                
                    
                    
            
               
                {{-- <label for="name">Full Name</label>
                <input type="dadadsa" name="name" id="" pattern="[A-Za-z\s]+" required>
                <div class="error">

                </div>

                <label for="email">Email</label>
                <input type="email" name="email" id="" required pattern="[A_Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="" required pattern="[0-9._%+-]{8,}">

                <label for="vin_number">Vin</label>
                <input type="text" name="vin_number" pattern="[a-zA-Z0-9].{16,16}" required id="" disabled value=""> --}}

                <label for="country">Select Country</label>
                <select name='country'>
                    <option value='0' selected disabled>Select one country</option>
                    <option value='america'>America</option>
                    <option value='canada'>Canada</option>
               </select>
               <span class="text-danger">
                @error('country')
                {{$message}}
                @enderror
                </span>
               
                

                <label for="country">Select State</label>
                <select name='city'>
                </select>
                <span class="text-danger">
                    @error('city')
                    {{$message}}
                    @enderror
                </span>
                {{-- <select  id="">
                    @foreach ($american_states as $states)
                       <option value="">{{$states}}</option>
                    @endforeach
                        
                    @foreach ($canadian_states as $states)
                       <option value="">{{$states}}</option>
                    @endforeach

                </select> --}}

                
                
                
                {{-- 
                    
                    <label for="package">Select package</label>
                    <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div style="margin-bottom: 1.25rem;">
                            <p></p>
                            <select id="item-options" style="width:100%" name="package">
                                <option value="basic" price="29">basic - 29 USD</option>
                                <option value="silver" price="49">silver - 49 USD</option>
                                <option value="gold" price="79">gold - 79 USD</option>
                                <option value="platinum" price="119">platinum - 119 USD</option>
                            </select>
                            <select style="visibility: hidden" id="quantitySelect"></select>
                        </div>
                        <div id="paypal-button-container"></div>
                    </div>
                </div> --}}
                {{-- <span class="text-danger">
                    @error('package')
                    {{$message}}
                    @enderror
                </span> --}}



                <button type="submit">Proceed</button>

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