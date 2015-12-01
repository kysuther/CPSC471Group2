<?php
	
	$link  = mysqli_connect("localhost", "root", "", "CPSC471_musicdatabase");

	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}
	
	$Artist_name = mysqli_real_escape_string($link, $_POST['Artist/Band']);
	
	//echo "$Artist_name";
	
	$sql = "SELECT A.name,S.songName, S.length,S.genre
			FROM Artists AS A, song AS S
			WHERE A.name = '$Artist_name' AND A.ArtistID = S.AID ";
	
	if($result = mysqli_query($link, $sql))
	{
		if(mysqli_num_rows($result) > 0)
		{
			echo "<table>";
				echo "Results containing $Artist_name";
				echo "<tr>";
					//echo"<th>ArtistID</th>";
					echo"<th>ARTIST NAME:</th>";
					//echo"<th>webpage</th>";
					echo"<th>\tList of Songs:</th>";
					echo"<th>\tSong Length:</th>";
					echo"\t";
					echo"<th>Genre:</th>";
					
					
				echo"</tr>";
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
					echo "<td>" . $row['name']. "</td>";
					echo "<td>" . $row['songName']. "</td>";
					echo "<td>" . $row['length']. "</td>";
					echo "<td>" . $row['genre']. "</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "\n";
			
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