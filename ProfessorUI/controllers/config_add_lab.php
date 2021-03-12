<?php 
session_start(); 
include "connect.php";
if(isset($_POST['config_lab'])){
    $lab = $_POST['lab'];
    $row =$_POST['data'];
    for($i=0; $i<14; $i++) {
        $key = $i+1;
        $value = $row[$i];
        if($value!=0){
        // echo "iNSERT INTO `RateMyLab_new`.`assignment`(`Total_no_Questions`, `lab_crn2`,`Assignment_no`)  VALUES($value, $lab, $key) ON DUPLICATE KEY UPDATE `Total_no_Questions` = $value ;";

        //echo "uPDATE `RateMyLab_new`.`assignment` SET `Total_no_Questions` = $value WHERE (`lab_crn2` = $lab ) and (`Assignment_no` = $key);";
        $qry = $connections->exec("iNSERT INTO `RateMyLab_new`.`assignment`(`Total_no_Questions`, `lab_crn2`,`Assignment_no`)  VALUES($value, $lab, $key) ON DUPLICATE KEY UPDATE `Total_no_Questions` = $value ;");
        }
    }  

}

header("Location: ../choose_labs.php?lab_crn=$lab");
?>