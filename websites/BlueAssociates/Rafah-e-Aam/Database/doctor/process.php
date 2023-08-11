<?php
include '../dbconn.php';
    if (isset($_POST['dname']) and isset($_POST['dspecs']) and isset($_POST['deducation']) and isset($_POST['gender']))
    {
        $dname = $_POST['dname'];
        $dspecs = $_POST['dspecs'];
        $deducation= $_POST['deducation'];
        $avatar_pp = $_POST['avatar_pp'];
        $gender = $_POST['gender'];
        $sql = 'INSERT INTO `doctor_detail`(`DOCTOR_NAME`, `EDUCATION`, `AVATAR`, `GENDER`, `SPECIALITY_ID_FK` ) values ("'.$dname.'", "'.$deducation.'",  "'.$avatar_pp.'", "'.$gender.'", (SELECT SPEC_ID FROM doc_speciality where SPEC_NAME = "'. $dspecs .'")); ';
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