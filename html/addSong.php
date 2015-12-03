<?php (include "requireslogin.php");
(include "header.php");
    
    $song = mysqli_real_escape_string($link, $_POST['addSong']);
    $playlist_name = mysqli_real_escape_string($link, $_GET['link']);
    $userID = $_SESSION["userID"];
    
    $check = "SELECT *
            FROM song
            WHERE songName = '$song'";
            
    if($result = mysqli_query($link, $check))
    {
        while($row = mysqli_fetch_array($result))
        {
            $trackID = $row['trackID'];
        }
        
        $sql = "INSERT INTO contain (TID, Pname, PUID)
                VALUES ('$trackID', '$playlist_name', '$userID')";
        if(mysqli_query($link, $sql))
        {
            echo "<p style='font-size:200%;font-family:Helvetica;text-align:center;color:Blue'>'$song' was added to '$playlist_name'</p>";
        }

        else
        {
            echo "<p style='font-size:200%;font-family:Helvetica;text-align:center;color:Red'>Failed to add '$song'</p>";
        }
    }
    else
    {    
        echo "'$song' does not exist in the database";
    }
    
    echo '<meta http-equiv="Refresh" content="2; url=../editPlaylist.php?link=' .$playlist_name .'">';
(include "footer.php");?>