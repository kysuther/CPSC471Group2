<?php
$link = mysqli_connect("localhost", "root", "jhong","CPSC471_MusicDatabase");

	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}

?>
