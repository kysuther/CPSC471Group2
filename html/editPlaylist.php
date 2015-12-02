<?php (include "header.php");
(include "requireslogin.php");

    $song = "SELECT *
            FROM song";
    $artist = "SELECT *
            FROM artists";

    if(($sresult = mysqli_query($link, $song)) && ($aresult = mysqli_query($link, $artist)))
    {
        if((mysqli_num_rows($sresult) > 0) && (mysqli_num_rows($aresult) > 0))
		{
            echo "<table cellpadding='10' border='4' style='width:40%;background-color:LimeGreen;float:right'>";
                echo "<tr>";
                    echo'<th style="font-size:225%">All Songs</th>';
                echo "</tr>";
                echo "<tr>";
                    echo'<td style="font-size:200%">Track</td>';
                    echo'<td style="font-size:200%">Artist</td>';
                echo"</tr>";
            while(($sRow = mysqli_fetch_array($sresult))&&($aRow = mysqli_fetch_array($aresult)))
			{
				echo "<tr>";
					echo '<td style="text-align:center;font-size:110%;">' . $sRow['songName']. "</td>";
                    echo '<td style="text-align:center;font-size:110%;">' . $aRow['name']. "</td>";
				echo "</tr>";
            }
            echo "</table>";

            mysqli_free_result($sresult);
            mysqli_free_result($aresult);
        }
        else
        {
            echo "No songs in the database yet";
        }

    }
    else
    {
        echo "ERROR: Could not execute $sql." . mysqli_error($link);
    }
?>

<html>
<form action="addSong.php?link=<?php echo $_GET['link'];?>" method="post">
    <p>
    	<label for="addSong">Name Of Song To Add To Playlist:</label>
        <input type="text" name="addSong" id="addSong">
    </p>

    <button type="submit" value="Add">Add</button>
</form>
<br/>
<form action="deleteSong.php?link=<?php echo $_GET['link'];?>" method="post">
    <p>
    <label for="delSong">Name Of Song To Delete From Playlist:</label>
        <input type="text" name="delSong" id="delSong">
    </p>
    <button type="submit" value="Delete">Delete</button>
</form>
<br/>
<form action="renamePlaylist.php?link=<?php echo $_GET['link'];?>" method="post">
    <p>
    <label for="Rename">Change Playlist Name To:</label>
        <input type="text" name="Rename" id="Rename">
    </p>
    <button type="submit" value="Rename">Rename</button>
</form>
<br/>
<br/>
<br/>
<p><a href=playlists.php>Return To Playlists</a></p>
</html>

<?php (include "footer.php")?>