<?php (include "requireslogin.php");
(include "header.php");

    $song = "SELECT *
            FROM song";
    $artist = "SELECT *
            FROM artists";

    if(($sresult = mysqli_query($link, $song)) && ($aresult = mysqli_query($link, $artist)))
    {
        if((mysqli_num_rows($sresult) > 0) && (mysqli_num_rows($aresult) > 0))
		{
            echo "<table cellpadding='8' border='3' style='width:50%; margin:auto;'>";
                echo "<tr>";
                    echo'<th style="font-size:24px; letter-spacing:2px; text-;background:#63d297;color:#fff;">Track</th>';
                    echo'<th style="font-size:24px; letter-spacing:2px; text-;background:#63d297;color:#fff;">Artist</th>';
                echo"</tr>";
            while(($sRow = mysqli_fetch_array($sresult))&&($aRow = mysqli_fetch_array($aresult)))
			{
				echo "<tr>";
				echo '<td style="text-align:center;font-size:14px; font-family:Helvetica, Helvetica, Arial, sans-serif;color:#525252;letter-spacing:2px;">' . $sRow['songName']. "</td>";
                    echo '<td style="text-align:center;font-size:14px; font-family:Helvetica, Helvetica, Arial, sans-serif;color:#525252;letter-spacing:2px;">' . $aRow['name']. "</td>";
            }
            echo "</table>";

            mysqli_free_result($sresult);
            mysqli_free_result($aresult);
        }
        else
        {
            echo "No songs in the database yet";
        }

    }
    else
    {
        echo "ERROR: Could not execute $sql." . mysqli_error($link);
    }
(include "footer.php");
?>
