<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "rafaheaammedicalcenter";
// $dbname = "hospital_ms";


$servername = "localhost";
$username = "id16333893_bluespirit";
$password = "p9%N\CsRNJwjsJs1";
$dbname = "id16333893_rafaheaammedicalcenter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>