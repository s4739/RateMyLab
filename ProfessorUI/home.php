<?php session_start();?>
<!DOCTYPE html>
<html lang= "en" dir= "ltr">

<!-- header stuff goes here -->
  <head>
    <meta charset = "utf-8">
    <title>Rate My Lab (Professor) - Welcome!</title>
    <link href="/img/labrate_icon.png" type="image/png" rel="shortcut icon" />
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css"> 
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><!-- specifies to use css file for stylesheet -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
  </head>

  <!-- body stuff goes here -->
  <body class="banner-bg">
    <!-- <a class="btn btn-primary btn-outline-primary" href="/home">Back</a><br> -->
    
    <div class="container login-container">
        <h1 class="font-weight-bold text-white">Home</h1>
        <div class="row">
            <div class="col-12 login-form-1 bg-light">
                <div class="d-flex m-3 justify-content-center">
                    <a href="./config_lab.php" class="btnSubmit" >Configure Labs For Ratings</a>
                </div>
                <div class="d-flex m-3 justify-content-center">
                    <a href="./view_rating.php" class="btnSubmit" >View Ratings</a>
                </div>
                <div class="d-flex m-3 justify-content-center">
                    <a href="./" class="btnSubmit" >Log out</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>