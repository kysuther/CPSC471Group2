<?php
	session_start();

	//Prevents session fixation by regenerating an ID for new sessions
	//and generating a new session ID for sessions lasting over 30 minutes
	if (!isset($_SESSION['initiated'])){
		session_regenerate_id(true);
		$_SESSION['initiated'] = true;
		$_SESSION['accessLevel'] = 'Guest';
		$_SESSION['lastSESSIDUpdate'] = time();
	}else if((time() - $_SESSION['lastSESSIDUpdate']) > 1800){
		session_regenerate_id(true);	//Create new session ID and delete the old one
		$_SESSION['lastSESSIDUpdate'] = time();
	}

	//Deletes session if there has been no activity from the session in 30 minutes
	//(updates last activity session variable if there is activity)
	if(isset($_SESSION['lastActivity']) && (time() - $_SESSION['lastActivity'] > 1800)){
		session_destroy();
	}$_SESSION['lastActivity'] = time();

	$link = mysqli_connect("localhost", "root", "jhong","CPSC471_MusicDatabase");

	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}
	
	if(isset($_SESSION['emailAddress'])){
		$email = $_SESSION['emailAddress'];
		$sql = "SELECT `type` FROM `user` WHERE email = '$email'";
		$result = mysqli_query($link, $sql);
		while($row = mysqli_fetch_array($result)){
			$_SESSION['accessLevel'] = $row['type'];
		}
	}
	
	if($requiresLogin and (!(isset($_SESSION['emailAddress'])))){
		header('Location: index.php');
		exit;
	}if($requiresAdmin and ($_SESSION['accessLevel'] != 'admin')){
		header('Location: index.php');
		exit;
	}

?>
