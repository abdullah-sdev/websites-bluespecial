<!DOCTYPE html>
<html lang="en">

 
<head>
	<meta charset="UTF-8">
	<title>Time Table || Hospitals || Responsive HTML 5 Template</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon-ramc.ico" type="image/x-icon">
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16"> -->

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
</head>
<body>
<div class="boxed_wrapper">

<!--Start Preloader -->
<?php
// include 'libs/preloader.php'
?>
<!--End Preloader --> 

<!--Start header area-->
<?php
$current = "fidoctor";
include 'libs/header.php'
?>
<!--Start mainmenu area-->

<!--End mainmenu area-->

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1>Time Table</h1>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="breadcrumb-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left pull-left">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active">Time Table</li>
                        </ul>
                    </div>
                    <div class="right pull-right">
                        <a href="#">
                            <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span> 
                        </a>   
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<?php
include "libs/dbconn.php";
?>

<!--Start time table area-->
<div class="time-table-area">
    <div class="container">
        <div class="row pd-bottom">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" id="formtable">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <?php
                            
                        ?>
                        <select id="" name = "ddept" class="selectmenu">

                            <?php
                                                          
                                
                            
                            
                            function isselc($deptnamea) {                               
                                if( $deptnamea == $_POST['ddept'])
                                {
                                    echo 'selected';
                                }
                            }
                                
                                $sql = "SELECT * FROM DOC_DEPART order by  DEPT_ID asc";
                                
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    //echo "id: " . $row["CUST_ID"]. " - Name: " . $row["CUST_NAME"]. " " . $row["CUST_CONTACT"]. " " . $row["CUST_CATEGORY"]. " " . $row["CUST_WORKTYPE"]. " " . $row["CUST_JOBDESC"]. " " . $row["CUST_ADDRESS"]. " " . $row["CUST_INTERSTEDPROJECT"]. "<br>";
                                    // echo "<option value='".$row['DEPT_NAME']."' ". isselc($row['DEPT_NAME'])." >".$row['DEPT_NAME']."</option>";
                                    $sel = ""; 
                                    if( $row['DEPT_NAME'] == $_POST['ddept']){
                                           $sel = 'selected'; 
                                        } 
                                    echo "<option value='".$row['DEPT_NAME']."' ". $sel ." >".$row['DEPT_NAME']."</option>";

                                    }
                                }
                                
                                
                                                                    
                            ?>
                        </select>

                       
                    </div>
                    <div class="col-md-6">
                    <!--  -->
                                
                    <select  id="" name="dday" class="selectmenu">
                        <option value="ANY">ANY </option>
                        <?php
                            
                            if (!($_POST['dday']) )
                            {
                                $sql = "SELECT * FROM TABLE_DAYS order by  DAY_ID asc";
                                

                            }else
                            {
                                // $sql2 = "SELECT * FROM table_days";
                                $sql = "SELECT * FROM TABLE_DAYS order by  DAY_ID asc";
                            }
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {

                                    $sel = ""; 
                                    if( $row['DAY_NAME'] == $_POST['dday']){
                                           $sel = 'selected'; 
                                        } 
                                //echo "id: " . $row["CUST_ID"]. " - Name: " . $row["CUST_NAME"]. " " . $row["CUST_CONTACT"]. " " . $row["CUST_CATEGORY"]. " " . $row["CUST_WORKTYPE"]. " " . $row["CUST_JOBDESC"]. " " . $row["CUST_ADDRESS"]. " " . $row["CUST_INTERSTEDPROJECT"]. "<br>";
                                echo "<option value='".$row['DAY_NAME']."' ".$sel." >".$row['DAY_NAME']."</option>";
                                }
                            }
                            
                            

                        ?>
                    </select>
                       
                    </div>
                </div>    
            </div>
            <div class="md-6">
                <button type="submit" class="search-btn">  SEARCH  <i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-12 row">
                
               
               
                <?php

                            // if  (isset($_POST['ddept']) && (isset($_POST['dday']) &&  $_POST['dday'] != "ANY") )
                            // {
                                
                            //     $sqtab = "select * from display where SPEC_NAME='".$_POST['ddept']."' and DAY_NAME = '".$_POST['dday']."';";
                            // }else if(isset($_POST['ddept'])  &&  ($_POST['dday'] == "ANY")  )
                            // {
                            //     $sqtab = "select * from display where SPEC_NAME='".$_POST['ddept']."' ;";

                            // }else if(!(isset($_POST['ddept']) ) && ( !isset($_POST['dday'])))
                            // {
                            //     // $sqtab = "select * from display where  SPEC_NAME='GENERAL, ORTHOPEDIC AND TRAUMA CENTER'";
                               
                            // }


                    
                   
                    $asql = "SELECT DISTINCT SPEC_NAME FROM display1 order by SPEC_NAME asc";
                    $ares = $conn->query($asql);
                    if ($ares->num_rows > 0) {
                        
                        while($rowa = $ares->fetch_assoc()) {
                            $specd = $rowa['SPEC_NAME'];
                            // Departments
                            if($specd == $rowa['SPEC_NAME'])
                            {
                                echo "<div class='container'>";
                                echo "<br><h1>" .$specd . "</h1><br>";

                                

                                $bsql = "SELECT DISTINCT DOCTOR_NAME, EDUCATION, AVATAR, SPEC_NAME FROM display1 WHERE SPEC_NAME = '".$specd."' ";
                                $bres = $conn->query($bsql);
                                if ($bres->num_rows > 0) {
                                    
                                    while($rowb = $bres->fetch_assoc()) {
                                        $docd = $rowb['DOCTOR_NAME'];
                                        //Doctor Details
                                        if($docd == $rowb['DOCTOR_NAME'] )
                                        {
                                            echo "<div class='profile col-md-3 schd'>";
                                            echo "<img src='images/team/1.jpg' style='border-radius: 50%; height:150px'>";
                                            echo "<br>".$docd."<br>";
                                            echo $rowb['EDUCATION']."<br>";
                                            $csql = "SELECT DISTINCT ONCALL FROM display1 where DOCTOR_NAME = '".$docd."' ";
                                            $cres = $conn->query($csql);
                                            //timmings
                                            if ($cres->num_rows > 0) {
                                                
                                                while($rowc = $cres->fetch_assoc()) {
                                                   
                                                    //physical doctors
                                                    if ($rowc["ONCALL"] == 0) { 
                                                       $days ="";
                                                        // echo "Not <br>";
                                                        $dsql = "SELECT DISTINCT DAY_NAME FROM display1 where ONCALL = '".$rowc["ONCALL"]."' and DOCTOR_NAME = '".$docd."' ";
                                                        $dres = $conn->query($dsql);
                                                        //timmings
                                                        if ($dres->num_rows > 0) {
                                                            
                                                            while($rowd = $dres->fetch_assoc()) {
                                                                $days .= $rowd['DAY_NAME']. ", ";
                                                                // $tim = $rowd['start_time'];
                                                                $esql = "SELECT start_time, end_time FROM display1 where DOCTOR_NAME = '".$docd."' and ONCALL = '".$rowc["ONCALL"]."'";
                                                                $eres = $conn->query($esql);
                                                                //timmings
                                                                if ($eres->num_rows > 0) {
                                                                    
                                                                    while($rowe = $eres->fetch_assoc()) {
                                                                        $time = "<br>".$rowe['start_time']."-". $rowe['end_time'];
                                                                    }
                                                                }

                                                            }

                                                        }
                                                        
                                                        echo $days;
                                                        echo $time;
                                                    }

                                                    // Online call doctors 
                                                    if ($rowc["ONCALL"] == 1) { 
                                                        $isonc =  1; 
                                                        // echo "CAll<br>";

                                                        $daysz ="";
                                                        // echo "Not <br>";
                                                        $dsql = "SELECT DISTINCT DAY_NAME FROM display1 where ONCALL = '".$rowc["ONCALL"]."' and DOCTOR_NAME = '".$docd."' ";
                                                        $dres = $conn->query($dsql);
                                                        //timmings
                                                        if ($dres->num_rows > 0) {
                                                            
                                                            while($rowd = $dres->fetch_assoc()) {
                                                                $daysz .= $rowd['DAY_NAME']. ", ";
                                                                // $tim = $rowd['start_time'];
                                                                $fsql = "SELECT start_time, end_time FROM display1 where DOCTOR_NAME = '".$docd."' and ONCALL = '".$rowc["ONCALL"]."'";
                                                                $fres = $conn->query($fsql);
                                                                //timmings
                                                                if ($fres->num_rows > 0) {
                                                                    
                                                                    while($rowf = $fres->fetch_assoc()) {
                                                                        $timez = "<br>".$rowf['start_time']."-". $rowf['end_time'];
                                                                    }
                                                                }

                                                            }

                                                        }
                                                        echo "<br>ONCALL <br>";
                                                        echo $daysz;
                                                        echo $timez . "<br><br>";
                                                    }
                                                    
                                                    
                                                }

                                                

                                                // if ($isonc == 1)
                                                // {
                                                //     echo $isonc." <br> On Call<br>";
                                                // }

                                                // if ($isnonc == 1)
                                                // {
                                                //     echo "<br> not call ". $isnonc. "<br>";
                                                // }

                                                
                                            }
                                            echo "</div>";
                                        }

                                        // echo $rowb['DOCTOR_NAME'] . "<br>";
                                    }
                                }

                                echo "</div>";

                            }

                        }
                    }




                    // $nsql = "SELECT DISTINCT DOCTOR_NAME, SPEC_NAME, EDUCATION from display1 order by DOCTOR_NAME asc";

                    // $nsql2 = "SELECT * from display1  ";
                    // $result = $conn->query($nsql);
                    

                    // if ($result->num_rows > 0) {
                    // // output data of each row 
                    //     while($row = $result->fetch_assoc()) {

                    //         $datadayres = " ";
                    //         echo "
                    //         <div class='profile col-md-3 schd'>

                    //         <div class='avatar'>
                    //             <img src='images/team/1.jpg'/>
                    //         </div>

                    //         <div class='prdet'>
                    //             <p> <span> Name: </span> ". $row["DOCTOR_NAME"] ." </p>
                    //         </div>

                    //         <div class='prdet'>
                    //             <p> <span> Speciality: </span> ". $row["SPEC_NAME"] ." </p>
                    //         </div>

                    //         <div class='prdet'>
                    //             <p> <span> Education: </span> ". $row["EDUCATION"] ." </p>
                    //         </div>
                            
                    //         ";
                            
                            
                            
                    //         $result2 = $conn->query($nsql2);
                    //         if ($result2->num_rows > 0) {
                    //             // $result3 = $conn->query($nsql2);

                    //             while($row2 = $result2->fetch_assoc()) {
                                   
                    //                 $dataoncall = $row2["ONCALL"];

                    //                 if( $row2["DOCTOR_NAME"] == $row["DOCTOR_NAME"])
                    //                 {

                    //                         if($dataoncall == 0)
                    //                         {
                    //                             $dataoncall2 = "";
                    //                             $result3 = $conn->query($nsql2);
                    //                             while($row3 = $result3->fetch_assoc()) {
                    //                                 $st_t = $row3["start_time"] ;
                    //                                 $ed_t = $row3["end_time"];
                    //                                 $d_t = $row3["DAY_NAME"];
                                                    
                    //                                 if( $st_t == $row2["start_time"] && $ed_t == $row2["end_time"] && $d_t == $row2["DAY_NAME"] )
                    //                                 {
                    //                                     $datadayres .=  strval($row3["DAY_NAME"]) . " ";
                                                        
                    //                                     // echo  $row3["DAY_NAME"]. ", ";
                    //                                 }
                    //                             }
                                                
                                                
                    //                             $datatimeres = "<br> Timing: ".$row2["start_time"]. " - ". $row2["end_time"] . "</br>";
                    //                         }else if ($dataoncall == 1){
                    //                             $dataoncall2 = "On Call";
                    //                             $result3 = $conn->query($nsql2);
                    //                             while($row3 = $result3->fetch_assoc()) {
                    //                                 $st_t = $row3["start_time"] ;
                    //                                 $ed_t = $row3["end_time"];
                    //                                 $d_t = $row3["DAY_NAME"];
                                                    
                    //                                 if( $st_t == $row2["start_time"] && $ed_t == $row2["end_time"] && $d_t == $row2["DAY_NAME"] )
                    //                                 {
                    //                                     $datadayres .=  strval($row3["DAY_NAME"]) . " ";
                                                        
                    //                                     // echo  $row3["DAY_NAME"]. ", ";
                    //                                 }
                    //                             }
                                                
                                                
                    //                             $datatimeres = "<br> Timing: ".$row2["start_time"]. " - ". $row2["end_time"] . "</br>";

                    //                         }
                                            
                                            
                    //                 }
                                
                    //                 // echo "@";
                                    
                    //             }

                                
                    //         }
                    //         // echo $dataoncall;
                    //         // if(isset($dataoncall) == 1){echo "On Call"; }
                    //         // if ($dataoncall == 1){echo "On Call"; }
                    //         echo  "<div class='prdet'>
                    //         <p> <span> ". $dataoncall2 ." Work Days : </span> ";
                    //         echo $datadayres;
                    //         // if(isset($datatimeres) == 1){echo $datatimeres; }
                    //         echo $datatimeres;
                    //         echo "

                    //         </p></div>
                    //         </div>";
                    //     }

                            

                            
                        
                    // }else{
                    //     echo "No Data To Display";
                    // }

                    
                    
                    
                ?>
                
                <!-- <div class="col-md-3" style="height: 35vh; background-color: #5f4;">
                

                </div>
                <div class="col-md-3" style="height: 35vh; background-color: #5f8;">

                </div>
                <div class="col-md-3" style="height: 35vh; background-color: #abf;">

                </div>
                <div class="col-md-3" style="height: 35vh; background-color: #acf;">

                </div> -->
            </div>
        </div>
    </div>
</div>
<!--End time table area-->
 <?php
$conn->close();
 ?>


<!--Start footer area-->  
<?php
include 'libs/footer.php'
?>

</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-triangle-inside-circle"></span></div>

<!-- main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Wow Script -->
<script src="js/wow.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/validation.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<!-- fancy box -->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="js/isotope.js"></script>
<script src="js/jquery.prettyPhoto.js"></script> 
<script src="js/jquery.bootstrap-touchspin.js"></script>
<!-- jQuery timepicker js -->
<script src="assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>                               
<!-- Bootstrap bootstrap touchspin js -->
<!-- jQuery ui js -->
<script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- Html 5 light box script-->
<script src="assets/html5lightbox/html5lightbox.js"></script>


<!-- revolution slider js -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="js/custom.js"></script>





</body>


</html>