<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Eligibility And Compatibility</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <header>
    <nav>
        <div class="menu-icon"><span class="fas fa-bars"></span></div>
        <div class="logo">B+ A+ HERO+</div>
        <div class="nav-items">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Eligibility/Compatibility</a></li>
            <li><a href="../BloodDonor/registration.php">Donor Registration</a></li>
            <li><a href="../SearchDonar/Search.php">Search A Donor</a></li>
            <?php if(!isset($_SESSION['username'])): ?>
                <li><a href="../Register/form.php">Login / Register</a></li>
            <?php endif ?>
            <div class="nav-sign">
                <?php if(isset($_SESSION['username'])): ?>
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong><?php echo $_SESSION['username']; ?></strong></button>
                <?php endif ?>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li class="signin"><a href="../index.php?logout='1'">Logout</a></li>
            </div>
        </div>
        </div>
        <div class="search-icon"><span class="fas fa-search"></span></div>
        <div class="cancel-icon"><span class="fas fa-times"></span></div>

    </nav>
  </header>
  
  <body>
    <div class="container" style="padding: 110px 0px 30px 30px;">
        <center><h1>Blood Donors Eligibility</h1></center>
        <h4>You should not be suffering from any of the following diseases or taking medicines for them</h4>
        
        <h5># Hepatitis B, C</h5>

        <h5># AIDS # Diabetes (are you under medication currently?)</h5>

        <h5># Fits/ Convulsions (are you under medication currently?)</h5>

        <h5># Cancer # Leprosy or any other infectious diseases</h5>

        <h5># Any allergies (Only if you are suffering from severe symptoms)</h5>

        <h5># Hemophilia/ Bleeding problems</h5>

        <h5># Kidney disease</h5>

        <h5># Heart disease</h5>

        <h5># Hormonal disorders</h5>

        <h5># Any other type of Jaundice (within 5 years)</h5>

        <h5># Tuberculosis (within 2 years)</h5>

        <h5># Chicken Pox (within 1 year)</h5>

        <h5># Malaria (within 1 year)</h5>

        <h5># Organ Transplant (within one year)</h5>

        <h5># Blood Transfusion (within the last 6 months)</h5>

        <h5># Pregnancy (within the last 6 months)</h5>

        <h5># Blood Donation (within the last 3 months)</h5>

        <h5># Major Surgery (within the last 3 months)</h5>

        <h5># Small Pox Vaccination (within the last 3weeks)</h5>

        <h5># Hemoglobin deficiency / Anemia (recently)</h5>

        <h5># Drastic weight loss (recently)</h5>

    </div>
    <div class="container center">
        <h2>Red Blood cell compatibility Table</h2>
        <center><table border="1" align="center" cellpadding="4" cellspacing="1" bgcolor="#666666" style="text-align: center; margin: 30px 0px;">
                    <tbody><tr bgcolor="#FFFFFF" class="ubuntu-black-13-bold">
                        <th>Recipient blood type</th>
                        <th colspan="8">Donor red blood cells must be:</th>
                    </tr>
                    <tr>
                        <td style="width:136px; background:#EFEFEF">O-</td>
                        <td bgcolor="#FFFFFF">O-</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                    </tr>
                    <tr>
                        <td style="background:#EFEFEF">O+</td>
                        <td bgcolor="#FFFFFF">O-</td>
                        <td bgcolor="#FFFFFF">O+</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                    </tr>
                    <tr>
                        <td style="background:#EFEFEF">A-</td>
                        <td bgcolor="#FFFFFF">O-</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF">A-</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                    </tr>
                    <tr>
                        <td style="background:#EFEFEF">A+</td>
                        <td bgcolor="#FFFFFF">O-</td>
                        <td bgcolor="#FFFFFF">O+</td>
                        <td bgcolor="#FFFFFF">A-</td>
                        <td bgcolor="#FFFFFF">A+</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                    </tr>
                    <tr>
                        <td style="background:#EFEFEF">B-</td>
                        <td bgcolor="#FFFFFF">O-</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF">B-</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                    </tr>
                    <tr>
                        <td style="background:#EFEFEF">B+</td>
                        <td bgcolor="#FFFFFF">O-</td>
                        <td bgcolor="#FFFFFF">O+</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF">B-</td>
                        <td bgcolor="#FFFFFF">B+</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF"></td>
                    </tr>
                    <tr>
                        <td style="background:#EFEFEF">AB-</td>
                        <td bgcolor="#FFFFFF">O-</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF">A-</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF">B-</td>
                        <td bgcolor="#FFFFFF"></td>
                        <td bgcolor="#FFFFFF">AB-</td>
                        <td bgcolor="#FFFFFF"></td>
                    </tr>
                    <tr>
                        <td style="background:#EFEFEF">AB+</td>
                        <td bgcolor="#FFFFFF">O-</td>
                        <td bgcolor="#FFFFFF">O+</td>
                        <td bgcolor="#FFFFFF">A-</td>
                        <td bgcolor="#FFFFFF">A+</td>
                        <td bgcolor="#FFFFFF">B-</td>
                        <td bgcolor="#FFFFFF">B+</td>
                        <td bgcolor="#FFFFFF">AB-</td>
                        <td bgcolor="#FFFFFF">AB+</td>
                    </tr>
            </tbody>
        </table></center><br>
        <h2>Plasma compatibility Table</h2>
        <center><table border="1" cellpadding="6" cellspacing="1" bgcolor="#666666" class="ubuntu-black-13" style="margin: 30px 0px;">
            <tbody>
                <tr bgcolor="#FFFFFF" class="ubuntu-black-13-bold">
                    <th>Recipient blood type</th>
                    <th>Donor plasma must be:</th>
                </tr>
                <tr align="center">
                    <td style="background:#EFEFEF">AB</td>
                    <td colspan="4" bgcolor="#FFFFFF">AB</td>
                </tr>
                <tr align="center">
                    <td style="background:#EFEFEF">A</td>
                    <td colspan="4" bgcolor="#FFFFFF">A or AB</td>
                </tr>
                <tr align="center">
                    <td style="background:#EFEFEF">B</td>
                    <td colspan="4" bgcolor="#FFFFFF">B or AB</td>
                </tr>
                <tr align="center">
                    <td style="background:#EFEFEF">O</td>
                    <td colspan="4" bgcolor="#FFFFFF">O, A, B or AB</td>
                </tr>
            </tbody>
        </table></center>
    </div>
  </body>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
  const menuBtn = document.querySelector(".menu-icon span");
  const cancelBtn = document.querySelector(".cancel-icon");
  const items = document.querySelector(".nav-items");
  const form = document.querySelector("form");
  menuBtn.onclick = ()=>{
    items.classList.add("active");
    menuBtn.classList.add("hide");
    cancelBtn.classList.add("show");
  }
  cancelBtn.onclick = ()=>{
    items.classList.remove("active");
    menuBtn.classList.remove("hide");
    cancelBtn.classList.remove("show");
    form.classList.remove("active");
    cancelBtn.style.color = "#ff3d00";
  }
</script>
</html>