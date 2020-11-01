<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="sign-up-form">
		<h1>Sign up</h1>

		<form method="post" action="register.php">
			<?php include("errors.php"); ?>

			<input type="text" class="inputboxes" name="username"placeholder="Fullname" value="<?php echo $username; ?>"> <br>
			<input type="text" class="inputboxes" name="email"  placeholder="email" value="<?php echo $email; ?>" ><br>
			<input type="tel" class="inputboxes" name="mobile_number" placeholder="mobile_number"  ><br>
			<input type="password" class="inputboxes" name="password" placeholder="password"  ><br>
			<input type="password" class="inputboxes" name="retype-password" placeholder="retype-password" ><br>
			<button type="submit" class="Submitbutton" name="submit">submit</button>
			<p style="font-family: Trebuchet MS">
				 <a href="login.php">Login</a>
			</p>
		</form>
		<video autoplay  loop muted id="myVideo">
  				<source src="Plexus_Background_White.mp4" type="video/mp4">
		</video>
	</div>
</body>
</html>

