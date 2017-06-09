<?php
	session_start();

include 'db.php';
include 'header.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

//login user sql
$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

// register user sql
// $sql = "INSERT INTO user (first,last,uid,pwd)
// 		VALUES ('$first','$last','$uid','$pwd')";

if(!$row = $result->fetch_assoc()){
	echo "Your username / password is incorrect";
}
else{
	$_SESSION['id'] = $row['id'];
	echo "Thanks for logging in " . $uid; 
}

// header("Location: fun.php");