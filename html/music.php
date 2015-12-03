<?php (include "header.php");

    $song = "SELECT *
            FROM song";
    $artist = "SELECT *
            FROM artists";

    if(($sresult = mysqli_query($link, $song)) && ($aresult = mysqli_query($link, $artist)))
    {
        if((mysqli_num_rows($sresult) > 0) && (mysqli_num_rows($aresult) > 0))
		{
            echo "<table cellpadding='10' border='4' margin:auto; top:0; bottom:0; left:0; right:0; style='width:50%;'>";
                echo "<tr>";
                    echo'<th style="font-size:200%">Track</th>';
                    echo'<th style="font-size:200%">Artist</th>';
                echo"</tr>";
            while(($sRow = mysqli_fetch_array($sresult))&&($aRow = mysqli_fetch_array($aresult)))
			{
				echo "<tr>";
					echo '<td style="text-align:center;font-size:110%; font-family:Helvetica, Helvetica, Arial, sans-serif;">' . $sRow['songName']. "</td>";
                    echo '<td style="text-align:center;font-size:110%;">' . $aRow['name']. "</td>";
				echo "</tr>";
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
