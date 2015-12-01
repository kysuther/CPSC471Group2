<?php include("header.php");
	echo '<br />';
	echo '<br />';
	echo '<br />';
	if(isset($_SESSION['emailAddress'])){
		$email_address = $_SESSION['emailAddress'];
		$currPass = mysqli_real_escape_string($link,$_POST['currPass']);
		$newPass = mysqli_real_escape_string($link,$_POST['newPass']);
		$newPassConf = mysqli_real_escape_string($link,$_POST['newPassConf']);
		echo 'test';
		
		if($newPass == $newPassConf){
			
		}else{
			echo '<p>New passwords do not match, please try again</p>';
			echo '<meta http-equiv="Refresh" content="2; url=../changePassForm.php">';
		}
	}else{
		echo '<p>Please log in!</p>';
		echo '<meta http-equiv="Refresh" content="2; url=../loginPage.php">';
	}

include('footer.php') ?>