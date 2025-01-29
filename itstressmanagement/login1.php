<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

require("db.php");

$result = mysqli_query($con, "SELECT * FROM users WHERE uname='$username' AND pswd='$password'");
if(mysqli_num_rows($result)){
	$res = mysqli_fetch_array($result);
	$_SESSION['username'] = $res['username'];
	header("location: chatbox.php?username=$username");
}else{
	$message = "No username found !";
	header("location: chatbox.php?message=$message");
	}
	
	
	
?>