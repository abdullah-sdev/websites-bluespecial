<?php
session_start();
if(isset($_SESSION['loginperson'])){
    $user = $_SESSION['loginperson'];
}else{
    header('Location: login.php');
}
?>
<?php


include "dbconn.php";
$pkgs = "DELETE FROM vinorders WHERE vid = '".$_GET['id']."';";
if ($conn->query($pkgs) === TRUE) {
    echo "Record updated successfully";
    header('Location: index.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }

?>

<?php

// session_destroy();
$conn->close();
?>