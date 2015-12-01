<?php (include "header.php");
echo "<br/>";
echo "<br/>";
echo "<br/>";


    #main server
    #$link = mysqli_connect("localhost", "root", "jhong", "CPSC471_MusicDatabase");
    #personal testing info
    #$link = mysqli_connect("localhost", "root", "", "cpsc471_musicdatabase.sql");

    if($link === false)
    {
           die("ERROR: could not connect. " . mysqli_connect_error());
    }
    
    $playlist = "SELECT *
                FROM playlist";
                #WHERE uid = sessionid";
                
    if($result = mysqli_query($link, $playlist))
    {
        if(mysqli_num_rows($result) > 0)
        {
            echo "<h1 style='text-align:center;'>Playlists</h1>";
            echo "<table style='width:100%'>";
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td style='font-size:125%;text-align:center;'>" . '<a href="getPlaylist.php?link=' . $row["name"]. '">' . $row['name']."</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        }
    }
                
    
        else
        {
            echo "There are no playlists yet";
        }
    // else
    // {
        // echo "ERROR: Could not execute $sql." . mysqli_error($link);
    // }

    mysqli_close($link);


(include "footer.php");
?>