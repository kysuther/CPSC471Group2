<?php
	echo "<h1>Hello World</h1>";
	$link = mysqli_connect("localhost", "root", "jhong","CPSC471_MusicDatabase");

	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}

	$email_address = mysqli_real_escape_string($link,$_POST['email']);
	$user_password = mysqli_real_escape_string($link,$_POST['password']);

	$sql = "SELECT email, password FROM user WHERE Fname = 'Kyle'";
	$result = mysqli_query($link, $sql);
	while ($row = mysql_fetch_assoc($result)){
   	$emailAddr = $row['email'];
    	$password_hash = $row['password'];
  	}
	echo $emailAddr;

	mysqli_close($link);
?>
