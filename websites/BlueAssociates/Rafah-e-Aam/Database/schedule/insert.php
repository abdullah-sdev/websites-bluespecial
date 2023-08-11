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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>
<form action="insert2.php" method="POST">
    <select  id="" name="dname">
    <?php
        $sql = "SELECT * FROM doctor_detail";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["CUST_ID"]. " - Name: " . $row["CUST_NAME"]. " " . $row["CUST_CONTACT"]. " " . $row["CUST_CATEGORY"]. " " . $row["CUST_WORKTYPE"]. " " . $row["CUST_JOBDESC"]. " " . $row["CUST_ADDRESS"]. " " . $row["CUST_INTERSTEDPROJECT"]. "<br>";
              echo "<option value='".$row['DOCTOR_ID']."' >".$row['DOCTOR_NAME']."</option>";
            }
          }
          

    ?>
    </select>

    <select  id="" name="dday">
    <?php
        $sql = "SELECT * FROM table_days";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["CUST_ID"]. " - Name: " . $row["CUST_NAME"]. " " . $row["CUST_CONTACT"]. " " . $row["CUST_CATEGORY"]. " " . $row["CUST_WORKTYPE"]. " " . $row["CUST_JOBDESC"]. " " . $row["CUST_ADDRESS"]. " " . $row["CUST_INTERSTEDPROJECT"]. "<br>";
              echo "<option value='".$row['DAY_ID']."' >".$row['DAY_NAME']."</option>";
            }
          }
          


    ?>
    </select>

    <select  id="" name="start_time">
    <?php
        $sql = "SELECT * FROM SCH_TIME";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["CUST_ID"]. " - Name: " . $row["CUST_NAME"]. " " . $row["CUST_CONTACT"]. " " . $row["CUST_CATEGORY"]. " " . $row["CUST_WORKTYPE"]. " " . $row["CUST_JOBDESC"]. " " . $row["CUST_ADDRESS"]. " " . $row["CUST_INTERSTEDPROJECT"]. "<br>";
              echo "<option value='".$row['TIMEID']."' >".$row['timename']."</option>";
            }
          }
          


    ?>
    </select>

    <select id="" name="end_time">
    <?php
        $sql = "SELECT * FROM SCH_TIME";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["CUST_ID"]. " - Name: " . $row["CUST_NAME"]. " " . $row["CUST_CONTACT"]. " " . $row["CUST_CATEGORY"]. " " . $row["CUST_WORKTYPE"]. " " . $row["CUST_JOBDESC"]. " " . $row["CUST_ADDRESS"]. " " . $row["CUST_INTERSTEDPROJECT"]. "<br>";
              echo "<option value='".$row['TIMEID']."' >".$row['timename']."</option>";
            }
          }
          

$conn->close();
    ?>
    </select>

    <button type="submit">Submit</button>
</form>
    
</body>
</html>