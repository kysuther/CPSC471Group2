<?php
	include("header.php");
	echo '<br />';
	echo '<br />';
	echo '<br />';
	$email_address = mysqli_real_escape_string($link,$_POST['email']);
	$user_password = mysqli_real_escape_string($link,$_POST['password']);

	$sql = "SELECT `userID`, `email`, `password`, `Fname`, `Lname`, `type` FROM `user` WHERE email = '$email_address'";
	$result = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($result)){
		$emailAddr = $row['email'];
		$password_hash = $row['password'];
		$user_type = $row['type'];
		$userID = $row['userID'];
		$userFname = $row['Fname'];
		$userLname = $row['Lname'];
	}
	$passRes = password_verify($user_password, $password_hash);
	if($passRes == true && $email_address == $emailAddr){
		echo "Login Successful!";
		session_regenerate_id(true);
		$_SESSION['emailAddress'] = $emailAddr;
		$_SESSION['userID'] = $userID;
		$_SESSION['userFname'] = $userFname;
		$_SESSION['userLname'] = $userLname;
		$_SESSION['accessLevel'] = $user_type;
		$_SESSION['lastSESSIDUpdate'] = time();
	}else{
		echo "Login Failed!";
	}echo "<p>Redirecting to homepage </p>";
	echo '<meta http-equiv="Refresh" content="2; url=../">';

	include("footer.php");
?>
