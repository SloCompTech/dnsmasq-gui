<?php 
	session_start(); // Create session
?>
<!doctype html>
<html lang="en">
  	<head>
    	<?php require_once('partials/bootstrap_header.php'); ?>
		
		<link rel="stylesheet" href="index.css">

    	<title>Index</title>
	</head>
  	<body>
		<?php include_once('partials/bootstrap_body.php'); ?>
	
		<div class="container">
			<!-- Navbar -->
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" href="#">DNS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">DHCP</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">TFTP</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Settings</a>
				</li>
			</ul>
		</div>
  	</body>
</html>