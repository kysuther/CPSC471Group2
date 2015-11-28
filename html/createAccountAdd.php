<?php
	include("header.php");
	echo '<br />';
	echo '<br />';
	echo '<br />';

	$first_name = mysqli_real_escape_string($link, $_POST['firstname']);
	$last_name = mysqli_real_escape_string($link, $_POST['lastname']);
	$email_address = mysqli_real_escape_string($link, $_POST['email']);
	$user_password = mysqli_real_escape_string($link,$_POST['password']);
	$user_passwdHash = password_hash($user_password, PASSWORD_DEFAULT);

	$sql = "INSERT INTO user (Fname,Lname,email,password,type)
	VALUES('$first_name', '$last_name', '$email_address','$user_passwdHash','user')";
	if(mysqli_query($link, $sql))
	{
		echo "<p>Account Created Successfully!</p>";
		echo "<p>Redirecting to homepage </p>";
		echo '<meta http-equiv="Refresh" content="2; url=../">';

	}
	else
	{
		echo "ERROR: Could not execute $sql." . mysqli_error($link);
	}
include("footer.php");
?>
