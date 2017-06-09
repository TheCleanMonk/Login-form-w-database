<?php
	session_start();
	include 'header.php';
?>
	<!DOCTYPE html>
	<html>
	<head>
	
	<meta charset= 'UTF-8'>
	</head>
	<body>
	<form id = "loginForm" action='login.php' method='POST'>
		<div class="form-group">
		<label for="username">Username</label>
		<input class="form-control" type='text' name='uid' placeholder='Username'><br>
		</div>
		<div class = "form-group">
		<label for="password">Password</label>
		<input class="form-control" type='Password' name='pwd' placeholder='Password'><br>
		<button class="btn btn-default" type='submit'>Sign In</button>
		</div>
	</form>

	<br><br><br>
	<form action = "logout.php">
	<?php
	if(!isset($_SESSION['id'])){
	}
	else{
		echo "<button class='btn btn-default'>LOG OUT</button>";
	}
	?>
	</form>
	</body>
	</html>