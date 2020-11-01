<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="sign-up-form">
		<h1>Login</h1>

		<form method="post" action="login.php">
			<?php include("errors.php");?>

			<input type="text" class="inputboxes" name="username"placeholder="username" ><br>
			<input type="password" class="inputboxes" name="password"placeholder="password" ><br>
			<button type="submit" class="Submitbutton" name="login">Login</button>
			<p style="font-family: Trebuchet MS">
				Need a new account? <a href="register.php">Sign-up</a>
			<p>
		</form>

		<video autoplay  loop muted id="myVideo">
  				<source src="Plexus_Background_White.mp4" type="video/mp4">
		</video>
	</div>
</body>
</html>