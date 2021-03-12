<?php
function getdb(){
$servername = "localhost";
$username = 'root';
$password = 'Singapore47';
$db = "RateMyLab_new";
try {
   
    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
?>