<?php
include '../dbconn.php';

    if (isset($_POST['submit']))
    {
      
        // $days = false;
        if (isset($_POST['is_mond']) || isset($_POST['is_tues']) || isset($_POST['is_wens']) || isset($_POST['is_thur']) || isset($_POST['is_frid']) || isset($_POST['is_satr']) || isset($_POST['is_sund']))
        {
            $days = true;
        }
        if (isset($_POST['dname']) & isset($_POST['dname']) & $days)
        {
            $dname = $_POST['dname'];
            $st_time = $_POST['st_time'];
            $ed_time = $_POST['ed_time'];
            // $oncall = $_POST['oncall'];
            // echo $oncall;
            if (isset($_POST['oncall'] ))
            {
                $oncall = 1;
            }else
            {
                $oncall = 0;
            }
            echo $oncall;
            if (isset($_POST['is_mond']))
            {
                $sql = 'INSERT INTO `doc_schedule`(`DOCTOR_ID_FK`, `DAY_ID_FK`, `TIME_START_ID_FK`, `TIME_END_ID_FK`, `ONCALL` ) 
                values 
                ( 
                    (SELECT DOCTOR_ID FROM doctor_detail where DOCTOR_ID = '. $dname .'),  
                    (SELECT DAY_ID  FROM table_days where DAY_ID = 1), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $st_time .'"), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $ed_time .'"), 
                    '.$oncall.'
                ); ';

                if ($conn->query($sql) === TRUE)
                {
                    echo "New record created successfully";
                }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            if (isset($_POST['is_tues']))
            {
                $sql = 'INSERT INTO `doc_schedule`(`DOCTOR_ID_FK`, `DAY_ID_FK`, `TIME_START_ID_FK`, `TIME_END_ID_FK`, `ONCALL` ) 
                values 
                ( 
                    (SELECT DOCTOR_ID FROM doctor_detail where DOCTOR_ID = "'. $dname .'"),  
                    (SELECT DAY_ID  FROM table_days where DAY_ID = 2), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $st_time .'"), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $ed_time .'"), 
                     '.$oncall.'
                ); ';

                if ($conn->query($sql) === TRUE)
                {
                    echo "New record created successfully";
                }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            if (isset($_POST['is_wens']))
            {
                $sql = 'INSERT INTO `doc_schedule`(`DOCTOR_ID_FK`, `DAY_ID_FK`, `TIME_START_ID_FK`, `TIME_END_ID_FK`, `ONCALL` ) 
                values 
                ( 
                    (SELECT DOCTOR_ID FROM doctor_detail where DOCTOR_ID = "'. $dname .'"),  
                    (SELECT DAY_ID  FROM table_days where DAY_ID = 3), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $st_time .'"), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $ed_time .'"), 
                     '.$oncall.'
                ); ';

                if ($conn->query($sql) === TRUE)
                {
                    echo "New record created successfully";
                }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            if (isset($_POST['is_thur']))
            {
                $sql = 'INSERT INTO `doc_schedule`(`DOCTOR_ID_FK`, `DAY_ID_FK`, `TIME_START_ID_FK`, `TIME_END_ID_FK`, `ONCALL` ) 
                values 
                ( 
                    (SELECT DOCTOR_ID FROM doctor_detail where DOCTOR_ID = "'. $dname .'"),  
                    (SELECT DAY_ID  FROM table_days where DAY_ID = 4), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $st_time .'"), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $ed_time .'"), 
                     '.$oncall.'
                ); ';

                if ($conn->query($sql) === TRUE)
                {
                    echo "New record created successfully";
                }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            if (isset($_POST['is_frid']))
            {
                $sql = 'INSERT INTO `doc_schedule`(`DOCTOR_ID_FK`, `DAY_ID_FK`, `TIME_START_ID_FK`, `TIME_END_ID_FK`, `ONCALL` ) 
                values 
                ( 
                    (SELECT DOCTOR_ID FROM doctor_detail where DOCTOR_ID = "'. $dname .'"),  
                    (SELECT DAY_ID  FROM table_days where DAY_ID = 5), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $st_time .'"), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $ed_time .'"), 
                     '.$oncall.'
                ); ';

                if ($conn->query($sql) === TRUE)
                {
                    echo "New record created successfully";
                }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            if (isset($_POST['is_satr']))
            {
                $sql = 'INSERT INTO `doc_schedule`(`DOCTOR_ID_FK`, `DAY_ID_FK`, `TIME_START_ID_FK`, `TIME_END_ID_FK`, `ONCALL` ) 
                values 
                ( 
                    (SELECT DOCTOR_ID FROM doctor_detail where DOCTOR_ID = "'. $dname .'"),  
                    (SELECT DAY_ID  FROM table_days where DAY_ID = 6), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $st_time .'"), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $ed_time .'"), 
                     '.$oncall.'
                ); ';

                if ($conn->query($sql) === TRUE)
                {
                    echo "New record created successfully";
                }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            if (isset($_POST['is_sund']))
            {
                $sql = 'INSERT INTO `doc_schedule`(`DOCTOR_ID_FK`, `DAY_ID_FK`, `TIME_START_ID_FK`, `TIME_END_ID_FK`, `ONCALL` ) 
                values 
                ( 
                    (SELECT DOCTOR_ID FROM doctor_detail where DOCTOR_ID = "'. $dname .'"),  
                    (SELECT DAY_ID  FROM table_days where DAY_ID = 7), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $st_time .'"), 
                    (SELECT TIMEID  FROM sch_time where TIMEID = "'. $ed_time .'"), 
                     '.$oncall.'
                ); ';

                if ($conn->query($sql) === TRUE)
                {
                    echo "New record created successfully";
                }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }


        
    }else
    {
        echo "error";
    }
$conn->close();
header('Location: index.php');
?>