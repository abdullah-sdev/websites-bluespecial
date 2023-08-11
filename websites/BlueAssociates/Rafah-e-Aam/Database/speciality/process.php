<?php
include '../dbconn.php';
    if (isset($_POST['specs']))
    {
        $specs = $_POST['specs'];
        $sql = 'INSERT INTO `DOC_SPECIALITY`(`SPEC_NAME`) values ("'.$specs.'");';
        if ($conn->query($sql) === TRUE)
        {
            echo "New record created successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

$conn->close();

 header('Location: index.php');
?>