<?php include("header.php") ?>

<form style="z-index:9999999" action="changePass.php" method="post">
<br/>
<br/>

<div >
	<p>
    	<label for="password">Current Password:</label>
        <input type="password" name="password" id="password">
    </p>
    <p>
    	<label for="password">New Password:</label>
        <input type="password" name="password" id="password">
    </p>
    <p>
    	<label for="password">Confirm New Password:</label>
        <input type="password" name="password" id="password">
    </p>


    <input type="submit" value="REGISTER">
    </div>
</form>

<?php include("footer.php") ?>
