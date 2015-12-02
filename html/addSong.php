<?php (include "header.php");
    
    $song = mysqli_real_escape_string($link, $_POST['addSong']);
    $playlist_name = $_GET['link'];
    $userID = $_SESSION["userID"];
    
    $check = "SELECT trackID
            FROM song
            WHERE EXISTS (songName = '$song')";
    
    if($result = mysqli_query($link, $check))
    {
        echo "'$check'";
        echo "'$result'";
        $sql = "INSERT INTO contain (TID, Pname, PUID)
                VALUES ('$result', '$playlist_name', '$userID')
                WHERE EXISTS
                (SELECT name
                FROM song
                WHERE name = '$song')";
        echo "post sql";
        if(mysqli_query($link, $sql))
        {
            echo "Song was added to '$playlist_name'";
        }
    
        else
        {
            echo "Failed to add '$song'";
        }
        
    }
    else
    {
        echo "Could not find '$song' in the database";
    }
    
    echo '<meta http-equiv="Refresh" content="2; url=../editPlaylist.php">';
(include "footer.php");?>