<?php
  $db = mysqli_connect('localhost', 'root', '', 'blood_donar');
  if ($db){
    echo "Database Connected";
  }
  else{
    echo "Not Connected";
  }

//  $filename = "";

  $errors = array();

  if(isset($_POST['urgent_require'])){
    // $Email = mysqli_real_escape_string($db, $_POST['email']);
    $P_Name = mysqli_real_escape_string($db, $_POST['p_name']);
    $P_Age = mysqli_real_escape_string($db, $_POST['p_age']);
    $Gender = mysqli_real_escape_string($db, $_POST['gender']);
    $Reason = mysqli_real_escape_string($db, $_POST['reason']);
    $H_Name = mysqli_real_escape_string($db, $_POST['h_name']);
    $D_Name = mysqli_real_escape_string($db, $_POST['d_name']);
    $C_Number = mysqli_real_escape_string($db, $_POST['c_number']);
    $C_person = mysqli_real_escape_string($db, $_POST['c_person']);
    $Blood_Grp = mysqli_real_escape_string($db, $_POST['blood_grp']);
    $City = mysqli_real_escape_string($db, $_POST['city']);
    $Required_Before = mysqli_real_escape_string($db, $_POST['required_before']);

    $token = bin2hex(random_bytes(15));

    if (empty($Email)) {
      array_push($errors, "Email is required");
    }
    if (empty($P_Name)) {
      array_push($errors, "Patient name is required");
    }
    if (empty($P_Age)) {
        array_push($errors, "Patient age is required");
    }
    if (empty($H_Name)){
        array_push($errors, "Hospital name is required");
    }
    if (empty($D_Name)){
      array_push($errors, "Doctor name is required");
    }
    if (empty($Blood_Grp)){
      array_push($errors, "Blood group is required");
    }
    if (empty($Required_Before)){
      array_push($errors, "Required before date is required");
    }


    $query = "INSERT INTO `required_blood`(`r_id`, `hospital_name`, `d_name`, `blood_grp`, `required_date`, `p_name`, `p_gender`, `reason`, `contact_person`, `contact_mobile`, `city`, `age`, `token`) 
              VALUES ('', '$H_Name', '$D_Name', '$Blood_Grp', '$Required_Before', '$P_Name', '$Gender', '$Reason', '$C_person', '$C_Number', '$City', '$P_Age', '$token')";
      
    $iquery = mysqli_query($db, $query);
    if ($iquery){
      echo "Data Added";
    }
    else{
      echo "Data not added";
    }
  }

?>