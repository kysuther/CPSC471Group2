<?php (include "header.php");

    $newName = mysqli_real_escape_string($link, $_POST['Rename']);
    $playlist_name = $_GET['link'];
    $userID = $_SESSION["userID"];
    
    $check = "UPDATE contain
            SET Pname='$newName'
            WHERE Pname='$playlist_name' AND PUID='$userID'";
    
    $sql = "UPDATE playlist
            SET name='$newName'
            WHERE name='$playlist_name' AND uid='$userID'";

    if((mysqli_query($link, $sql)) && (mysqli_query($link, $check)))
    {
        echo "'$playlist_name' has been renamed to '$newName'";
    }
    else
    {
        echo "The renaming of '$playlist_name' to '$newName' has failed";
    }

    echo "<meta http-equiv='Refresh' content='2; url=../playlists.php'>";
(include "footer.php")?>