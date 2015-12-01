<?php include("header.php");
	echo '<br />';
	echo '<br />';
	echo '<br />';
	if(isset($_SESSION['emailAddress'])){
		$email_address = $_SESSION['emailAddress'];
		$currPass = mysqli_real_escape_string($link,$_POST['currPass']);
		$newPass = mysqli_real_escape_string($link,$_POST['newPass']);
		$newPassConf = mysqli_real_escape_string($link,$_POST['newPassConf']);
		
		if($newPass == $newPassConf){
			$sql = "SELECT `password` FROM `user` WHERE email = '$email_address'";
			$result = mysqli_query($link, $sql);
			while($row = mysqli_fetch_array($result)){
				$password_hash = $row['password'];
			}
			$passRes = password_verify($currPass, $password_hash);
			if($passRes){
				$newPassHash = password_hash($newPass, PASSWORD_DEFAULT);
				$sql = "UPDATE `user` SET `password` = '$newPassHash' WHERE email = '$email_address'";
				$result = mysqli_query($link, $sql);
				
				if(!$result){
					echo '<p>Password change failed for unknown reason, please try again</p>';
					echo '<meta http-equiv="Refresh" content="2; url=../changePassForm.php">';
				}else{
					echo '<p>Password Changed Successfully!</p>';
					echo '<meta http-equiv="Refresh" content="2; url=../">';
				}
			}else{
				echo '<p>Current password incorrect, please try again</p>';
				echo '<meta http-equiv="Refresh" content="2; url=../changePassForm.php">';
			}
			
		}else{
			echo '<p>New passwords do not match, please try again</p>';
			echo '<meta http-equiv="Refresh" content="2; url=../changePassForm.php">';
		}
	}else{
		echo '<p>Please log in!</p>';
		echo '<meta http-equiv="Refresh" content="2; url=../loginPage.php">';
	}

include('footer.php') ?>