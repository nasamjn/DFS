<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>

	<link rel="stylesheet" type="text/css" href="style.css">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="school2.jpg" class="body_deg">

	<center>
		

		<div class="form_deg">

			<center class="title_deg">
				Login Form

				
			</center>
			
			<form action="login_check.php" method="POST" class="login_form">
				
				<div>
					<label class="label_deg">Username</label><br>
					<input type="text" name="username" placeholder="Please Enter Your Username">
				</div>

				<div>
					<label class="label_deg">Password</label><br>
					<input type="Password" name="password" placeholder="Please Enter Your Password">
				</div>

				<div>

					<br>
					
					<input class="btn btn-primary" type="submit" name="submit" value="Login">
				</div>

			</form>
				<h4>
	
					<?php 

					error_reporting(0);
					session_start();
					session_destroy();
			
				echo $_SESSION['loginMessage'];
			

					?>

				</h4>

		</div>

	</center>

</body>
</html>



