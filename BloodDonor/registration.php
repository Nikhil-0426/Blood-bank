<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>

<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F210762803315449" title="oEmbed Form">
    <link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F210762803315449" title="oEmbed Form">
    <link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
    <link rel="canonical" href="https://form.jotform.com/210762803315449" />
    <title>Blood Donation Form</title>
    <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.24019" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/54be8f18700cc4e0368b4568.css?themeRevisionID=5d7ca1edd72e2373d866fe41"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
    <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.24019" type="text/javascript"></script>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <li><a href="../Eligibility/eligibility.php">Eligibility/Compatibility</a></li>
            <li><a href="#">Donor Registration</a></li>
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
    <br><br><br><br>
    <form class="jotform-form" action="registration.php" method="post">
      <input type="hidden" name="formID" value="210762803315449" />
      <input type="hidden" id="JWTContainer" value="" />
      <input type="hidden" id="cardinalOrderNumber" value="" />
      <div role="main" class="form-all">
        <ul class="form-section page-section">
          <li id="cid_3" class="form-input-wide" data-type="control_head">
            <div class="form-header-group  header-large">
              <div class="header-text httal htvam">
                <h1 id="header_3" class="form-header" data-component="header">
                  GIVE BLOOD SAVE LIFE
                </h1>
                <div id="subHeader_3" class="form-subHeader">
                  DONORS REGISTRATION FORM
                </div>
              </div>
            </div>
          </li>
          <li class="form-line" data-type="control_fullname" id="id_17">
            <label class="form-label form-label-left form-label-auto" id="label_17" for="first_17"> Full Name </label>
            <div id="cid_17" class="form-input">
              <div data-wrapper-react="true">
                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                  <input type="text" id="first_17" name="Fname" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_17 sublabel_17_first" />
                  <label class="form-sub-label" for="first_17" id="sublabel_17_first" style="min-height:13px" aria-hidden="false"> First Name </label>
                </span>
                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                  <input type="text" id="last_17" name="Lname" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_17 sublabel_17_last" />
                  <label class="form-sub-label" for="last_17" id="sublabel_17_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
                </span>
              </div>
            </div>
          </li>
          <li class="form-line" data-type="control_address" id="id_14">
            <label class="form-label form-label-left form-label-auto" id="label_14" for="input_14_addr_line1"> Address </label>
            <div id="cid_14" class="form-input">
              <div summary="" class="form-address-table jsTest-addressField">
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-street-line jsTest-address-lineField">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="input_14_addr_line1" name="Street_Address" class="form-textbox form-address-line" value="" data-component="address_line_1" aria-labelledby="label_14 sublabel_14_addr_line1" />
                      <label class="form-sub-label" for="input_14_addr_line1" id="sublabel_14_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label>
                    </span>
                  </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-country-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <select class="form-dropdown form-address-country noTranslate" name="City" id="input_14_country" data-component="country" required="" aria-labelledby="label_14 sublabel_14_country">
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
                      <label class="form-sub-label" for="input_14_country" id="sublabel_14_country" style="min-height:13px" aria-hidden="false"> City </label>
                    </span>
                  </span>
                  <br>
                  <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="input_14_state" name="State" class="form-textbox form-address-state" value="" data-component="state" aria-labelledby="label_14 sublabel_14_state" />
                      <label class="form-sub-label" for="input_14_state" id="sublabel_14_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                    </span>
                  </span>
                </div>
                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                  <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                    <span class="form-sub-label-container" style="vertical-align:top">
                      <input type="text" id="input_14_postal" name="Pincode" class="form-textbox form-address-postal" value="" data-component="zip" aria-labelledby="label_14 sublabel_14_postal" />
                      <label class="form-sub-label" for="input_14_postal" id="sublabel_14_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </li>
          <li class="form-line" data-type="control_dropdown" id="id_11">
            <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11"> BLOOD GROUP </label>
            <div id="cid_11" class="form-input">
              <select class="form-dropdown" id="input_11" name="Blood_Grp" style="width:150px" data-component="dropdown" aria-labelledby="label_11">
                <option value="">  </option>
                <option value="A+"> A+ </option>
                <option value="AB+"> AB+ </option>
                <option value="A-"> A- </option>
                <option value="AB-"> AB- </option>
                <option value="B+"> B+ </option>
                <option value="B-"> B- </option>
                <option value="O+"> O+ </option>
                <option value="O-"> O- </option>
              </select>
            </div>
          </li>
          <li class="form-line" data-type="control_phone" id="id_16">
            <label class="form-label form-label-left form-label-auto" id="label_16" for="input_16_area"> Phone Number </label>
            <div id="cid_16" class="form-input">
              <div data-wrapper-react="true">
                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
                  <input type="tel" id="input_16_phone" name="Phone_No" class="form-textbox" value="+91" data-component="phone" aria-labelledby="label_16 sublabel_16_phone" />
                  <label class="form-sub-label" for="input_16_phone" id="sublabel_16_phone" style="min-height:13px" aria-hidden="false"> Phone Number </label>
                </span>
              </div>
            </div>
          </li>
          <li class="form-line" data-type="control_email" id="id_15">
            <label class="form-label form-label-left form-label-auto" id="label_15" for="input_15"> E-mail </label>
            <div id="cid_15" class="form-input">
              <input type="email" id="input_15" name="Email" class="form-textbox validate[Email]" size="30" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_15" />
            </div>
          </li>
          <!-- <li class="form-line" data-type="control_textarea" id="id_13">
            <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13"> FEEDBACK </label>
            <div id="cid_13" class="form-input">
              <textarea id="input_13" class="form-textarea" name="q13_feedback" cols="30" rows="6" data-component="textarea" aria-labelledby="label_13"></textarea>
            </div>
          </li> -->
          <li class="form-line" data-type="control_button" id="id_2">
            <div id="cid_2" class="form-input-wide">
              <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                <button type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" name="reg_donar">
                  Submit
                </button>
              </div>
            </div>
          </li>
          <li style="display:none">
            Should be Empty:
            <input type="text" name="website" value="" />
          </li>
        </ul>
      </div>
      <script>
      JotForm.showJotFormPowered = "new_footer";
      </script>
      <script>
      JotForm.poweredByText = "Powered by JotForm";
      </script>
      <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="210762803315449" />
      <script type="text/javascript">
          var all_spc = document.querySelectorAll("form[id='210762803315449'] .si" + "mple" + "_spc");
          for (var i = 0; i < all_spc.length; i++)
          {
            all_spc[i].value = "210762803315449-210762803315449";
          }
      </script>
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
      </script>
    </form>
  </body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script>