<?php
	include 'header.php';
	session_destroy();
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo 'Logging out, you will be redirected to the home page.';
	echo '<meta http-equiv="Refresh" content="2; url=../">';
	include 'footer.php';
?>
