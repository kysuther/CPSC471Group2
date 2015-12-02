<?php
	
	include("header.php");
	
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
		//echo "Insert was sucessful!";
	}
	

	/*
		inserting values into song table
	*/
	$sql = "INSERT INTO song (name, length, genre)
				SELECT * FROM (SELECT '$song_name', '$song_length','$genre') AS tmp
				WHERE NOT EXISTS (
					SELECT name FROM song WHERE name = '$song_name'
				) LIMIT 1";
	if(mysqli_query($link, $sql))
	{
		//echo "Insert was sucessful!";
	}
	
	/*
		Inserting values into album table 
	*/
	$sql = "INSERT INTO album (name, year, numTracks)
				SELECT * FROM (SELECT '$Album_name', '$albumYear','$alNumOfTracks') AS tmp
				WHERE NOT EXISTS (
					SELECT name FROM album WHERE name = '$Album_name'
				) LIMIT 1";
	if(mysqli_query($link, $sql))
	{
		//echo "Insert was sucessful!";
	}
	
?>
