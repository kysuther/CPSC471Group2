<?php include("header.php") ?>

<form action="loginVerify.php" method="post">
    <p>
    	<label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>

	<p>
    	<label for="password">Password:</label>
        <input type="password" name="password" id="password">
    </p>


    <input type="submit" value="Log In">
</form>
</body>
</html>
<?php include("footer.php") ?>
