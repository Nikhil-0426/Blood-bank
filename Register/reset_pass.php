<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Password</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <div class="header">
  	<h2>Recover Acoount</h2>
  </div>
  <form method="post" action="">
  	<?php include('errors.php'); ?>
      <p class="bg-danger text-white" style="font-size: 17px;">
        <?php 
            if(isset($_SESSION['passMsg'])){
                echo $_SESSION['passMsg'];
            }else{
                echo $_SESSION['passMsg'] = "";
            }
        ?></p>
  	<div class="input-group">
  	  <label>New Password</label>
  	  <input type="password" name="password_1" placeholder="New password">
  	</div>
    <div class="input-group">
  	  <label>Confirm Password</label>
  	  <input type="password" name="password_2" placeholder="Confirm Password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="resetPass">Update Password</button>
  	</div>
  </form>
</body>
</html>