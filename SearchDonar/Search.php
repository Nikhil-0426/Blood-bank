
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Search Donors | Blood Donors India</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="India's blood donor database; register as blood donor and save life ;">
        <meta name="Keywords" content="blood, blood donor, blood bank, blood banks, blood donors,donor database, seek donors, get donors, donors on request, voluntary donors, search donors, donors list, donors on demand, donate blood, register donors, register donor, get donor, seek donor, voluntary donor, search donor, voluntary donors, blood donation, india blood donors,indian blood donors,online blood bank">
        <link rel="stylesheet" href="style.css">
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
                <li><a href="../index.php">Home</a></li>
                <li><a href="../Eligibility/eligibility.php">Eligibility</a></li>
                <li><a href="../BloodDonor/registration.php">Donor Registration</a></li>
                <li><a href="#">Search A Donor</a></li>
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

        <script>
    (function ($) {
        $.fn.counter = function () {
            const $this = $(this),
                    numberFrom = parseInt($this.attr('data-from')),
                    numberTo = parseInt($this.attr('data-to')),
                    delta = numberTo - numberFrom,
                    deltaPositive = delta > 0 ? 1 : 0,
                    time = parseInt($this.attr('data-time')),
                    changeTime = 10;

            let currentNumber = numberFrom,
                    value = delta * changeTime / time;
            var interval1;
            const changeNumber = () => {
                currentNumber += value;
                //checks if currentNumber reached numberTo
                (deltaPositive && currentNumber >= numberTo) || (!deltaPositive && currentNumber <= numberTo) ? currentNumber = numberTo : currentNumber;
                this.text(parseInt(currentNumber));
                currentNumber == numberTo ? clearInterval(interval1) : currentNumber;
            }

            interval1 = setInterval(changeNumber, changeTime);
        }
    }(jQuery));

    $(document).ready(function () {

        $('.count-up').counter();

        setTimeout(function () {
            $('.count5').counter();
        }, 3000);
    });
</script>
        <div class="container" style="padding-top: 100px;">
            <div style="padding:20px;background-color: beige;border-radius: 5px;">
                <form method="post" action="Search.php">
                    <div>Select City</div><br>
                    <div class="col-md-4">
                        <select name="city" class="form-control" id="search">
                            <option value="">Please Select City</option>
                            <option value="Aldona"> Aldona</option>
                            <option value="Bandora">Bandora</option>
                            <option value="Benaulim">Benaulim</option>
                            <option value="Bicholim">Bicholim</option>
                            <option value="Calangute">Calangute</option>
                            <option value="Canacona">Canacona</option>
                            <option value="Candolim">Candolim</option>
                            <option value="Carapur">Carapur</option>
                            <option value="Chinchinim">Chinchinim</option>
                            <option value="Colvale">Colvale</option>
                            <option value="Cortalim">Cortalim</option>
                            <option value="Cuncolim">Cuncolim</option>
                            <option value="Curchorem Cacora">Curchorem Cacora</option>
                            <option value="Curti">Curti</option>
                            <option value="Davorlim">Davorlim</option>
                            <option value="Fatorda">Fatorda</option>
                            <option value="Goa Velha">Goa Velha</option>
                            <option value="Guirim">Guirim</option>
                            <option value="Mapusa">Mapusa</option>
                            <option value="Margao">Margao</option>
                            <option value="Mormugao">Mormugao</option>
                            <option value="Pale">Pale</option>
                            <option value="Panaji">Panaji</option>
                            <option value="Parcem">Parcem</option>
                            <option value="Penha-de-Franca">Penha-de-Franca</option>
                            <option value="Pernem">Pernem</option>
                            <option value="Ponda">Ponda</option>
                            <option value="Quepem">Quepem</option>
                            <option value="Queula">Queula</option>
                            <option value="Raia">Raia</option>
                            <option value="Reis Magos">Reis Magos</option>
                            <option value="Saligao">Saligao</option>
                            <option value="Sancoale">Sancoale</option>
                            <option value="Sanguem">Sanguem</option>
                            <option value="Sanquelim">Sanquelim</option>
                            <option value="Sanvordem">Sanvordem</option>
                            <option value="Sao Jose de Area">Sao Jose de Area</option>
                            <option value="Siolim">Siolim</option>
                            <option value="Socorro">Socorro</option>
                            <option value="Valpoi">Valpoi</option>
                            <option value="Varca">Varca</option>
                        </select>
                    </div><br>
                    <div class="col-md-2">Select Blood Group</div><br>
                    <div class="col-md-2">
                        <select name="bloodgroup">
                            <option value="A1+">A1+</option>
                            <option value="A1-">A1-</option>
                            <option value="A2+">A2+</option>
                            <option value="A2-">A2-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="A1B+">A1B+</option>
                            <option value="A1B-">A1B-</option>
                            <option value="A2B+">A2B+</option>
                            <option value="A2B-">A2B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                        </select>
                    </div><br>
                    <div class="col-md-2">
                        <input type="submit" name="submit" value="Search" class="btn btn-info btn-sm rounded-0">
                    </div>
                </form>
            </div>
            <center><div style="padding:10px;"><h3>Blood Donors List</h3></div></center>
            <div class="container">
                <center><table width="90%" height="auto" border="1" cellpadding="4" cellspacing="4">
                    <tr>
                        <th class="col-md-2"><h4>Name</h4></th>
                        <th class="col-md-1"><h4>City</h4></th>
                        <th class="col-md-2"><h4>Blood Group</h4></th>
                        <th class="col-md-1"><h4>Contact</h4></th>
                        <th class="col-md-2"><h4>Email</h4></th>
                    </tr>
                    <?php
                        $db = mysqli_connect('localhost', 'root', '', 'blood_donar');


                        if(isset($_POST['submit'])){
                            $Blood_Grp = mysqli_real_escape_string($db, $_POST['bloodgroup']);
                            $City = mysqli_real_escape_string($db, $_POST['city']);

                            $query = "SELECT * FROM donar_registration WHERE City='$City' AND Blood_Grp='$Blood_Grp'";

                            $data = mysqli_query($db, $query);

                            if($data->num_rows > 0){
                                while($result = mysqli_fetch_assoc($data)){
                    ?>

                    <tr>
                        <td class="col-md-2 center"><?php echo $result['Fname']; ?></td>
                        <td class="col-md-1 center"><?php echo $result['City']; ?></td>
                        <td class="col-md-2 center"><?php echo $result['Blood_Grp']; ?></td>
                        <td class="col-md-1 center"><a href="tel:<?php echo $result['Phone_No']; ?>"><?php echo $result['Phone_No']; ?></a></td>
                        <td class="col-md-2 center"><a href="mailto:<?php echo $result['Email']; ?>"><?php echo $result['Email']; ?></a></td>
                    </tr>
                    <?php }}} ?>
                </table></center>
            </div>
        </div>
    </body>
    <script src="ajax.js"></script>
</html>

<script>
    $(document).ready(function () {
    // Send Search Text to the server
    $("#search").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "action.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#show-list").html(response);
          },
        });
      } else {
        $("#show-list").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function () {
      $("#search").val($(this).text());
      $("#show-list").html("");
    });
  });

</script>