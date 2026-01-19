
<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: validLog.php");
    exit();
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: webpage.php");
    exit();
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <link href="/gamesWebService/css/css/style1.css" rel="stylesheet">
    <link href="/gamesWebService/css/css/contact.css" rel="stylesheet">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>


  <script>$(document).ready(function(){
$('.slider').bxSlider({ auto:true, mode:'fade', controls:false, pager:true, touchEnabled:false, speed: 1000 });
});</script>
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                
                <a class="navbar-brand" href="#">
                  <img src="\gamesWebService\php\image\ChatGPT Image Jan 8, 2026, 11_20_42 AM.png" height="60" width="60" alt="">   
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                <!--         <li class="nav-item active">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                --->
                <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown"
                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Services
                 </a>

                    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                   
                    <a class="dropdown-item" href="addservices.php">Add Services</a>
                    <a class="dropdown-item" href="servList.php">Services List</a>
                    
                     <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="support.php">Support</a>
                    </div>
                </li>

                    </ul>
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item active">
                            <a class="nav-link" href="#">Logout</a>
                        </li>

                    </ul>
                </div>
            </nav>

        </div>

    </header>
</body>
</html>