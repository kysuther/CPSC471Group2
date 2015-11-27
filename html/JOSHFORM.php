<?php
	include("header.php");
	echo '<br />';
	echo '<br />';
	echo '<br />';

	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}


	$Artist_name = mysqli_real_escape_string($link, $_POST['artistName']);
	$ArtistWebpage = mysqli_real_escape_string($link, $_POST['webpage']);
	$song_name = mysqli_real_escape_string($link, $_POST['songName']);
	$song_length = mysqli_real_escape_string($link,$_POST['songlength']);
	$genre = mysqli_real_escape_string($link,$_POST['Genre']);

	
	if($sql = "SELECT * FROM `artists` WHERE `name` = '$Artist_name'";)
	{
		// If the artist name is the same then we want to find the matching artistID in Song
	}
	
	
	
	$sql = "INSERT IGNORE INTO artists (name,webpage)
	VALUES('$Artist_name', '$ArtistWebpage')";
	if(mysqli_query($link, $sql))
	{
		//echo "Insert was sucessful!";
	}
	else
	{
		echo "ERROR: Could not execute $sql." . mysqli_error($link);
	}

	$sql = "INSERT INTO song (name,genre,Length)
	VALUES('$song_name', '$genre', '$song_length')";
	if(mysqli_query($link, $sql))
	{
		//echo "DOuble CUCEESS";
	}


	include("footer.php");
?>
