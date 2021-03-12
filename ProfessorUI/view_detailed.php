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
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css"> 
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><!-- specifies to use css file for stylesheet -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
  </head>

  <!-- body stuff goes here -->
  <body class="banner-bg">
    <!-- <a class="btn btn-primary btn-outline-primary" href="/home">Back</a><br> should log user out -->
    
    <div class="container login-container">
        <h1 class="font-weight-bold text-white">View Lab Ratings</h1>
        <div class="row">
            <div class="col-12 login-form-1 bg-light">
                <form method="post" action="./view_detailed.php" class="col-12 col-lg-8 col-md-10">
                    <div class="form-group row">
                        <label class="col-2 ForgetPwd" >Qn Number </label>
                        <label class="col-3 ForgetPwd" >Raters </label>
                        <label class="col-3 ForgetPwd" >Interest </label>
                        <label class="col-3 ForgetPwd" >Difficulty </label>

                    </div>
                    
                    <?php 
                    if(isset($_GET['lab_rat'])&&isset($_GET['lab'])){
                        $lab = $_GET['lab'];
                        $lab_rat = $_GET['lab_rat'];
                        // echo "sELECT Question_no, AVG(interest_rating) as interest_rating, AVG(difficulty_rating) as difficulty_rating FROM RateMyLab_new.rating WHERE `Assignment_no2`= $lab_rat AND `lab_crn3`=$lab GROUP BY Question_no ;";
                        $qry = $connections->query("sELECT count(Question_no) as qns, Question_no, AVG(interest_rating) as interest_rating, AVG(difficulty_rating) as difficulty_rating FROM RateMyLab_new.rating WHERE `Assignment_no2`= $lab_rat AND `lab_crn3`=$lab GROUP BY Question_no ;");
                            
                        foreach($qry as $rating ){
                    ?>
                    <div class="form-group row">
                        <h6 class="ForgetPwd font-weight-bold col-2"> <?= $rating['Question_no'] ?>: </h6>
                        <label class="ForgetPwd font-weight-bold col-3"><?= $rating['qns'] ?></label>
                        <label class="ForgetPwd font-weight-bold col-3"><?= $rating['interest_rating'] ?></label>
                        <label class="ForgetPwd font-weight-bold col-3"><?= $rating['difficulty_rating'] ?></label>
                    </div>
                    
                    <?php
                    }
                    }
                    else{
                            header("Location: ./home.php");
                    }
                        ?>
                        
                    <div class="form-group d-flex justify-content-center row">
                        <a class="btnSubmit col-4 text-center" href="./view_lab_ratings.php?lab_crn=<?= $lab?>">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>