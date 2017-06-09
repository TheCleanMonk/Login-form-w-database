<?php
	session_start();

include 'db.php';
include 'header.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
// decrypt password

$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);

if($hash == 0){
	header("Location: ../fun.php?error=empty");
	exit();
}
else{
	//login user sql
	$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd'";
	$result = mysqli_query($conn,$sql);

	// register user sql
	// $sql = "INSERT INTO user (first,last,uid,pwd)
	// 		VALUES ('$first','$last','$uid','$pwd')";

	if(!$row = mysqli_fetch_assoc($result)){
		echo "Your username / password is incorrect";
	}
	else{
		$_SESSION['id'] = $row['id'];
		echo "Thanks for logging in " . $uid; 
	}
}
// header("Location: fun.php");