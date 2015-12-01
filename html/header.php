<?php include 'headerphp.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta name="p:domain_verify" content="3be8d8c7e105bf73047bb30813cab21e"/>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript"  src='http://cdn.renderedfont.com/js/renderedfont-0.8.min.js#free'></script>

<title>CPSC 471 Group 2 Music Site</title>
{block:Description} <meta name="description" content="{MetaDescription}"
/>{/block:Description}
<link rel="shortcut icon" href="{Favicon}" />

<style type="text/css">
body{
	margin: 0px;
	padding: 0px;
	background:#fff url('http://i65.tinypic.com/2lc8so5.png') fixed;
}
::-webkit-scrollbar {
    width: 9px;
    height: 3px;
    background: #fff;
}
::-webkit-scrollbar-thumb {
    background-color:#d4d4d4;
    border-radius: 5px solid black;
}
#topbar {
    position:fixed;
    z-index:99999999;
    width:100%;
    height:50px;
    left:0px;
    top:0px;
    background:#525252;
}
#title a {
	position:fixed;
	margin-top:5px;
	margin-left:20px;
	letter-spacing:2px;
	text-decoration:none;
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	color:#fff;
	font-size:20px;
	-webkit-transition: 0.5s ease;
	transition: 0.5s ease;
    -moz-transition: 0.5s ease;
    -o-transition: 0.5s ease;
}
#title a:hover {
	position:fixed;
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	text-decoration:none;
	color:#d4d4d4;
}
#subtitle {
    position:fixed;
    letter-spacing:1px;
    text-decoration:none;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color:#63d297;
    margin-top:28px;
    margin-left:20px;
}
#userlinks {
    position:fixed;
    z-index:999999999;
    margin-top:27px;
    right:-1px;
}
#userlinks a {
    text-decoration:none;
    text-transform:none;
    float:left;
    margin-right:15px;
    letter-spacing:1px;
    padding:10px 20px 12px 17px;
    font-size:16px;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color:#fff;
    background:#63d297;
    -webkit-transition: 0.8s ease;
    transition: 0.8s ease;
    -moz-transition: 0.8s ease;
    -o-transition: 0.8s ease;
    border:1px solid #63d297;
}
#userlinks a:hover {
    text-transform:none;
    text-decoration:none;
    color:#63d297;
    background:#fff;
    border:1px solid #525252;
}
#topimage {
    position:relative;
    z-index:9999;
    height:600px;
    left:0px;
    top:0px;
    width:100%;
}
#topimage img{
    position:absolute;
    left:0;
    right:0;
    margin:auto;
}
.item {
    position: relative;
    margin: 0px auto;
    padding-top: 20px;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size:20px;
    color: #525252;
    text-align:center;
}
.item li {
    float: left;
    width: 200px;
    height: 300px;
    background: #fff;
    overflow: hidden;
    position: relative;
    text-align: center;
    margin: 8px;
    margin-bottom:90px;
    list-style: none;
}
.item img {
    z-index:9;
    margin-top:10px;
    max-height:60px;
    max-width:60px;
    border-radius:50%;
}
.container {
    width: 900px;
    margin: auto;
    left:0;
    right:0;
}
.section {
     padding: 10px;
    text-align: center;
    position: relative;
    background: transparent;
    top:100px;
    min-height:100%;
}
#thefooter {
    position:fixed;
    z-index:9999999;
    bottom:0;
    width:100%;
    height:100px;
    margin-top:90px;
    background:#2d2d2c;
    color:#ffffff;
}
#footertitle {
    padding-top:15px;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    text-align:center;
    color:#ffffff;
    letter-spacing:1px;
    font-size:26px;
}
#footernote {
    text-align:center;
    font-style:none;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color:#ffffff;
    letter-spacing:1px;
    font-size:14px;
}
</style>
<body>
<div id="topbar">
<div id="title"><a href="/"><b>CPSC471 Group02</b></a></div>
<div id="subtitle">Fall 2015 | University of Calgary</div>
    <div id="userlinks">
    	<?php
    		if(isset($_SESSION['emailAddress'])){
    			echo '<a href="/userpage.php"><b>My Music</b></a>';
    			echo '<a href="/"><b>Account: '.$_SESSION['emailAddress'].'</b></a>';
    			if($_SESSION['accessLevel'] == 'admin')
    				echo '<a href="/"><b>Admin</b></a>';
    			echo '<a href="/logout.php"><b>Log Out</b></a>';
    		}else{
            echo '<a href="/music.php"><b>browse</b></a>';
			echo '<a href="/login.php"><b>log in</b></a>';
			echo '<a href="/register.php"><b>sign up</b></a>';
		}
	?>
</div>
</div>
<br/>
<br/>
<br/>

