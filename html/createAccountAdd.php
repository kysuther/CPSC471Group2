<?php
	echo "<h1>Hello World</h1>";
	$link = mysqli_connect("localhost", "root", "jhong","CPSC471_MusicDatabase");

	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}

	$first_name = mysqli_real_escape_string($link, $_POST['firstname']);
	$last_name = mysqli_real_escape_string($link, $_POST['lastname']);
	$email_address = mysqli_real_escape_string($link, $_POST['email']);
	$user_password = mysqli_real_escape_string($link,$_POST['password']);
	$user_passwdHash = password_hash($user_password, PASSWORD_DEFAULT);
	echo $user_passwdHash;

	$sql = "INSERT INTO user (Fname,Lname,email,password)
	VALUES('$first_name', '$last_name', '$email_address','$user_passwdHash')";
	if(mysqli_query($link, $sql))
	{
		echo "Insert was sucessful!";
	}
	else
	{
		echo "ERROR: Could not execute $sql." . mysqli_error($link);
	}


	mysqli_close($link);
?>
