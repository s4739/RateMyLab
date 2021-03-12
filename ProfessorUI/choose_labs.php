<?php 
session_start();
include "./controllers/connect.php";
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
        <h1 class="font-weight-bold text-white">Add / Remove Lab</h1>
        <div class="row">
            <div class="col-12 login-form-1 bg-light">
                <form method="post" action="controllers/config_add_lab.php" class="col-12 col-lg-8 col-md-10">
                    <div class="form-group row">
                        <label class="col-1" >  </label>
                        <label class="col-8 ForgetPwd" >Lab Name </label>
                        <label class="col-3 ForgetPwd" >Questions </label>
                    </div>
                    <?php 
                    if(isset($_GET['lab_crn'])){
                        $lab = $_GET['lab_crn'];
                        $qry = $connections->query("sELECT * FROM RateMyLab_new.assignment;");
                        for($i = 1; $i<15; $i++){
                            $total_qn = 0;
                            $qry = $connections->query("sELECT `Total_no_Questions` FROM RateMyLab_new.assignment WHERE `Assignment_no`= $i AND `lab_crn2`=$lab limit 1 ;");
                            // echo $qry; 
                            foreach($qry as $value){
                                $total_qn = $value['Total_no_Questions'];
                            }
                             ?>
                        <div class="form-group row">
                            <h6 class="ForgetPwd font-weight-bold col-8">Lab <?= $i ?>: </h6>
                            <input type="number" name="data[]" class="form-control col-3" value="<?=$total_qn ?>" required/>
                        </div>
                        <?php
                        }
                        }else{
                                header("Location: ./home.php");
                        }
                        ?>
                        
                    <input hidden name="lab" value="<?=$lab ?>">
                    <div class="form-group d-flex justify-content-center row">
                        <input type="submit" name="config_lab" class="btnSubmit col-4 offset-1" value="Configure" />
                        <a class="btnSubmit col-4 offset-1 text-center" href="config_lab.php">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>