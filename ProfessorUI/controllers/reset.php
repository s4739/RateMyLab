<?php
session_start(); 
include "connect.php";
if(isset($_POST['save'])){
    
    if(isset($_POST['password'])&&isset($_POST['cpassword']) && ($_POST['cpassword']===$_POST['password']) ){
        $prof_id = $_SESSION['username'];
        $pwd = $_POST["password"];
        $login_statement = $connections->exec("uPDATE `RateMyLab_new`.`PROFESSOR` SET `Status` = 'ACTIVATED', `psswd` = '$pwd'  WHERE(`prof_id` = '$prof_id' );");
        if($login_statement){
            header("Location: ../home.php");
        }else{
            echo "Error Contact Admin <a href = '../'>Home</a>";
        }
        
    }else{
        header("Location: ../initial_pw.php?pwd=wrong");
    }
}else{
    header("Location: ../");
}
?>