<?php (include "requireslogin.php");
(include "header.php");

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
                    echo'<td colspan="2" style="font-size:225%;text-align:center">All Songs</td>';
                echo "</tr>";
                echo "<tr>";
                    echo'<td style="font-size:200%;text-align:center">Track</td>';
                    echo'<td style="font-size:200%;text-align:center">Artist</td>';
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
    <p style="font-size:150%">
    	<label for="addSong">Name Of Song To Add To Playlist:</label>
        <input type="text" name="addSong" id="addSong" style="width:200px;height:20px">
    </p>

    <button type="submit" value="Add" style="width:150px"><b>Add</b></button>
</form>

<form action="deleteSong.php?link=<?php echo $_GET['link'];?>" method="post">
    <p style="font-size:150%">
    <label for="delSong">Name Of Song To Delete From Playlist:</label>
        <input type="text" name="delSong" id="delSong" style="width:200px;height:20px">
    </p>
    <button type="submit" value="Delete" style="width:150px"><b>Delete</b></button>
</form>
<br/>
<br/>
<br/>
<br/>
<br/>

<form action="deletePlaylist.php?link=<?php echo $_GET['link'];?>" method="post">
    <button type="submit" value="delPlaylist" style="width:150px"><b>Delete Playlist</b></button>
</form>

<br/>
<br/>
<br/>
<p style="font-size:150%"><i><a href=playlists.php>Return To Playlists</i></a></p>
</html>

<?php (include "footer.php")?>