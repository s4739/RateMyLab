<?php

   //Data base connection settings
	date_default_timezone_set('America/New_York');
	ini_set('mysql.connection_timeout',300);
	ini_set('default_socket_timeout',300);

	$host = 'localhost';
	$user = 'root';
	$pass = 'Singapore47';
	$db = 'S_Wilson';
	$today = date("m/d/Y");
	$fileName = 'Archive_of_'.$today;
	$mustcheck = 0;

	$link = mysqli_connect($host,$user,$pass,$db);
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;		
	}
	?>

<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<title>Confirm Archive</title>
		<link rel="stylesheet" type="text/css" href="home.css">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<style>
		</style>
	</head>

	<body>
		<h1>Rate My Lab Purge</h1>
		    <div>
		            <body id='confirmation_view'>

						<h3 class="alert fade alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" id=instruct width="2000" height="1000"><?php echo 'Warning! You are about to Purge all data from the database :  ';
							echo $db ?></h3>
						<form method="post" action="Purge.php">
			            	<input class='checkbox' type="checkbox" id="archivecheck" name="archivecheck" value="yes">
			            	<button type="submit" class='btn btn-primary' id="archivesubmit" name="archivesubmit">Confirm</button>
			            </form>
						<a href='/../../index.html'><button class='btn btn-primary' id="gohome">
							Home
						</button></a>
					</body>


		    </div>
		    <div>
		            <body id='confirmation_view'>




		            </body>


		    </div>

	</body>
	   
</html>


