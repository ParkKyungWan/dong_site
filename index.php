<!DOCTYPE html>
<meta charset="utf-8" />
<?php
session_start();
if(!isset($_SESSION['user_email'])) {
	header('Location: ./login.html');
	exit;
}else{
	$email = $_SESSION['user_email'];
	//echo "<p>안녕하세요.".$email."님</p>";
	//echo "<p><a href='logout.php'>로그아웃</a></p>";
	header('Location: ./dong/index.php');
	exit;
}
?>