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
  <body>
    <a class="btn btn-primary btn-outline-primary" href="/home">Back</a><br> <!-- should log user out -->
    
    <div class="container login-container">
        <h3>Change Password</h3>
        <div class="row">
            <div class="col-12 login-form-1">
                <form method="post" action="controllers/login.php" class="col-12 col-lg-8 col-md-10">
                    <div class="form-group">
                        <h4 class="ForgetPwd font-weight-bold">Old Password </h4>
                        <input type="password" class="form-control" placeholder="Your Password *" value="" required />
                    </div>
                    <div class="form-group">
                        <h4 class="ForgetPwd font-weight-bold">New Password </h4>
                        <input type="password" class="form-control" placeholder="Your Password *" value="" required/>
                    </div>
                    <div class="form-group">
                        <h4 class="ForgetPwd font-weight-bold">Re-enter New Password </h4>
                        <input type="password" class="form-control" placeholder="Your Password *" value="" required/>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">

                        <a href="#" class="ForgetPwd" >Forget Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>