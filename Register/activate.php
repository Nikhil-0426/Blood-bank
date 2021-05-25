<?php
    session_start();

    include('server.php');

    if(isset($_GET['token'])){
        $token = $_GET['token'];
        $status = "active";

        $query = "UPDATE `users` SET `status`= '$status' WHERE `token`= '$token'";

        $update = mysqli_query($database, $query);

        if($update){
            if(isset($_SESSION['msg'])){
                $_SESSION['msg'] = "Account updated successfully";
                header('location: form.php');
            }else{
                $_SESSION['msg'] = "You are Logged out.";
                header('location: form.php');
            }
        }else{
            $_SESSION['msg'] = "Account not updated";
            header('location: signup.php');
        }
    }
?>