<?php 
?>
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
        <h1 class="font-weight-bold text-white">Configure Lab For Rating</h1>
        <div class="row">
            <div class="col-12 login-form-1 bg-light">
                <form method="get" action="./choose_labs.php" class="col-12 col-lg-8 col-md-10">
                    <div class="form-group row">
                        <h6 class="ForgetPwd font-weight-bold col-lg-4 col-md-4 col-12 col-sm-12">Lab CRN: </h6>
                        <select name="lab_crn" class="form-control col-lg-8 col-md-8 col-12 col-sm-12" required>
                            <?php 
                            session_start();
                            include "./controllers/connect.php";
                            $login_username=$_SESSION['username'];
                            $qry = $connections->query("sELECT * FROM LAB WHERE `professor_id`='$login_username'");
                            foreach($qry as $crn){
                                echo "<option>".$crn['Lab_Crn']."</option>";
                            }
                            ?>
                        </select> 
                    </div>
                    <div class="form-group d-flex justify-content-center row">
                        <input type="submit" name="config_lab" class="btnSubmit col-4 offset-1" value="Configure" />
                        <a class="btnSubmit col-4 offset-1 text-center" href="./home.php">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>