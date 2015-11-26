<?php
include("headerphp.php");

	$first_name = mysqli_real_escape_string($link, $_POST['firstname']);
	$last_name = mysqli_real_escape_string($link, $_POST['lastname']);
	$email_address = mysqli_real_escape_string($link, $_POST['email']);
	$user_password = mysqli_real_escape_string($link,$_POST['password']);
	$user_passwdHash = password_hash($user_password, PASSWORD_DEFAULT);

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
include("footerphp.php");
?>
