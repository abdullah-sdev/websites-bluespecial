<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .formx
        {
            
            width: 50%;
            
        }
        .days {
            display: flex;
            /* margin-right: 10px; */
            /* padding: 0px */
        }
        .days div
        {
            margin-right: 10px;
            /* padding: 0px */
        }
    </style>
</head>
<body>
<?php
include '../dbconn.php';

  ?>

    <h1>Doctors Timing</h1>
    <div>
        <?php
            $sql_docs = "SELECT * From doc_schedule";
            $res_docs = $conn->query($sql_docs);
            $numx = 1;
            if ($res_docs->num_rows > 0) {
              // output data of each row
              while($row = $res_docs->fetch_assoc()) {
                echo $numx .". " . $row["DAY_ID_FK"] ."<br>";
                // echo "<option value= '". $row["SPEC_NAME"] ."' > ". $row["SPEC_NAME"] ." </option>";
                $numx = $numx +1;
              }
            }
        ?>
    </div>
    <hr>
    <h2>
        Doctor Timing
    </h2>
<div class="formx">
  

    <form action="process.php" method="post" enctype="multipart/form-data">
        
        <div class="mb3">
        <select class="form-select" aria-label="Default select example" name="dname">
          
  <option selected>Select Doctor</option>
  <?php
            $sql_spec = "SELECT * FROM doctor_detail";
            $res_spec = $conn->query($sql_spec);
            if ($res_spec->num_rows > 0) {
              // output data of each row
              while($row = $res_spec->fetch_assoc()) {
                // echo $row["SPEC_NAME"];
                echo "<option value= '". $row["DOCTOR_ID"] ."' > ". $row["DOCTOR_NAME"] ." </option>";
                
              }
            }
          ?>
  <!-- <option  ></option> -->
  <!-- <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option> -->
</select>
        </div>
        <br>
        
        <div class="form-check">
        <label class="form-check-label" for="flexCheckDefault">
    On Call
  </label>
  <input class="form-check-input" type="checkbox" name="oncall" id="flexCheckDefault">
  
</div>

<div class="days">
    

<div class="form-check">
        <label class="form-check-label" for="flexCheckDefault">
    Monday
  </label>
  <input class="form-check-input" type="checkbox"   name="is_mond" id="flexCheckDefault">
  
</div>
<div class="form-check">
        <label class="form-check-label" for="flexCheckDefault">
    Tuesday
  </label>
  <input class="form-check-input" type="checkbox"   name="is_tues" id="flexCheckDefault">
  
</div>
<div class="form-check">
        <label class="form-check-label" for="flexCheckDefault">
    Wednesday
  </label>
  <input class="form-check-input" type="checkbox"   name="is_wens" id="flexCheckDefault">
  
</div>
<div class="form-check">
        <label class="form-check-label" for="flexCheckDefault">
    Thursday
  </label>
  <input class="form-check-input" type="checkbox"   name="is_thur" id="flexCheckDefault">
  
</div>
<div class="form-check">
        <label class="form-check-label" for="flexCheckDefault">
    Friday
  </label>
  <input class="form-check-input" type="checkbox"   name="is_frid" id="flexCheckDefault">
  
</div>
<div class="form-check">
        <label class="form-check-label" for="flexCheckDefault">
    Saturday
  </label>
  <input class="form-check-input" type="checkbox"   name="is_satr" id="flexCheckDefault">
  
</div>
<div class="form-check">
        <label class="form-check-label" for="sunday">
    Sunday
  </label>
  <input class="form-check-input" type="checkbox"   name="is_sund" id="sunday">
  
</div>
</div>


<div class="mb3">
        <select class="form-select" aria-label="Default select example" name="st_time">
          
  <option selected>Select Start Time</option>
  <?php
            $sql_spec = "SELECT * FROM sch_time";
            $res_spec = $conn->query($sql_spec);
            if ($res_spec->num_rows > 0) {
              // output data of each row
              while($row = $res_spec->fetch_assoc()) {
                // echo $row["SPEC_NAME"];
                echo "<option value= '". $row["TIMEID"] ."' > ". $row["TIMENAME"] ." </option>";
                
              }
            }
          ?>
  <!-- <option  ></option> -->
  <!-- <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option> -->
        </select>
</div>
<div class="mb3">
        <select class="form-select" aria-label="Default select example" name="ed_time">
          
  <option selected>Select End Time</option>
  <?php
            $sql_spec = "SELECT * FROM sch_time";
            $res_spec = $conn->query($sql_spec);
            if ($res_spec->num_rows > 0) {
              // output data of each row
              while($row = $res_spec->fetch_assoc()) {
                // echo $row["SPEC_NAME"];
                echo "<option value= '". $row["TIMEID"] ."' > ". $row["TIMENAME"] ." </option>";
                
              }
            }
            $conn->close();
          ?>

        </select>
</div>


<button type="submit" name="submit">Submit</button>
    </form>
</div>
   

<a href="../index.php">BAckk</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>