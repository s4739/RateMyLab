<?php

   //Data base connection settings
	$host = 'localhost';
	$user = 'root';
	$pass = 'Singapore47';
	$db = 'mvorrey1';
	

	$mysqli = mysqli_connect($host,$user,$pass,$db) or die("db-connection failed: " . $mysqli->error()); 

    if (isset($_POST["import"])) {
        
        $fileName = $_FILES["file"]["tmp_name"];
        
        if ($_FILES["file"]["size"] > 0) {
            
            $file = fopen($fileName, "r");
            
            #$sqlDrop = "TRUNCATE TABLE `student` ";
            #$result = mysqli_query($mysqli, $sqlDrop);

            while (($column = fgetcsv($file, 100000, ",")) !== FALSE) { //the fgetcsv read data from the csv file the seperation character is ;
           		$sqlInsert = "INSERT INTO `student` (Stu_id,lab_crn,Stu_pass) VALUES ('". $column[0] . "','". $column[1] . "','" . $column[2] ."')";
                    $result = mysqli_query($mysqli, $sqlInsert);
            }
        }
    }
?>


<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="index.js"></script>
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>

	<body>
	<h1>Current Students</h1>
	    <div class="outer-scontainer">
	        <?php
	            $sqlSelect = "SELECT * FROM `student` ";
	            $result = mysqli_query($mysqli, $sqlSelect);
	            
	            if (mysqli_num_rows($result) > 0) {?>

	            <table id='userTable'>
	            <thead>
	                <tr>
	                    <th>Student ID</th>
	                    <th>Lab CRN</th>
	                    <th>Student Password</th>
	                    <th>New Password</th>
	                </tr>
	            </thead>

	        <?php
	            while ($row = mysqli_fetch_array($result)) {?>                   
	            <tbody>
		            <tr>
		                <td><?php  echo $row['Student_id']; ?></td>
		                <td><?php  echo $row['crn']; ?></td>
		                <td><?php  echo $row['password']; ?></td>
		                <td><?php  echo $row['new_passord']; ?></td>
		            </tr>
	                <?php
	            }?>
	            </tbody>
	        </table>
	        <?php } ?>
			 <div class="row">
	            <form class="form-horizontal" action="" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
	            	<div class="form-area">
						<input type="file" name="file" id="file-input" accept=".csv">
    					<button type="submit" id="submit" name="import" class="btn-submit">Import Students .CSV</button><br />
					</div>
	            </form>
	        </div>
	    </div>
	</body>
</html>