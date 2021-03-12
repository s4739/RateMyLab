<?php

   //Data base connection settings
	date_default_timezone_set('America/New_York');
	ini_set('mysql.connection_timeout',300);
	ini_set('default_socket_timeout',300);

	$host = 'localhost';
	$user = 'root';
	$pass = 'Singapore47';
	$db = 'RateMyLab_new';
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
		  h4{ display: none;}
		</style>
	</head>

	<body>
		<h1>Rate My Lab Archive</h1>
		    <div>
		            <body id='confirmation_view'>

						<h3 id=instruct width="2000" height="1000"><?php echo 'For archiving, please check the checkbox and click confirm to proceed with the creation of an archive for the date of :  ';
							echo $today ?></h3>
						<form method="post" action="archive.php">
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


