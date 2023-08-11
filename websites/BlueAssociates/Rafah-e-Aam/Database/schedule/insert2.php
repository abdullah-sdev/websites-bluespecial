<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rafaheaammedicalcenter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$dname = $_POST['dname'];
$dday = $_POST['dday'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "INSERT INTO `doctor_detail`( `DOCTOR_NAME`, `EDUCATION`, `DEPART_ID_FK`) VALUES 
// ('".$dname."' , '".$dedu."',
                                                                                
// (SELECT DEPT_ID FROM doc_depart WHERE DEPT_ID = ".$ddept.")) ";


$sql = "INSERT INTO `doc_schedule`( `DOCTOR_ID_FK`, `DAY_ID_FK`, `TIME_START_ID_FK`, `TIME_END_ID_FK`) VALUES 
(
    $dname,
    $dday,
    $start_time,
    $end_time
);";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  





$conn->close();
 header('Location: insert.php');
?>
