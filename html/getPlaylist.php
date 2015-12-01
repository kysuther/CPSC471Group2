<?php
	include("header.php");
	echo '<br />';
	echo '<br />';
	echo '<br />';

    #personal testing link
    // $link = mysqli_connect("localhost", "root", "", "cpsc471_musicdatabase.sql");
    
	if($link === false)
	{
		die("ERROR: could not connect. " . mysqli_connect_error());
	}

    #$playlist_name = the name of playlist clicked on in playlists.php
    $playlist_name = $_GET['link'];
                
    #get songs from said playlist            
    $songs = "SELECT s.name
                    FROM song s, contain c
                    WHERE c.TID=s.trackID AND c.Pname='$playlist_name'";
            
    // echo "done selecting";
    #if trackID = TID, print
    
    if($nResult = mysqli_query($link, $songs))
    {
        // echo "first test is good";
            echo "<table>";
                echo "<tr>";
                    echo'<th style="font-size:200%">Track</th>';
                    // echo'<th style="font-size:200%">Artist</th>';
                echo"</tr>";
            while($list = mysqli_fetch_array($nResult))
            {
                echo "<tr>";
                    echo '<td style="text-align:center;">' . $list['name']. "</td>";
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


    include("footer.php");
?>
