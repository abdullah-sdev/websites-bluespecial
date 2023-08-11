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
$dedu = $_POST['dedu'];
$ddept = $_POST['ddept'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `doctor_detail`( `DOCTOR_NAME`, `EDUCATION`, `DEPART_ID_FK`) VALUES 
('".$dname."' , '".$dedu."',
                                                                                
(SELECT DEPT_ID FROM doc_depart WHERE DEPT_ID = ".$ddept.")) ";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  





$conn->close();
 header('Location: insert.php');
?>
