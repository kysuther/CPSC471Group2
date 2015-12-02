<?php (include "header.php");
    
    $song = mysqli_real_escape_string($link, $_POST['addSong']);
    $playlist_name = $_GET['link'];
    $userID = $_SESSION["userID"];
    
    $check = "SELECT *
            FROM song
            WHERE songName = '$song'";
            
    $result = mysqli_query($link, $check);
    while($row = mysqli_fetch_array($result))
    {
        $trackID = $row['trackID'];
    }
    
    $sql = "INSERT INTO contain (TID, Pname, PUID)
            VALUES ('$trackID', '$playlist_name', '$userID')";
    if(mysqli_query($link, $sql))
    {
        echo "Song was added to '$playlist_name'";
    }

    else
    {
        echo "Failed to add '$song'";
    }
    
    echo '<meta http-equiv="Refresh" content="2; url=../editPlaylist.php?link=' .$playlist_name .'">';
(include "footer.php");?>