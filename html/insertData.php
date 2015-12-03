<?php
	echo "<h1>Hello World</h1>";
	$link = mysqli_connect("localhost", "root", "jhong","CPSC471_MusicDatabase");
	
	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}
	
		
	$Artist_name = mysqli_real_escape_string($link, $_POST['artistName']);
	$ArtistWebpage = mysqli_real_escape_string($link, $_POST['webpage']);
	$song_name = mysqli_real_escape_string($link, $_POST['songName']);
	$song_length = mysqli_real_escape_string($link,$_POST['songlength']);
	$genre = mysqli_real_escape_string($link,$_POST['Genre']);
	$Album_name = mysqli_real_escape_string($link,$_POST['albumName']);
	$albumYear =  mysqli_real_escape_string($link,$_POST['albumYear']);
	$alNumOfTracks = mysqli_real_escape_string($link,$_POST['albumNumOfTracks']);
	
	
	// Checking if Artist name exists - We do not want duplicates for artist names. If 
	// The artist name doesn't exist then we insert it.
	// Only need to insert into the SONGs Table
	
	/*
		 This will insert the values into the Artists Table
	*/
	$sql = "INSERT INTO artists (name, webpage)
				SELECT * FROM (SELECT '$Artist_name', '$ArtistWebpage') AS tmp
				WHERE NOT EXISTS (
					SELECT name FROM artists WHERE name = '$Artist_name'
				) LIMIT 1";
	if(mysqli_query($link, $sql))
	{
		echo "Insert was sucessful!";
	}
	
	/*
		inserting values into song table
	*/
	$sql = "INSERT INTO song (songName, Length, genre)
				SELECT * FROM (SELECT '$song_name', '$song_length','$genre') AS tmp
				WHERE NOT EXISTS (
					SELECT songName FROM song WHERE songName = '$song_name'
				) LIMIT 1";
	if(mysqli_query($link, $sql))
	{
		echo "Insert was sucessful!";
	}
	
	/*
		Inserting values into album table 
	*/
	$sql = "INSERT INTO album (albumName, year, numTracks)
				SELECT * FROM (SELECT '$Album_name', '$albumYear','$alNumOfTracks') AS tmp
				WHERE NOT EXISTS (
					SELECT albumName FROM album WHERE albumName = '$Album_name'
				) LIMIT 1";
	if(mysqli_query($link, $sql))
	{
		echo "Insert was sucessful!";
	}
	
	mysqli_close($link);
    echo '<meta http-equiv="Refresh" content="1; url=../artistInsertForm.php">';
?>