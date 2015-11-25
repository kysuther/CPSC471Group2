<?php
	echo "<h1>Hello World</h1>";
	$link = mysqli_connect("localhost", "root", "jhong","CPSC471_MusicDatabase");

	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}

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
	}else
		echo "Login Failed!";

	mysqli_close($link);
?>
