@extends('frontend.layout.main3')
@section('main-container')


    <main>
        <div class="section container">
            <p class="heading-1">Get Full Report <span>Select package</span> & Get your Vehicle History Report
                instantly!.</p>
            {{-- <p class="heading-1"> </p> --}}

        </div>
        <div class="getreport">


           

            <div class="containerd">
                <form action="" id="Form1">
                    <h3>CREATE ACCOUNT</h3>
                    <input type="text" name="" id="" placeholder="Email" required>
                    <input type="password" name="" id="" placeholder="Password" required>
                    <input type="password" name="" id="" placeholder="Confirm Password" required>
                    <div class="btn-box">
                        <button type="button" id="Next1">Next</button>
                    </div>
                </form>
        
                <form action=""  id="Form2">
                    <h3>SOCIAL LINKS</h3>
                    <input type="text" name="" id="" placeholder="Medium">
                    <input type="text" name="" id="" placeholder="Github">
                    <input type="text" name="" id="" placeholder="Linkedin">
        
        
                    
                    <div class="btn-box">
                        <button type="button" id="Back1">Back</button>
                        <button type="button" id="Next2">Next</button>
                    </div>
                </form>
        
                <form action=""  id="Form3">
                    <h3>PERSONAL INFO</h3>
                    <input type="text" name="" id="" placeholder="First Name" required>
                    <input type="text" name="" id="" placeholder="Last Name" required>
                    <input type="text" name="" id="" placeholder="Phone" required>
                   
                    <div class="btn-box">
                        <button type="button" id="Back2">Back</button>
                        <button type="submit">Submit</button>
                    </div>
                </form>
        
                <div class="step-row">
                    <div id="progress"></div>
                    <div class="step-col"><small>Step1</small></div>
                    <div class="step-col"><small>Step2</small></div>
                    <div class="step-col"><small>Step3</small></div>
                </div>
            </div>

        </div>

    </main>



    <script>
        var Form1 = document.getElementById("Form1");
        var Form2 = document.getElementById("Form2");
        var Form3 = document.getElementById("Form3");

        var Next1 = document.getElementById("Next1");
        var Next2 = document.getElementById("Next2");
        var Back1 = document.getElementById("Back1");
        var Back2 = document.getElementById("Back2");

        var progress = document.getElementById("progress");

        Next1.onclick = function(){
            Form1.style.left = "-450px";
            Form2.style.left = "40px";
            progress.style.width ="240px";
        }
        Back1.onclick = function(){
            Form1.style.left = "40px";
            Form2.style.left = "450px";
            progress.style.width ="120px";
        }
        Next2.onclick = function(){
            Form2.style.left = "-450px";
            Form3.style.left = "40px";
            progress.style.width ="360px";
        }
        Back2.onclick = function(){
            Form2.style.left = "40px";
            Form3.style.left = "450px";
            progress.style.width ="240px";
        }
    </script>

@endsection