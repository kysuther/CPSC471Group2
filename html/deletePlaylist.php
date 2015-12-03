<?php (include "header.php");
    
    $playlist_name = $_GET['link'];
    $userID = $_SESSION["userID"];
    
    $getCont = "DELETE
                FROM contain
                WHERE Pname = '$playlist_name'";
    
    $getPlay = "DELETE
                FROM playlist
                WHERE name = '$playlist_name'";
       
    if($cResult = mysqli_query($link, $getCont))
    {
        // echo "'$playlist_name' deleted from contain";
    }
    else
    {
        // echo "could not empty contain";
    }
    
    if($pResult = mysqli_query($link, $getPlay))
    {
        echo "'$playlist_name' has been deleted";
    }
    else
    {
        echo "could not delete '$playlist_name'";
    }
    
    echo '<meta http-equiv="Refresh" content="2; url=../playlists.php">';
(include "footer.php");?>