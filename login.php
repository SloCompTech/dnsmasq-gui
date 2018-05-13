<?php 

?>
<!doctype html>
<html lang="en">
	<head>
		<?php include_once('partials/bootstrap_header.php'); ?>
		
		<link rel="stylesheet" href="login.css">

		<title>Login</title>
	</head>
	<body>
		<?php include_once('partials/bootstrap_body.php'); ?>
	
		<div class="container text-center">
			<form class="form-signin">
				<img class="mb-4" src="img/logo.png" alt="" width="72" height="72">
				<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
				<label for="inputUsername" class="sr-only">Username</label>
				<input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Remember me
					</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				<p class="mt-5 mb-3 text-muted">&copy; 2018-<?php echo date('Y'); ?> A&M Group</p>
			</form>
		</div>
	
	</body>
</html>