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
    
    #select said playlist
    $playlist = "SELECT *
                FROM playlist
                WHERE name = '$playlist_name'";
                
    #get songs from said playlist
    $songs = "SELECT *
            FROM song
            WHERE trackID IN
            (SELECT *
            FROM $playlist
            WHERE TID=trackID)";
            
     $artists = "SELECT *
                    FROM artists
                    WHERE EXISTS
                    (SELECT *
                    FROM $songs
                    WHERE ArtistID = AID)";
    echo "done selecting";
    
    if($newResult = mysqli_query($link, $playlist))
    {
        echo "got playlist";
        if($nResult = mysqli_query($link, $songs))
        {
            echo "first if";
            if(mysqli_num_rows($newResult) > 0)
            {
                echo "second if";
                echo "<table>";
                    echo "<tr>";
                        echo'<th style="font-size:200%">Track</th>';
                        echo'<th style="font-size:200%">Artist</th>';
                    echo"</tr>";
                while($newRow = mysqli_fetch_array($newResult))
                {
                    echo "<tr>";
                        echo '<td style="text-align:center;">' . $newRow['name']. "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                
                mysqli_free_result($newResult);
            }
            else
            {
                echo "second if fail";
            }
        }
    }
    else
    {
        echo "first if fail";
    }
    


    include("footer.php");
?>
