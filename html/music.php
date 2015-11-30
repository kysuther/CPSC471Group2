<?php (include "header.php");
echo "<br/>";
echo "<br/>";
echo "<br/>";

    $song = "SELECT *
            FROM song";
    $artist = "SELECT *
            FROM artists";

    if(($sresult = mysqli_query($link, $song)) && ($aresult = mysqli_query($link, $artist)))
    {
        if((mysqli_num_rows($sresult) > 0) && (mysqli_num_rows($aresult) > 0))
		{
            echo "<table>";
                echo "<tr>";
                    echo'<th style="font-size:200%">Track</th>';
                    echo'<th style="font-size:200%">Artist</th>';
                echo"</tr>";
            while(($sRow = mysqli_fetch_array($sresult))&&($aRow = mysqli_fetch_array($aresult)))
			{
				echo "<tr>";
					echo '<td style="text-align:center;">' . $sRow['name']. "</td>";
                    echo '<td style="text-align:center;">' . $aRow['name']. "</td>";
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
