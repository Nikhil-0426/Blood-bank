
<?php

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'blood_donar');

if (isset($_POST['reg_donar'])) {
    // receive all input values from the form
    $Fname = mysqli_real_escape_string($db, $_POST['Fname']);
    $Lname = mysqli_real_escape_string($db, $_POST['Lname']);
    $Street_Address = mysqli_real_escape_string($db, $_POST['Street_Address']);
    $City = mysqli_real_escape_string($db, $_POST['City']);
    $State = mysqli_real_escape_string($db, $_POST['State']);
    $Pincode = mysqli_real_escape_string($db, $_POST['Pincode']);
    $Blood_Grp = mysqli_real_escape_string($db, $_POST['Blood_Grp']);
    $Phone_No = mysqli_real_escape_string($db, $_POST['Phone_No']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($Fname)) { array_push($errors, "Fname is required"); }
    if (empty($Email)) { array_push($errors, "Email is required"); }
    if (empty($Street_Address)) { array_push($errors, "Address is required"); }
    if (empty($City)) { array_push($errors, "City is required"); }
    if (empty($State)) { array_push($errors, "State is required"); }
    if (empty($Pincode)) { array_push($errors, "Pinecode is required"); }
    if (empty($Blood_Grp)) { array_push($errors, "Blood Group is required"); }
    if (empty($Phone_No)) { array_push($errors, "Phone Number is required"); }
    
    
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM donar_registration WHERE Fname='$Fname' OR Email='$Email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $donar_registration = mysqli_fetch_assoc($result);
    
    if ($donar_registration) { // if user exists
      if ($donar_registration['Fname'] === $Fname) {
        array_push($errors, "Username already exists");
      }
  
      if ($donar_registration['Email'] === $Email) {
        array_push($errors, "email already exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
  
        $query = "INSERT INTO `donar_registration` (`D_id`, `Fname`, `Lname`, `Street_Address`, `City`, `State`, `Pincode`, `Blood_Grp`, `Phone_No`, `Email`) 
        VALUES ('', '$Fname', '$Lname', '$Street_Address', '$City', '$State', '$Pincode', '$Blood_Grp', '$Phone_No', '$Email');";
        mysqli_query($db, $query);

        header('location: ../index.php');
    }
}

?>