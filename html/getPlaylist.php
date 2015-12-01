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
                FROM contain
                WHERE Pname='$playlist_name'";
                
    #get songs from said playlist            
    $songs = "SELECT *
                    FROM (song JOIN contain)";
            
    echo "done selecting";
    
    // if(($qwerty = mysqli_query($link, $test)) && ($qwertyu = mysqli_query($link, $ntest)))
    if(($newResult = mysqli_query($link, $playlist)) && ($nResult = mysqli_query($link, $songs)))
    // if($newResult = mysqli_query($link, $test))
    {
        echo "first test is good";
            echo "<table>";
                echo "<tr>";
                    echo'<th style="font-size:200%">Track</th>';
                    // echo'<th style="font-size:200%">Artist</th>';
                echo"</tr>";
            while(($test = mysqli_fetch_array($newResult)) && ($test1 = mysqli_fetch_array($nResult)))
            {
                echo "<tr>";
                    echo '<td style="text-align:center;">' . $test1['name']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
            
            mysqli_free_result($newResult);
    }
    else
    {
        echo "first if fail";
    }
    


    include("footer.php");
?>
