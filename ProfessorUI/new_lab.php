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
  <body class="">
    <a class="btn btn-dark btn-outline-primary" href="/home.php">Back</a><br> <!-- should log user out -->
    
    <div class="container login-container bg-light">
        <div class="row">
            <div class="col-12 login-form-1">
                <h3>New Lab</h3>
                <form method="post" action="controllers/login" class="col-12 col-lg-8 col-md-10">
                    <div class="form-group">
                        <h4 class="ForgetPwd font-weight-bold">Professor/TA </h4>
                        <select class="form-control" name = "professor_ta" id = "professor_ta">
                          <option value = "prof_example1">Professor X</option>
                          <option value = "prof_example2">Lab TA Y</option>
                          <option value = "prof_example3">Professor Z</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h4 class="ForgetPwd font-weight-bold">Lab Name </h4>
                        <input type = "text" class="form-control" id = "new_lab_name" name = "new_lab_name">
                    </div>
                    <div class="form-group">
                        <h4 class="ForgetPwd font-weight-bold">New Password </h4>
                        <input class="form-control" type = "password" id = "new_lab_pw" name = "new_lab_pw">
                    </div>
                    <div class="form-group">
                        <h4 class="ForgetPwd font-weight-bold">Confirm Password </h4>
                        <input class="form-control" type = "password" id = "c_lab_pw" name = "c_lab_pw">
                    </div>
                    <div class="form-group">
                        <h4 class="ForgetPwd font-weight-bold">Number of Questions </h4>
                        <input class="form-control" type = "number" id = "new_lab_num_questions" name = "new_lab_num_questions">
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" class="btnSubmit" value="Create Lab" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>