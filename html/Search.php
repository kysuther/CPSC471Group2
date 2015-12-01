<?php
	
	$link  = mysqli_connect("localhost", "root", "jhong", "CPSC471_MusicDatabase");

	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}
	
	$search_field = mysqli_real_escape_string($link, $_POST['SearchField']);
	
	//echo "$search_field";
	
	//Artists that matches the Seacrch field 
	$sql = "SELECT A.name, A.webpage,B.albumName,S.songName, S.length,S.genre
			FROM Artists AS A, song AS S, album AS B
			WHERE A.name = '$search_field' AND A.ArtistID = S.AID AND B.AID = A.ArtistID ";
	
	//Songs that mathes the search field 
	$sql2 = "SELECT A.name,S.songName, S.length,S.genre
			FROM Artists AS A, song AS S
			WHERE S.songName = '$search_field' AND A.ArtistID = S.AID";
	
	// Albums that matches the search field 
	$sql3 = "SELECT B.albumName, B.numTracks, B.year
			FROM album AS B
			WHERE B.albumName = '$search_field'";
	
	//Branch for checking Artists that match with the search field
	if($result = mysqli_query($link, $sql))
	{
		if(mysqli_num_rows($result) > 0)
		{
			echo "<table>";
				echo "Artists containing $search_field";
				echo "<tr>";
					echo"<th>ARTIST NAME:</th>";
					echo"<th>webpage:</th>";
					echo"<th>Albums:</th>";
					echo"<th>\tList of Songs:</th>";
					echo"<th>\tSong Length:</th>";
					echo"\t";
					echo"<th>Genre:</th>";
				echo"</tr>";

				
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
					echo "<td>" . $row['name']. "</td>";
					echo "<td>" . $row['webpage']. "</td>";	
					echo "<td>" . $row['albumName']. "</td>";								
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
			echo nl2br ("No matching artists for '$search_field'\n");
			echo "<br/>"
		}
		
	}
	else
	{
		echo "ERROR: Could not execute $sql." . mysqli_error($link);
	}
	
	//Branch for checking Songs that macth with the search field 
	if($result = mysqli_query($link, $sql2))
	{
		echo nl2br ("  ");
		if(mysqli_num_rows($result) > 0)
		{
			echo "<table>";
				echo "Songs containing '$search_field'";
				echo "<tr>";
					echo"<th>SONG NAME:</th>";
					echo"<th>Artist/Band:</th>";
					echo"<th>\tSong Length:</th>";
					echo"<th>Genre:</th>";
				echo"</tr>";

				
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";						
					echo "<td>" . $row['songName']. "</td>";
					echo "<td>" . $row['name']. "</td>";					
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
			echo nl2br ("No matching songs for '$search_field'\n");
			echo nl2br ("  ");
		}
		
	}
	else
	{
	

		echo "ERROR: Could not execute $sql." . mysqli_error($link);
	}
	
	//Branch for checking albums that macth with the search field 
	if($result = mysqli_query($link, $sql3))
	{
		echo nl2br ("  ");
		if(mysqli_num_rows($result) > 0)
		{
			echo "<table>";
				echo "Albums containing '$search_field'";
				echo "<tr>";
					echo"<th>Album Name:</th>";
					echo"<th>Number of Tracks:</th>";
					echo"<th>\tYear</th>";
				echo"</tr>";

				
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";						
					echo "<td>" . $row['albumName']. "</td>";
					echo "<td>" . $row['numTracks']. "</td>";					
					echo "<td>" . $row['year']. "</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "\n";
			
			mysqli_free_result($result);
		}
		else
		{
			echo nl2br ("No matching Albums for '$search_field'\n");
			echo nl2br ("  ");
		}
		
	}
	else
	{
	

		echo "ERROR: Could not execute $sql." . mysqli_error($link);
	}
	
	
	mysqli_close($link);

?>