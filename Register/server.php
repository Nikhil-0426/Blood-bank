<?php

$errors = array();

$database = mysqli_connect('localhost', 'root', '', 'blood_donar');

if(isset($_POST['signup_user'])){
    $Fname = mysqli_real_escape_string($database, $_POST['Fname']);
    $Lname = mysqli_real_escape_string($database, $_POST['Lname']);
    $Email = mysqli_real_escape_string($database, $_POST['email']);
    $PNumber = mysqli_real_escape_string($database, $_POST['Pnumber']);
    $username = mysqli_real_escape_string($database, $_POST['username']);
    $password_1 = mysqli_real_escape_string($database, $_POST['password']);
    $password_2 = mysqli_real_escape_string($database, $_POST['Confirm_Password']);

    $token = bin2hex(random_bytes(15));
    
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$Email' LIMIT 1";
    $result = mysqli_query($database, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $Email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = password_hash($password_1, PASSWORD_BCRYPT);//encrypt the password before saving in the database

  	$query = "INSERT INTO `users`(`id`, `First Name`, `Last Name`, `Phone Number`, `username`, `email`, `password`, `token`, `status`) 
  			  VALUES('', '$Fname', '$Lname', '$PNumber', '$username', '$Email', '$password', '$token', 'inactive')";
  	$iquery = mysqli_query($database, $query);
    if($iquery){
      $subject = "Email Activation";
      $body = "Hi, $username. Click here to activate your account
      http://localhost/Blood-Bank/Register/activate.php?token=$token";
      $sender_email = "From: aniketsardesai44@gmail.com";

      if(mail($Email, $subject, $body, $sender_email)){
          $_SESSION['msg'] = "Check your mail to activate your account $Email";
          header('location: form.php');
      }else{
          echo "Email not sent";
      }
    }
  	// $_SESSION['username'] = $username;
  	// $_SESSION['success'] = "You are now logged in";
  	// header('location: login.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($database, $_POST['username']);
    $password = mysqli_real_escape_string($database, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
  
        $query = "SELECT * FROM `users` WHERE `username`='$username' AND `status`='active' ";
  
      $query_pass = mysqli_query($database, $query);
  
        $results = mysqli_num_rows($query_pass);
  
        if ($results) {
  
        $user_pass = mysqli_fetch_assoc($query_pass);
        
        $database_pass = $user_pass['password'];
  
        $_SESSION['username'] = $user_pass['username'];
  
        $pass_decode = password_verify($password, $database_pass);
  
        if($pass_decode){
          echo "Login Successful";
          ?>
            <script>
                location.replace("../index.php");
            </script>
          <?php
        }else{
          echo "Password Incorrect";
        }
          // $_SESSION['success'] = "You are now logged in";
          // header('location: index.php');
        }else {
            array_push($errors, "Invalid Username");
        }
    }
    // if(isset($_POST['RememberMe'])){
    
    //   $username = mysqli_real_escape_string($database, $_POST['username']);
    //   $password = mysqli_real_escape_string($database, $_POST['password']);
      
    //   setcookie('emailcookie', $username, time()+86400);
    //   setcookie('passwordcookie', $password, time()+86400);
    //   header('location: index.php');
    // }
    // else{
    //   header('location: index.php');
    // }
  }


  
// Recover

if(isset($_POST['rec_over'])){
    $email = mysqli_real_escape_string($database, $_POST['email']);
  
    $email_query = "SELECT * FROM users WHERE email='$email' ";
    $query = mysqli_query($database, $email_query);
  
    $user = mysqli_num_rows($query);
    
    if($user) {
  
      $userdata = mysqli_fetch_array($query);
  
      $username = $userdata['username'];
      $token = $userdata['token'];
  
  
        $subject = "Password Reset";
        $body = "Hi, $username. Click here to reset your password
        http://http://localhost/Blood-bank/Register/reset_pass.php?token=$token";
        $sender_email = "From: aniketsardesai44@gmail.com";
  
        if(mail($email, $subject, $body, $sender_email)){
            $_SESSION['msg'] = "Check your mail to reset your password $email";
            header('location: form.php');
        }else{
            echo "Email not sent";
        }
    }else{
      echo "Email Not Found.";
    }
  }
  
  // Reset Password
  
  if(isset($_POST['resetPass'])){
    
    if(isset($_GET['token'])){
      $token = $_GET['token'];
    
      $password_1 = mysqli_real_escape_string($database, $_POST['password_1']);
      $password_2 = mysqli_real_escape_string($database, $_POST['password_2']);
      
      if (empty($password_1)) { array_push($errors, "Password is required"); }
      if ($password_1 != $password_2) {
      array_push($errors, "The two passwords do not match");
      }
  
      if (count($errors) == 0) {
        $password = password_hash($password_1, PASSWORD_BCRYPT);//encrypt the password before saving in the database
  
        $query = "UPDATE `users` SET `password`='$password' WHERE `token`='$token'";
          
        $iquery = mysqli_query($database, $query);
        
        if($iquery){
          $_SESSION['msg'] = "Your password has been changed";
          header('location: form.php');
        }else{
          $_SESSION['passMsg'] = "Your password is not updated.";
          header('location: reset_pass.php');
        }
      }else{
        $_SESSION['passMsg'] = "Your password is not matching";
      }
    }
  }

?>
