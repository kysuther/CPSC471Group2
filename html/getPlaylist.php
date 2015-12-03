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
                echo "<th style='font-size:250%'><i>Songs in '$playlist_name'</i></th>";
            echo "</tr>";
            echo "<tr>";
                echo'<td style="font-size:200%;text-align:center"><b>Tracks</b></td>';
            echo"</tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
                echo '<td style="text-align:center;font-size:125%">' . $row['songName']. "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        mysqli_free_result($newResult);
    }
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<p style='font-size:150%;font-family:Helvetica;text-align:right'><a href='editPlaylist.php?link=" . $playlist_name . "'><i>Edit Playlist</i></a></p>";
    echo "<hr/>";
    echo "<p style='font-size:150%;font-family:Helvetica;text-align:right'><a href='playlists.php'><i>Back To Playlists</i></a></p>";

    include("footer.php");
?>
