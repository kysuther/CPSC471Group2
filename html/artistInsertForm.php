<?php include("header.php") ?>
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
</head>
<br />
<br />
<br />
<body>
<form action="JOSHFORM.php" method="post">
	<p>
    	<label for="artistName">Artist Name:</label>
        <input type="text" name="artistName" id="artistName">
    </p>
    <p>
    	<label for="webpage">ArtistWebpage:</label>
        <input type="text" name="webpage" id="webpage">
    </p>

	<p>
    	<label for="songName">Song Name:</label>
        <input type="text" name="songName" id="songName">
    </p>

	<p>
    	<label for="songlength">Song Length:</label>
        <input type="text" name="songlength" id="songlength">
    </p>

	<p>
    	<label for="Genre">Genre:</label>
        <input type="text" name="Genre" id="Genre">
    </p>

	<p>
    	<label for="albumName">Album Name:</label>
        <input type="text" name="albumName" id="albumName">
    </p>




    <input type="submit" value="REGISTER">
</form>
</body>
<?php include("footer.php") ?>
