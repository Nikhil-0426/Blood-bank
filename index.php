<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>

<?php 
    $db = mysqli_connect('localhost', 'root', '', 'blood_donar');
    $query = "SELECT * FROM `donar_registration`;";
    $data = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <header>
    <nav>
        <div class="menu-icon"><span class="fas fa-bars"></span></div>
        <div class="logo">B+ A+ HERO+</div>
        <div class="nav-items">
            <li><a href="#">Home</a></li>
            <li><a href="Eligibility/eligibility.php">Eligibility/Compatibility</a></li>
            <li><a href="BloodDonor/registration.php">Donor Registration</a></li>
            <li><a href="SearchDonar/Search.php">Search A Donor</a></li>
            <?php if(!isset($_SESSION['username'])): ?>
                <li><a href="Register/form.php">Login / Register</a></li>
            <?php endif ?>
            <div class="nav-sign">
                <?php if(isset($_SESSION['username'])): ?>
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong><?php echo $_SESSION['username']; ?></strong></button>
                <?php endif ?>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a href="index.php?logout='1'">Logout</a></li>
            </div>
        </div>
        </div>
        <div class="search-icon"><span class="fas fa-search"></span></div>
        <div class="cancel-icon"><span class="fas fa-times"></span></div>

    </nav>
  </header>
  <body>
    
    <div class="navigation">
        <div class="quotes">
            <h3>Donate your blood for a reason, let the reason be a life</h3>
        </div>
        <div class="image">
            <img src="img/logo2.jpeg" alt="Logo" width="250px" height="200px">
        </div>
        <div class="donarsActive">
            <div></div>
        </div>
    </div>
    <section><p class="slide-text"></p></section>
    <div class="req" style="padding: 13px;"><h2><a href="BloodDonor/registration.html"> POST YOUR REQUIREMENT </a></h2></div>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading center">
                <div class="row">
                    <center><h2> FOLLOWING BLOOD REQUIRED </h2></center>
                </div>
            </div>
            <table width="90%" height="400px">
                <tr>
                    <th class="col-md-3"><h4>CITY</h4></th>
                    <th class="col-md-1"><h4>BLOOD GROUP</h4></th>
                    <th class="col-md-1"><h4>AGE</h4></th>
                    <th class="col-md-3"><h4>HOSPITAL NAME</h4></th>
                    <th class="col-md-2"><h4>REASON</h4></th>
                    <th class="col-md-2"><h4>CONTACT</h4></th>
                </tr>
                <?php 
                    if($data->num_rows > 0){
                        while($result = mysqli_fetch_assoc($data)){
                ?>
                <tr>
                    <td class="col-md-3"><?php echo $result['City']; ?></td>
                    <td class="col-md-1 center"><?php echo $result['Blood_Grp']; ?></td>
                    <td class="col-md-1 center"><?php echo $result['Pincode']; ?></td>
                    <td class="col-md-3"><?php echo $result['Lname']; ?></td>
                    <td class="col-md-2"><?php echo $result['Street_Address']; ?></td>
                    <td class="col-md-2"><a href="requirement_details.php?details=4678"><?php echo $result['State']; ?></a></td>
                </tr>
                <?php }} ?>
            </table>    
        </div>
    </div>
    
    <div class="container" style="padding: 30px;">
        <h2>Blood Facts in General</h2>
        <h6>&#9829;	There is no substitute for human Blood</h6>
        <h6>&#9829;	Blood makes up about 7% of your body's weight.</h6>
        <h6>&#9829;	An average adult has about 14 to 18 pints of Blood.</h6>
        <h6>&#9829;	One standard unit or pint of Blood equals about two cups.</h6>
        <h6>&#9829;	Blood carries oxygen and nutrients to all of the body.</h6>
        <h6>&#9829;	Blood carries carbon dioxide and other waste products back to the lungs, kidneys and liver for disposal.</h6>
        <h6>&#9829;	Blood fights against infection and helps heal wounds.</h6>
        <h6>&#9829;	One unit of donated whole Blood is separated into components before use (red Blood cells, white Blood cells, plasma, platelets, etc.)</h6>
        <h6>&#9829;	There are four main Blood types: A, B, AB and O.</h6>
        <h6>&#9829;	Each Blood type is either Rh positive or negative.</h6>
        <h6>&#9829;	There are about one billion red Blood cells in a few drops of whole Blood.</h6>
        <h6>&#9829;	Red Blood cells live about 120 days in our bodies.</h6>
        <h6>&#9829;	Red Blood cells can be stored under normal conditions for up to 42 days.</h6>
        <h6>&#9829;	Frozen red Blood cells can be stored for ten years, and more.</h6>
        <h6>&#9829;	Platelets must be used within five days.</h6>
        <h6>&#9829;	Platelets are small Blood cells that assist in the process of Blood clotting helping those with leukemia and other cancers, controlling bleeding.</h6>
        <h6>&#9829;	Plasma, the fourth major component of Blood, is a sticky, pale yellow fluid mixture of water, protein and salts. It is 95% water. The other 5% is made up of nutrients, proteins and hormones.</h6>
        <h6>&#9829;	Blood Plasma constitutes 55% of the volume of human Blood.</h6>
        <h6>&#9829;	Plasma helps maintain Blood pressure, carries Blood cells, nutrients, enzymes and hormones, and supplies critical proteins for Blood clotting and immunity.</h6>
        <h6>&#9829;	Type AB plasma has been considered as the universal Blood plasma type, and therefore AB plasma is given to patients with any Blood type.</h6>
        <h6>&#9829;	Frozen Plasma can be stored for up to one year.</h6>
        <h6>&#9829;	Human Blood; red Blood cells, white Blood cells, plasma and platelets are made naturally by the body in the bone marrow.</h6>

    </div>

  </body>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script>
    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = ()=>{
      form.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }

    function changeBg(){
        const images = [
            'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("img/background1.jpg")',
            'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("img/background2.jpg")',
            'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("img/background4.png")',
            'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("img/background5.jpg")'
        ]
        
        const section = document.querySelector('section')
        const bg = images[Math.floor(Math.random() * 
        images.length)];
        section.style.backgroundImage = bg;
    }

    // function changeTxt(){
    //     const text = [
    //         'be a saviour for someone be their life',
    //         'Be A Hero',
    //         'Save Life , Donate Blood'
    //     ]
        
    //     const p = document.querySelector('.slide-text')
    //     const t = text[Math.floor(Math.random() * text.length)];
        
    //     p.style.backgroundText = t;
    // }

    setInterval(changeBg, 5000);
  </script>
</html>
