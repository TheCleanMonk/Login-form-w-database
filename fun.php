<?php
	session_start();
	include 'header.php';
?>
	<!DOCTYPE html>
	<html>
	<head>
	<link rel="stylesheet" type="text/css" herf="/css/style.css">
	<meta charset= 'UTF-8'>
	</head>
	<body>
	<form action='login.php' method='POST'>
		<input type='text' name='uid' placeholder='Username'><br>
		<input type='Password' name='pwd' placeholder='Password'><br>
		<button type='submit'>Sign up</button>
	</form>
	<?php
		if(isset($_SESSION['id'])){
			echo $_SESSION['id'];
		}
		else{
			echo "You are not logged in";
		}
	?>
	<br><br><br>
	<form action = "logout.php">
		<button>LOG OUT</button>
	</form>
	</body>
	</html>