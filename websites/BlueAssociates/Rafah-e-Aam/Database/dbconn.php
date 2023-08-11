<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_ms";

// $servername = "localhost";
// $username = "id16333893_bluespirit";
// $password = "#5g=5Q\B(N]LF]uT";
// $dbname = "id16333893_rafaheaammedicalcenter";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>