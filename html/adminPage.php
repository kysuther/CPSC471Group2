<?php
	include 'requiresadmin.php';
	include 'requireslogin.php';
	include 'header.php';
?>
<h1>Administration Page</h1>
<?php 
	$sql = 'SELECT * FROM user';
	$result = mysqli_query($link, $sql);
	if($result){
		if(mysqli_num_rows($result) > 0){
			echo "<table cellpadding='10' border='4' style='width:50%;background-color:White;'>";
			echo "<tr>";
			echo'<th style="font-size:100%">User ID</th>';
			echo'<th style="font-size:100%">Email Address</th>';
			echo'<th style="font-size:100%">First Name</th>';
			echo'<th style="font-size:100%">Last Name</th>';
			echo'<th style="font-size:100%">Access Level</th>';
			echo'<th style="font-size:100%">Edit User</th>';
			echo"</tr>";
			
			while($row = mysqli_fetch_array($result)){
				echo '<tr>';
				echo '<td style="text-align:center;font-size:100%;">' . $row['userID']. "</td>";
				echo '<td style="text-align:center;font-size:100%;">' . $row['email']. "</td>";
				echo '<td style="text-align:center;font-size:100%;">' . $row['Fname']. "</td>";
				echo '<td style="text-align:center;font-size:100%;">' . $row['Lname']. "</td>";
				echo '<td style="text-align:center;font-size:100%;">' . $row['Type']. "</td>";
				echo '<td style="text-align:center;font-size:100%;"><div id="userbuttons"><a href="/"><b>Edit</b></a></div></td>';
				echo '</tr>';
			}
			
		}else{
			echo '<p>Could Not Load Users!</p>';
		}
	}

?>




<?php include 'footer.php' ?>