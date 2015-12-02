<?php (include "header.php");
    
    $newPlay = mysqli_real_escape_string($link, $_POST['Name']);
    
    $userID = $_SESSION["userID"];
    
    $sql = "INSERT INTO playlist (name, uid)
            VALUES ('$newPlay', '$userID')";
    
    if(mysqli_query($link, $sql))
    {
        echo "Insert successful";
    }
    
    else
    {
        echo "Insert failed";
    }
    echo '<meta http-equiv="Refresh" content="2; url=../playlists.php">';
    (include "footer.php");
?>