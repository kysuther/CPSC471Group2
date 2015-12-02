<?php (include "header.php");
    
    $newPlay = mysqli_real_escape_string($link, $_POST['Name']);
    
    $userID = $_SESSION["userID"];
    
    $sql = "INSERT INTO playlist (name, uid)
            VALUES ('$newPlay', '$userID')";

    if(mysqli_query($link, $sql))
    {
        echo "Playlist creation was successful";
    }
    
    else
    {
        echo "Failed to make a playlist";
    }
    #echo '<meta http-equiv="Refresh" content="2; url=../playlists.php">';
    (include "footer.php");
?>