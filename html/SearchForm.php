<?php include("header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Search for Artist</title>
</head>
<body>
<form action="searchData.php" method="post">
	<p>
    	<label for="SearchField">Enter Name of Artist/Band or Album or Songs</label>
        <input type="text" name="SearchField" id="SearchField">
    </p>

	<input type="submit" value="Search">
</form>
</body>
</html>
<?php include("footer.php") ?>