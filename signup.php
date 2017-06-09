<?php
	include 'header.php';
?>
	<form action = "signup.inc.php" method ="POST">
		<input type="text" name="first" placeholder="Firstname"><br>
		<input type="text" name="last" placeholder="Lastname"><br>
		<input type = "text" name="uid" placeholder="Username"><br>
		<input type = "password" name="pwd" placeholder="Password"><br>
		<button type="submit">SIGN UP</button>
	</form>
	<?php
		if(isset($_SESSION['id'])){
			echo $_SESSION['id'];
		}
		else{
			echo "You are not logged in";
		}
	?>
	<form action="logout.inc.php">
		<button>Log Out</button>
	</form>
	</body>
	</html>