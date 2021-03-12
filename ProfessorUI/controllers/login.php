<!Doctype html>
<html>
    <head>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.4.2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.4.2/sweetalert2.min.css"/>


</head>
<body>

<?php 
session_start();
include "connect.php";
if(isset($_POST['login'])){
    
    $login_username = $_POST['username'];
    $login_password = $_POST['password'];
    $login_statement = $connections->query("sELECT * FROM PROFESSOR WHERE `prof_id`='$login_username' AND `psswd`='$login_password'");

    foreach($results as $value){
        echo $value['prof_id'];
    }
    if ($login_statement->rowCount()==1) {
        
        $_SESSION['username']=$login_username;
        session_regenerate_id();
        $login_username=$_SESSION['username'];
        echo"<b><center><h1 style='color:#fff'>welcome $login_username!</h1></center></b>";
    
        foreach ($login_statement as $row) {

            $_SESSION['crn']=$row['CourseCRN'];
            $_SESSION['year']=$row['Year_1'];
            $_SESSION['sem']=$row['Semester'];
            if($row['Status']==='ACTIVATED'){
                header("Location: ../home.php");

            }else{
                header("Location: ../initial_pw.php");
            }
        }
    }
    else{
        header("Location: ../");

    }
}

?>

   </body>
</html>