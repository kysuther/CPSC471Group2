<?php
	echo "<h1>Hello World</h1>";
	$link = mysqli_connect("localhost", "root", "jhong","CPSC471_MusicDatabase");
	
	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}
	
	// PHP code for creating a data base on phpMyAdmin
	/*
	$sql = "CREATE DATABASE phpDemo";
	if(mysqli_query($link, $sql))
	{
		echo "Database demo created successfully";
	}
	
	else 
	{
		echo "ERROR: could not execute $sql." . mysqli_error($link);
	} */
	
	
	// Sample could to create a new table in the phpDemo Database called "persons"
	/*
	$sql = "CREATE TABLE persons( person_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	first_name CHAR(30) NOT NULL, last_name CHAR(30) NOT NULL, email_address VARCHAR(50))";
	
	if (mysqli_query($link,$sql))
	{
		echo "Table persons created successfully!";
	}
	else 
	{
		echo "ERROR: Could not execute $sql." . mysqli_error($link);
	}*/
	
	// Sample code to insert an entry to the table persons
	/*
	$sql = "INSERT INTO persons(person_id, first_name, last_name,email_address) 
	VALUES (2,'Andrew', 'Dong', 'andrew@dong.com')";
	if(mysqli_query($link, $sql))
	{
		echo "Insert was sucessful!";
	}
	else
	{
		echo "ERROR: Could not execute $sql." . mysqli_error($link);
	}*/
		
	$first_name = mysqli_real_escape_string($link, $_POST['firstname']);
	$last_name = mysqli_real_escape_string($link, $_POST['lastname']);
	$email_address = mysqli_real_escape_string($link, $_POST['email']);
	$user_password = mysqli_real_escape_string($link,$_POST['password']);
	
	$sql = "INSERT INTO user (Fname,Lname,email,password)
	VALUES('$first_name', '$last_name', '$email_address','$user_password')";
	if(mysqli_query($link, $sql))
	{
		echo "Insert was sucessful!";
	}
	else
	{
		echo "ERROR: Could not execute $sql." . mysqli_error($link);
	}
	
	
	mysqli_close($link);
?>
