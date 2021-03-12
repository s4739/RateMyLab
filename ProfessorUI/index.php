<!DOCTYPE html>
<html lang= "en" dir= "ltr">

<!-- header stuff goes here -->
  <head>
    <meta charset = "utf-8">
    <title>Rate My Lab (Professor) - Sign in</title>
    <link href="/img/labrate_icon.png" type="image/png" rel="shortcut icon" />
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css"> 
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><!-- specifies to use css file for stylesheet -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
  </head>

  <!-- body stuff goes here -->
  <body class="banner-bg">
    <div class="container login-container ">
        <h1 class="font-weight-bold text-light">Fall Semester 2020</h1>
        <div class="row col-lg-5 col-12 ml-auto mr-auto">
            <div class="col-12 login-form-2">
                <h3>Login </h3>
                <form method="post" action="controllers/login.php" class="col-12">
                    <div class="form-group row">
                        <p class="ForgetPwd font-weight-bold col-lg-4 col-md-4 col-12 col-sm-12">Username: </p>
                        <input name="username" type="text" class="form-control col-lg-8 col-md-8 col-12 col-sm-12" placeholder="Campus ID *" value="" required />
                    </div>
                    <div class="form-group row">
                        <p class="ForgetPwd font-weight-bold  col-lg-4 col-md-4 col-12 col-sm-12">Password: </p>
                        <input name="password" type="password" class="form-control col-lg-8 col-md-8 col-12 col-sm-12" placeholder="Your Password *" value="" required />
                    </div> 
                    <div class="form-group d-flex justify-content-center">
                        <input name="login" type="submit" class="btnSubmit" value="Log in" />
                    </div>
                    <!-- <div class="form-group">

                        <a href="#" class="ForgetPwd">Forget Password?</a>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</body>
</html>