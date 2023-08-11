<?php

?>

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
        // include '../libs/header.php';
    ?>
    <h1>Rafah-e-Aam Medical Center</h1>


    <?php
    include "../dbconn.php";
    $sqtab = "SELECT SPEC_NAME FROM doc_speciality";
    $result = $conn->query($sqtab);
    $numx  = 1;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo $numx ." ". $row["SPEC_NAME"] . " Edit "." Delete "."<br>";
          $numx = $numx + 1;
        }
    }else{
          echo "No Data To Display";
    }
    ?>

    <h2>Speciality In Hospitals</h2>
    
    <form action="process.php" method="post">
        <input type="text" name="specs" placeholder="Speciality">
        <button type="submit">Add</button>


    </form>
<hr>
    <a href="../index.php">Backk</a>
</body>
</html>