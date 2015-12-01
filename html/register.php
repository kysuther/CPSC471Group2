<!--REGISTER PAGE-->

<?php include 'headerphp.php' ?>


</style>
</head>
<body>

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

</body>
</html>

<?php include 'footerphp.php' ?>
