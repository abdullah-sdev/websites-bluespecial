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
    </style>
</head>
<body>
<?php
include '../dbconn.php';

  ?>

    <h1>Doctors in Our Hospitals</h1>
    <div>
        <?php
            $sql_docs = "SELECT DOCTOR_NAME From doctor_detail";
            $res_docs = $conn->query($sql_docs);
            $numx = 1;
            if ($res_docs->num_rows > 0) {
              // output data of each row
              while($row = $res_docs->fetch_assoc()) {
                echo $numx ." ".$row["DOCTOR_NAME"] . " || Add Avatar "."<br>";
                // echo "<option value= '". $row["SPEC_NAME"] ."' > ". $row["SPEC_NAME"] ." </option>";
                $numx = $numx +1;
              }
            }
        ?>
    </div>
    <hr>
    <h2>
        Add New Doctor
    </h2>
<div class="formx">
  

    <form action="process.php" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Doctor Name" name="dname">
            <label for="floatingInput">Doctor Name</label>
        </div>
        <div class="mb3">
        <select class="form-select" aria-label="Default select example" name="dspecs">
          
  <option selected>Speciality</option>
  <?php
            $sql_spec = "SELECT SPEC_NAME FROM doc_speciality";
            $res_spec = $conn->query($sql_spec);
            if ($res_spec->num_rows > 0) {
              // output data of each row
              while($row = $res_spec->fetch_assoc()) {
                // echo $row["SPEC_NAME"];
                echo "<option value= '". $row["SPEC_NAME"] ."' > ". $row["SPEC_NAME"] ." </option>";
                
              }
            }
          ?>
  <!-- <option value=""></option> -->
  <!-- <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option> -->
</select>
        </div>
        <br>
        
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Education</label>
  <textarea class="form-control" id="exampleFormControlTextarea1 " rows="3" name="deducation"></textarea>
</div>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupFile01">Avatar</label>
  <input type="file" class="form-control" id="inputGroupFile01" name="avatar_pp">
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
   Female
  </label>
</div>

<button type="submit" >Submit</button>
    </form>
</div>
   

<a href="../index.php">BAckk</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>