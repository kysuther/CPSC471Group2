<?php (include "header.php");
(include "requireslogin.php")?>
<form action="newPlaylist.php" method="post">
    <p>
    	<label for="Name">Name of Playlist:</label>
        <input type="text" name="Name" id="Name">
    </p>

    <button type="submit" value="Create">Create</button>
</form>
<?php (include "footer.php")?>