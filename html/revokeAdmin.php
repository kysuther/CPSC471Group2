<?php 
	include 'requiresadmin.php';
	include 'header.php';
	
	$UserID = mysqli_real_escape_string($link,$_GET['link']);
	$newStatus = "user";
	
	$sql = "UPDATE `user` SET `Type` = '$newStatus' WHERE userID = '$UserID'";
	
	$result = mysqli_query($link, $sql);
	
	if($result){
		echo "Status changed successfully!";
	}else{
		echo "Error in status change";
	}
	
	echo '<meta http-equiv="Refresh" content="2; url=../adminPage.php">';
	include 'footer.php';
?>