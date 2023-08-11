<?php
include "dbconn.php";

if($_GET['operation']==1){

  $pkgs = "UPDATE vinorders SET report_status = 1 WHERE vid = '".$_GET['id']."';";
  if ($conn->query($pkgs) === TRUE) {
    echo "Record updated successfully";
    header('Location: active-orders.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }
}else if($_GET['operation']==2){

  $pkgs = "UPDATE vinorders SET report_status = 2 WHERE vid = '".$_GET['id']."';";
  if ($conn->query($pkgs) === TRUE) {
    echo "Record updated successfully";
    header('Location: active-orders.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }
}



?>

<?php

// session_destroy();
$conn->close();
?>