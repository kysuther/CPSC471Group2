<!--REGISTER PAGE-->

<?php include 'header.php' ?>
<style type="text/css">
#topimage {
    position:absolute;
    top:20px;
}
#topimage img {
    height:100%;
    width:100%;
}
form {
    position:fixed;
    z-index:9999999;
    top:250px;
    left:100px;
    width: 350px;
    font-style:none;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; 
    color:#fff;
    letter-spacing:1px;
    font-size:20px;
    background-color:#2a2a2a;
    padding:10px 10px 10px 10px;
    border:1px solid #2a2a2a;
    border-radius: 20px;
}
button {
    width:120px;
    height:45px;
    margin-left:32%;
    font-style:none;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; 
    color:#fff;
    letter-spacing:1px;
    font-size:20px;
    background-color:#525252;
}
button:hover {
    background-color:#63d297;
}
</style>

<div id="topimage">
    <img src="http://i68.tinypic.com/244o8sk.png">
</div>

<form action="createAccountAdd.php" method="post">
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


    <button type="submit" value="REGISTER">Register</button>
</form>



</div>
</div>

<?php include 'footer.php' ?>
