<?php

   //Data base connection settings
	date_default_timezone_set('America/New_York');
	ini_set('mysql.connection_timeout',300);
	ini_set('default_socket_timeout',300);

	$host = 'localhost';
	$user = 'root';
	$pass = 'Singapore47';
	$db = 'S_Wilson';

	$link = mysqli_connect($host,$user,$pass,$db);
	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	}

		$trunc = "TRUNCATE TABLE Full_Sandwiches";
		$result = mysqli_query($link, $trunc);
		$trunc = "TRUNCATE TABLE Sauce";
		$result = mysqli_query($link, $trunc);
		$trunc = "TRUNCATE TABLE Meats_Substitutes";
		$result = mysqli_query($link, $trunc);

?>
<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<title>Archive</title>
		<link rel="stylesheet" type="text/css" href="home.css">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<style>
		  h4{ display: none;}
		</style>
	</head>

	<body>
		<h1>Rate My Lab Archive</h1>
		    <div>
		            <body id='Psuccess'>

						<h3 class="warn" id=Pmessage width="2000" height="1000"><?php echo 'ALL data has been purged from the database :';
							echo $db ?></h3>
						<a href='/../../index.html'><button class='btn btn-primary' id="gohome">
							Home
						</button></a>
						</body>


		    </div>

	</body>
	   
</html>


