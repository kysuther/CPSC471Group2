<?php

	$link = mysqli_connect("localhost", "root", "", "CPSC471_musicdatabase");

	if($link === false)
	{
		die("ERROR: could not connect" . mysqli_connect_error());
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS Artists(ArtistID INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
			name CHAR(255) NOT NULL, webpage VARCHAR(255), CollabArtistID INT(5) NOT NULL)";
	if(mysqli_query($link, $sql))
	{
		//echo nl2br ("Table Artists successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS Band(ArtistID INT(5) NOT NULL, numOfMembers INT(100) NOT NULL,
			FOREIGN KEY(ArtistID) REFERENCES Artists(ArtistID), PRIMARY KEY(ArtistID))";
	if(mysqli_query($link, $sql))
	{
		echo nl2br ("Table Band successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS Solo(ArtistID INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
			FOREIGN KEY(ArtistID) REFERENCES Artists(ArtistID))";
	if(mysqli_query($link, $sql))
	{
		echo nl2br ("Table Solo successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS user(userID INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT, Fname CHAR(255) NOT NULL, 
			Lname CHAR(255) NOT NULL, email VARCHAR(255) NULL, password VARCHAR(255) NOT NULL, 
			guest CHAR(1), admin CHAR(1), registered CHAR(1),
			TID INT(5) NOT NULL, 
			AID INT(5) NOT NULL, ALID INT(5))";
	if(mysqli_query($link, $sql))
	{
		echo nl2br ("Table user successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	/*
		Sample will be set to CHAR for now and NULL as a place holder until we figure out what to do with it
	*/
	$sql = "CREATE TABLE IF NOT EXISTS song(trackID INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
			sample CHAR(255) NULL, name CHAR(255) NOT NULL, 
			genre VARCHAR(255) NOT NULL, Length VARCHAR(255) NOT NULL, 
			remixTrackNo INT(5), uid INT(5))";
	if(mysqli_query($link, $sql))
	{
		echo nl2br ("Table song successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	
	$sql = "CREATE TABLE IF NOT EXISTS playlist(name VARCHAR(255) NOT NULL, uid INT(5) NOT NULL, numOfTracks INT(100) NOT NULL, 
			private CHAR(4) NOT NULL, public CHAR(4) NOT NULL, TID INT(5) NOT NULL,
			FOREIGN KEY(UID) REFERENCES user(userID), 
			FOREIGN KEY(TID) REFERENCES song(trackID),
			PRIMARY KEY(name,UID,TID))";
	if(mysqli_query($link, $sql))
	{
		echo nl2br ("Table playlist successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS Album(albumID INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
			name VARCHAR(255) NOT NULL, year INT(4) NOT NULL, numTracks INT(100) NOT NULL)";
	if(mysqli_query($link, $sql))
	{
		echo nl2br ("Table Album successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS RecordingStudio(postalCode VARCHAR(6) NOT NULL PRIMARY KEY, name VARCHAR(255) NOT NULL, 
			CEO VARCHAR(255) NULL,streetNo INT(5) NOT NULL, streetName VARCHAR(255) NOT NULL)";
	if(mysqli_query($link, $sql))
	{
		echo nl2br ("Table Recording Studio successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS Contain(TID INT(5) NOT NULL, Pname VARCHAR(255) NOT NULL, PUID INT(5) NULL,
			FOREIGN KEY(TID) REFERENCES song(trackID), 
			FOREIGN KEY(Pname) REFERENCES playlist(name), 
			FOREIGN KEY(PUID) REFERENCES playlist(uid),
			PRIMARY KEY(TID,Pname,PUID))";
	if(mysqli_query($link, $sql))
	{
		echo nl2br ("Table Contains successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS MadeOf(TID INT(5) NOT NULL, ALID INT(5) NULL,
			FOREIGN KEY(TID) REFERENCES song(trackID),
			FOREIGN KEY(ALID) REFERENCES Album(albumID),
			PRIMARY KEY(TID,ALID))";
	if(mysqli_query($link, $sql))
	{
		echo nl2br ("Table madeOf successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	
	$sql = "CREATE TABLE IF NOT EXISTS Releases(AID INT(5) NOT NULL, ALID INT(5) NOT NULL,
			FOREIGN KEY(ALID) REFERENCES Album(albumID),
			FOREIGN KEY(AID) REFERENCES Artists(ArtistID),
			PRIMARY KEY(AID,ALID))";
	if(mysqli_query($link, $sql))
	{
		echo nl2br ("Table Releases successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	
	$sql = "CREATE TABLE IF NOT EXISTS performs(AID INT(5) NOT NULL, TID INT(5) NOT NULL,
			FOREIGN KEY(TID) REFERENCES song(trackID),
			FOREIGN KEY(AID) REFERENCES Artists(ArtistID),
			PRIMARY KEY(AID,TID))";
	if(mysqli_query($link, $sql))
	{
		echo nl2br ("Table performs successfully created!\n");
	}
	else
	{
		echo "ERROR: not able to execute $sql".mysqli_error($link);
	}
	
	
	
	
	
	

	
	mysqli_close($link);


	
	


?>