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
    <!-- <a class="btn btn-primary btn-outline-primary" href="/home">Back</a><br> should log user out -->
    
    <div class="container login-container">
        <h1 class="font-weight-bold text-white">Welcome <?= $_SESSION['username'] ?> !</h1>
       <div class="row">
            <div class="col-12 login-form-1 bg-light">
                <h3 class="font-weight-bold text-dark">Please Reset Password </h3>
        
                <form method="post" action="controllers/reset.php" class="col-12 col-lg-8 col-md-10">
                    <div class="form-group row">
                        <h6 class="ForgetPwd font-weight-bold col-lg-4 col-md-4 col-12 col-sm-12">New Password: </h6>
                        <input id="password" oninput="checkPW();" type="password" name="password" class="form-control col-lg-8 col-md-8 col-12 col-sm-12" placeholder="Your Password *" value="" required/>
                    </div>
                    <div class="form-group row">
                        <h6 class="ForgetPwd font-weight-bold col-lg-4 col-md-4 col-12 col-sm-12">Confirm: </h6>
                        <input oninput="checkPW();" id="cpassword" type="password" name="cpassword" class="form-control col-lg-8 col-md-8 col-12 col-sm-12" placeholder="Your Confirmation *" value="" required/>
                    </div>
                    <?php 
                    if(isset($_GET['pwd']) && $_GET['pwd']=='wrong' )
                        echo '<div id="checkpw"><p style="color:red;">Passwords Didn\'t Match</p></div>';
                    ?>
                    <div class="form-group d-flex justify-content-center row">
                        <input type="submit" name="save" class="btnSubmit col-4 offset-1" value="Save" />
                        <a class="btnSubmit col-4 offset-1 text-center" href="./">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function checkPW(){
            var pw = document.getElementById("password").value;
            var cpw = document.getElementById("cpassword").value;
            if(pw == cpw){
                document.getElementById("checkpw").innerHTML= "<p style='color:green'>Match</p>";
            }else{
                document.getElementById("checkpw").innerHTML= "<p style='color:red'>Didn't Match</p>";
            }
        }
    </script>
</body>
</html>