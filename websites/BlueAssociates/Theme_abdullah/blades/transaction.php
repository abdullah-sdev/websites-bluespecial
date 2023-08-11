<?php
include "../admin/dbconn.php";
session_start();
if(isset($_SESSION['vin_number'])){
  $vinnumber = $_SESSION['vin_number'];

if(isset($_SESSION['name']) & isset($_SESSION['email']) & isset($_SESSION['phone']) & isset($_SESSION['country']) & isset($_SESSION['package']) ){

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $phone = $_SESSION['phone'];
  $country = $_SESSION['country'];
  $package = $_SESSION['package'];
  // $package =  $_GET['package'];
  $statusreport = 0;

  if($package == 'basic'){
    $r_package = '1';
  }else if($package == 'silver'){
    $r_package = '2';
  }else if($package == 'gold'){
    $r_package = '3';
  
  }else if($package == 'platinum'){
    $r_package = '4';
  
  }
  
echo $r_package;
echo $package;
echo isset($_SESSION['package']);



  $sql = "INSERT INTO vinorders (fullname, email, phone, vin_number, report_status, cntry_id, pkg_id) VALUES 
  ('". $name ."', '". $email ."', '". $phone ."', '". $vinnumber ."', ". $statusreport .", '". $country ."', '". $r_package ."') ";    


  if ($conn->query($sql) === TRUE) {
      // echo "New record created successfully";

      echo '
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThankYou</title>
</head>
<body>

    <h1> Thank you For Buying</h1>
    <p>Your Reports will arrive shortly.</p>
    
</body>
<script>
    if (true) {

        // Your application has indicated theres an error
        window.setTimeout(function() {

            // Move to a new location or you can do something else
            window.location.href = "../index.php";

        }, 1000);

    }
    </script>
</html>
      ';



      // header('Location: ../index.php');





  
    } else {
      // echo "Error: " . $sql . "<br>" . $conn->error;
    }






}


}else{
  header('Location: ../index.php');
}



        

    // $vinnumber = $_POST['vin'];

    // if (isset($_POST['name']) & isset($_POST['email']) & isset($_POST['phone']) & isset($_POST['country']) & isset($_POST['package'])  ){
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $country = $_POST['country'];
    //     $package = $_POST['package'];
    //     // $vinnumber = $_POST['vin_number'];
        
    //     $sql = "INSERT INTO vinorders (fullname, email, phone, vin_number, report_status, cntry_id, pkg_id) VALUES ('". $name ."', '". $email ."', '". $phone ."', '". $vinnumber ."', ". $statusreport .", '". $country ."', '". $package ."')";    
    
    
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    //     header('Location: index.php');
    //   } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    //   }
        
    // }
    session_destroy();
    


?>