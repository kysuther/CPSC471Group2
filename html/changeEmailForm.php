<?php include("header.php") ?>

<form style="z-index:9999999" action="changeEmail.php" method="post">
<div >
	<p>
    	<label for="newEmail">New Email Address:</label>
        <input type="text" name="newEmail" id="newEmail">
    </p>
	<p>
    	<label for="currPass">Password:</label>
        <input type="password" name="currPass" id="currPass">
    </p>
    <input type="submit" value="Submit">
    </div>
</form>

<?php include("footer.php") ?>
