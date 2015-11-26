<?php
	include("headerphp.php") ;
	$email_address = mysqli_real_escape_string($link,$_POST['email']);
	$user_password = mysqli_real_escape_string($link,$_POST['password']);

	$sql = "SELECT `email`, `password` FROM `user` WHERE email = '$email_address'";
	$result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)){
		$emailAddr = $row['email'];
		$password_hash = $row['password'];
	}
	$passRes = password_verify($user_password, $password_hash);
	if($passRes == true && $email_address == $emailAddr){
		echo "Login Successful!";
		$_SESSION['emailAddress'] = $emailAddr;
	}else{
		echo "Login Failed!";
	}

	include("footerphp.php");
?>
