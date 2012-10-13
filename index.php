<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Congres</title>
		<meta name="description" content="" />
		<meta name="author" content="Moh" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	</head>

	<body>
		<div id="container">
			<!--<header id="big_header">
				
			</header>
			
			<nav id="top_menu">
				
			</nav>-->

			<div id="content">
				<div class="clear">&nbsp;</div>
				<?php
					include_once('pages/db.php');
					if(isset($_GET['r'])&&($_GET['r']!="")){
						$file = 'pages/'.$_GET['r'].'php';
						if(file_exists($file)){
							require($file);
						}else{
							require('pages/404.php');
						}
					}else{
						require('pages/scan.php');
					}
				?>
			</div>

			<!--<footer id="footer">
				&copy; Moh
			</footer>-->
		</div>
	</body>
</html>
