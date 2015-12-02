<?php (include "header.php");
(include "requireslogin.php");
(include "music.php");?>

<html>
<form action="addSong.php" method="post">
    <p>
    	<label for="addSong">Name Of Song To Add To Playlist:</label>
        <input type="text" name="addSong" id="addSong">
    </p>

    <button type="submit" value="Add">Add</button>
</form>

<form action="deleteSong.php" method="post">
    <p>
    <label for="delSong">Name Of Song To Delete From Playlist:</label>
        <input type="text" name="delSong" id="delSong">
    </p>
    <button type="submit" value="Delete">Delete</button>
</form>

<form action="renamePlaylist.php" method="post">
    <p>
    <label for="Rename">Change Playlist Name To:</label>
        <input type="text" name="Rename" id="Rename">
    </p>
    <button type="submit" value="Rename">Rename</button>
</form>
</html>
<?php (include "footer.php")?>