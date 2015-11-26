<?php include("header.php") ?>

<form style="z-index:9999999" action="createAccountAdd.php" method="post">
<br/>
<br/>
<br/>

<div >
	<p>
    	<label for="firstName">First Name:</label>
        <input type="text" name="firstname" id="firstName">
    </p>
    <p>
    	<label for="lastName">Last Name:</label>
        <input type="text" name="lastname" id="lastName">
    </p>
    <p>
    	<label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>

	<p>
    	<label for="password">Password:</label>
        <input type="password" name="password" id="password">
    </p>


    <input type="submit" value="REGISTER">
    </div>
</form>

<?php include("footer.php") ?>
