<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <header>
    <nav>
        <div class="menu-icon"><span class="fas fa-bars"></span></div>
        <div class="logo">B+ A+ HERO+</div>
        <div class="nav-items">
            <li><a href="#">Home</a></li>
            <li><a href="#">Eligibility</a></li>
            <li><a href="BloodDonor/registration.php">Donor Registration</a></li>
            <li><a href="#">Search A Donor</a></li>
            <li><a href="form.html">Sign Up / Sign In</a></li>
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
                    <div class="col-md-12 center"><h2> FOLLOWING BLOOD REQUIRED </h2></div>
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
                <tr>
                    <td class="col-md-3">Margoa</td>
                    <td class="col-md-1 center">B+</td>
                    <td class="col-md-1 center">60</td>
                    <td class="col-md-3">Salgaokar Hospital</td>
                    <td class="col-md-2">Blood Loss</td>
                    <td class="col-md-2"><a href="requirement_details.php?details=4678">Contact</a></td>
                </tr>
                <tr>
                    <td class="col-md-3">Panjim</td>
                    <td class="col-md-1 center">O+</td>
                    <td class="col-md-1 center">28</td>
                    <td class="col-md-3">GMC Hospital</td>
                    <td class="col-md-2">Dengue</td>
                    <td class="col-md-2"><a href="requirement_details.php?details=4677">Contact</a></td>
                </tr>

                <tr>
                    <td class="col-md-3">Vasco</td>
                    <td class="col-md-1 center">AB+</td>
                    <td class="col-md-1 center">20</td>
                    <td class="col-md-3">Pai Hospital</td>
                    <td class="col-md-2">Low Platelet Count</td>
                    <td class="col-md-2"><a href="requirement_details.php?details=4676">Contact</a></td>
                </tr>
            </table>    
        </div>
    </div>

    <div class="panel-heading center"><h2> Benefits </h2></div>
        <div class="panel-body justify" style="line-height:2;">
            <li>Donating blood may reduce the risk of heart disease for men and stimulate the generation of red blood cells.</li>
            <li>The amount of toxic chemicals (e.g. mercury, pesticides, fire retardants) circulating in the blood stream is reduced by the amount contained in given blood. </li>
            <li>The good news is you can give blood again and again to help save more lives! </li>
            <li>If you're a regular blood donor, you can give blood once in 12 weeks.</li>
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
