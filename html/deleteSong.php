<?php (include "header.php");
    
    $song = mysqli_real_escape_string($link, $_POST['delSong']);
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
    
    $sql = "DELETE
            FROM contain
            WHERE TID='$trackID' AND Pname='$playlist_name' AND PUID='$userID'";
            
    if(mysqli_query($link, $sql))
    {
        echo "'$song' is no longer in '$playlist_name'";
    }

    else
    {
        echo "Failed to delete '$song'";
    }
    
    echo '<meta http-equiv="Refresh" content="2; url=../editPlaylist.php?link=' .$playlist_name .'">';
(include "footer.php");?>