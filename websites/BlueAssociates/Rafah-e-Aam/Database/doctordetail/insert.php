

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rafaheaammedicalcenter";

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
// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully"; 
//   } catch(PDOException $e) {    
//   echo "Connection failed: " . $e->getMessage();
//   }


?>


<form action="insert2.php" method="post">
    <input type="text" placeholder="Doctor Name" name="dname">
    <input type="text" placeholder="Education" name="dedu">
    <select id="" name = "ddept">

    <?php
        $sql = "select * from doc_depart";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["CUST_ID"]. " - Name: " . $row["CUST_NAME"]. " " . $row["CUST_CONTACT"]. " " . $row["CUST_CATEGORY"]. " " . $row["CUST_WORKTYPE"]. " " . $row["CUST_JOBDESC"]. " " . $row["CUST_ADDRESS"]. " " . $row["CUST_INTERSTEDPROJECT"]. "<br>";
              echo "<option value='".$row['DEPT_ID']."' >".$row['DEPT_NAME']."</option>";
            }
          }
          

        $conn->close();
    ?>
    </select>

    <button type="submit">Submit</button>

</form>

</body>
</html>