<?php
	if(isset($_SESSION['username'])){
		header('location: index.php');
	}
?>

<?php include('server.php') ?>

<!DOCTYPE html>   
<html>   
  <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="style.css">
    <title> Login Page </title>  
  </head>  
  <header>
    <nav>
        <div class="menu-icon"><span class="fas fa-bars"></span></div>
        <div class="logo">B+ A+ HERO+</div>
        <div class="nav-items">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Eligibility</a></li>
            <li><a href="../BloodDonor/registration.php">Donor Registration</a></li>
            <li><a href="#">Search A Donor</a></li>
            <li><a href="#">Sign Up / Sign In</a></li>
        </div>
        <div class="search-icon"><span class="fas fa-search"></span></div>
        <div class="cancel-icon"><span class="fas fa-times"></span></div>
    </nav>
  </header>  
  <body>    
    <br><br><br><br><br><br><br><br><br><br>
    <center> <h1><b><a style="color: white; font-size: 30px; text-decoration: none;" href="index.php">Login</a></b>  </h1> </center>   
    <form method="post" action="form.php">  
        <div>
            <p class="bg-primary text-white px-4" style="font-size: 15px"><?php
                include('errors.php');
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                }else{
                    echo $_SESSION['msg'] = "You are logged out. Plese login again.";
                }
                ?></p>
        </div>
        <div class="container">
          <div class="input-group">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
          </div>
          <div class="input-group">
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
          </div>
      
          <center>
            <div class="input-group">
              <button type="submit" class="btn" name="login_user">Login</button>
            </div>
          </center>
          <center>
            <p style="font-size: 15px">
              Forget Your Password No Worry? <a href="recover.php">Click Here</a>
            </p>
          </center> 
          <center>
            <p style="font-size: 17px">
              Not yet a member? <a href="signup.php">Sign up</a>
            </p>
          </center>   
        </div>   
    </form>     
  </body>     
</html>