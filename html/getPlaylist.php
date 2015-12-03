<?php (include "requireslogin.php");
	include("header.php");

    #$playlist_name = the name of playlist clicked on in playlists.php
    $playlist_name = $_GET['link'];
                
    #get songs from said playlist            
    $songs = "SELECT s.songName
                    FROM song s, contain c
                    WHERE c.TID=s.trackID AND c.Pname='$playlist_name'";
            
    
    if($result = mysqli_query($link, $songs))
    {
        echo "<table cellpadding='10' border='4' style='width:25%;background-color:LimeGreen;'>";
            echo "<tr>";
                echo'<th style="font-size:200%">Track</th>';
            echo"</tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
                echo '<td style="text-align:center;">' . $row['songName']. "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        mysqli_free_result($newResult);
    }
    else
    {
        echo "first if fail";
    }
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo '<a href="editPlaylist.php?link=' . $playlist_name . '">Edit Playlist</a>';
    echo '<p style="text-align:right"><a href="playlists.php">Back To Playlists</a></p>';


    include("footer.php");
?>
