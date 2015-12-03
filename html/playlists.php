<?php (include "requireslogin.php");
(include "header.php");
    $userID = $_SESSION["userID"];
    
    $playlist = "SELECT *
                FROM playlist
                WHERE uid = '$userID'";
                
    if(!isset ($_SESSION["userID"]))
    {
        die("ERROR: not a user");
    }
                
    if($result = mysqli_query($link, $playlist))
    {
        if(mysqli_num_rows($result) > 0)
        {
            echo "<h1 style='text-align:center;font-size:300%'>Playlists</h1>";
            echo "<table cellpadding='10' style='width:100%'>";
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td style='font-size:150%;text-align:center;font-family:Helvetica'>" . '<div id="userbuttons"><a href="getPlaylist.php?link=' . $row["name"]. '">' . $row['name']."</a></div></td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        }
        else
        {
            echo "<p style='font-size:200%;font-family:Helvetica;text-align:center;color:Blue'>There Are No Playlists Yet</p>";
        }
    }
    else
    {
        echo "ERROR: Could not execute $sql." . mysqli_error($link);
    }
    
    echo "<br/>";
    echo "<br/>";
    echo "<hr/>";
    echo '<p style="font-size:150%;font-family:Helvetica;text-align:right"><div id="userbuttons"><a href="newPlaylistForm.php"><i>Create New Playlist</i></a></div></p>';
    
    mysqli_close($link);

(include "footer.php");
?>