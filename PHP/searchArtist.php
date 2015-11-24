<?php
	
	$link  = mysqli_connect("localhost", "root", "", "CPSC471_musicdatabase");

	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}
	
	$Artist_name = mysqli_real_escape_string($link, $_POST['Artist/Band']);
	
	//echo "$Artist_name";
	
	$sql = "SELECT * 
			FROM artists 
			WHERE name = '$Artist_name' ";
	if($result = mysqli_query($link, $sql))
	{
		if(mysqli_num_rows($result) > 0)
		{
			echo "EXITS!";
			echo "<table>";
				echo "<tr>";
					echo"<th>ArtistID</th>";
					echo"<th>name</th>";
					echo"<th>webpage</th>";
				echo"</tr>";
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
					echo "<td>" . $row['ArtistID']. "</td>";
					echo "<td>" . $row['name']. "</td>";
					echo "<td>" . $row['webpage']. "</td>";
				echo "</tr>";
					
			}
			echo "</table>";
			
			mysqli_free_result($result);
		}
		else
		{
			echo "No matching results";
		}
		
	}
	else
	{
		echo "ERROR: Could not execute $sql." . mysqli_error($link);
	}
	
	mysqli_close($link);

?>