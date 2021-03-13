<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
    <header>
        <nav class="topnav" id="myTopnav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Eligibility</a></li>
                <li><a href="#">Compatibility</a></li>
                <li><a href="#">Donor Registration</a></li>
                <li><a href="#">Search A Donor</a></li>
                <li><a href="#">Login</a></li>    
            </ul>
            <div style="float: right;">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
            </div>
        </nav>
    </header>
    <body>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="img/background1.jpg" style="width:100%; height:90vh;">
            </div>

            <div class="mySlides fade">
                <img src="img/background2.jpg" style="width:100%; height:90vh;">
            </div>

            <div class="mySlides fade">
                <img src="img/background3.jpg" style="width:100%; height:90vh;">
            </div>
            <div class="mySlides fade">
                <img src="img/background5.jpg" style="width:100%; height:90vh;">
            </div>
        </div>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="index.js"></script>

</html>