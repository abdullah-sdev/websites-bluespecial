<?php





$enviroment = 0;
$paypal = 1;

if($enviroment){
  // echo 'inProduction';
  $dbservername = "localhost";
  $dbusername = "u938789027_adrecordadmin";
  $dbpassword = "Zm+Iw2>xV";
  $dbname = "u938789027_adrecords";
  
  // Create connection
  $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
  //   header('Location: index.php');
  }
  // echo "Connected successfully";



}else{
  // echo 'indevolopment';

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "autovintables";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  //   header('Location: index.php');
  }
  // echo "Connected successfully";


 

}


if($paypal){
  //Paypal Client
  $clientID = 'ARfcWX5QjaNM42W5QWzYF-HikO-snJUekOI-NKA-5g1PKxSbJiWDZo3o1wNLJ171niNBe21IzLk0VzDr&enable-funding=venmo&currency=USD';
    }else{
   //Paypal Client
    //sandbox
    $clientID = 'Aey8_hvDOuF1Kcu2xgIUeL9Gua2hFTDqP8XSUdEU3_freSNfSgJJmmUPfTSZy6tC-2kextezYNCRUNjW';
    }


?>