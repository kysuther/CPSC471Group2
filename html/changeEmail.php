<?php include("header.php");
	if(isset($_SESSION['emailAddress'])){
		$email_address = $_SESSION['emailAddress'];
		$newEmail = mysqli_real_escape_string($link,$_POST['newEmail']);
		$currPass = mysqli_real_escape_string($link,$_POST['currPass']);
		
		$sql = "SELECT `password` FROM `user` WHERE email = '$email_address'";
		$result = mysqli_query($link, $sql);
		while($row = mysqli_fetch_array($result)){
			$password_hash = $row['password'];
		}
		$passRes = password_verify($currPass, $password_hash);
		if($passRes){
			$sql = "UPDATE `user` SET `email` = '$newEmail' WHERE email = '$email_address'";
			$result = mysqli_query($link, $sql);
			
			if(!$result){
				echo '<p>Email change failed for unknown reason, please try again</p>';
				echo '<meta http-equiv="Refresh" content="2; url=../changeEmailForm.php">';
			}else{
				$_SESSION['emailAddress'] = $newEmail;
				echo '<p>Email Changed Successfully!</p>';
				echo '<meta http-equiv="Refresh" content="2; url=../">';
			}
		}else{
			echo '<p>Current password incorrect, please try again</p>';
			echo '<meta http-equiv="Refresh" content="2; url=../changeEmailForm.php">';
		}
	}else{
		echo '<p>Please log in!</p>';
		echo '<meta http-equiv="Refresh" content="2; url=../loginPage.php">';
	}

include('footer.php') ?>