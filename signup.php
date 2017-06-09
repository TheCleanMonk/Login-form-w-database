<?php
	include 'header.php';
	session_start();

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	// echo $url;

	if(strpos($url, 'error=empty') !== false){
		echo "<p id='incompleteForm'>Please fill out all fields!</p>";
	}
	if(strpos($url, 'error=username') !== false){
		echo "<p id='incompleteForm'>Username already exists</p>";
	}
	if(isset($_SESSION['id'])){
		echo "<p class='pCenter'> You are already logged in!</p>";
	}
	else{
	echo "<form id = 'formBox' action = 'signup.inc.php' method ='POST'>
		<input class='form-control' type='text' name='first' placeholder='Firstname'><br>
		<input class='form-control' type='text' name='last' placeholder='Lastname'><br>
		<input class='form-control' type = 'text' name='uid' placeholder='Username'><br>
		<input class='form-control' type = 'password' name='pwd' placeholder='Password'><br>
		<button class='btn btn-default' type='submit'>SIGN UP</button>
	</form>
	</body>
	</html>";
}  
	?>