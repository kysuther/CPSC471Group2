<?php include("header.php") ?>

<form style="z-index:9999999" action="changePass.php" method="post">
<div >
	<p>
    	<label for="currPass">Current Password:</label>
        <input type="password" name="currPass" id="currPass">
    </p>
    <p>
    	<label for="newPass">New Password:</label>
        <input type="password" name="newPass" id="newPass">
    </p>
    <p>
    	<label for="newPassConf">Confirm New Password:</label>
        <input type="password" name="newPassConf" id="newPassConf">
    </p>


    <input type="submit" value="Submit">
    </div>
</form>

<?php include("footer.php") ?>
