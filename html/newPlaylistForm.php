<?php (include "requireslogin.php");
(include "header.php");?>
<form action="newPlaylist.php" method="post">
    <p style="font-size:150%">
    	<label for="Name">Name of Playlist:</label>
        <input type="text" name="Name" id="Name" style="width:200px;height:20px">
    </p>

    <button type="submit" value="Create" style="width:175px;Height:25px"><b>Create</b></button>
</form>
    <p style="font-size:150%;font-family:Helvetica;text-align:right"><div id="userbuttons" align="right"><a href="playlists.php"><i>Back To Playlists</i></a></div></p>
<?php (include "footer.php")?>