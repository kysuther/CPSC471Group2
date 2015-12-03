<?php (include "requireslogin.php");
(include "header.php");
    
    $newPlay = mysqli_real_escape_string($link, $_POST['Name']);
    
    $userID = $_SESSION["userID"];
    
    $sql = "INSERT INTO playlist (name, uid)
            VALUES ('$newPlay', '$userID')";

    if(mysqli_query($link, $sql))
    {
        echo "<p style='font-size:200%;font-family:Helvetica;text-align:center;color:Blue'>'$newPlay' Was Created</p>";
    }
    
    else
    {
        echo "<p style='font-size:200%;font-family:Helvetica;text-align:center;color:Red'> Failed To Create '$newPlay'</p>";
    }
    echo '<meta http-equiv="Refresh" content="2; url=../playlists.php">';
    (include "footer.php");
?>