<!--USER PAGE-->
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

<title>User Page</title>
{block:Description} <meta name="description" content="{MetaDescription}"
/>{/block:Description}
<link rel="shortcut icon" href="{Favicon}" />

<meta charset="UTF-8">
<title>Register</title>
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
#tabbox {
text-align: left;
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-size: 14px; /*self-explanatory*/
position:fixed;
left:0px;
top:-120px;
-webkit-transition: all .6s ease-in-out;
-moz-transition: all .6s ease-in-out;
-o-transition: all .6s ease-in-out;
z-index:99999;
}
 
#tabbox:hover {top:0px;}
 
#boxhover {
padding: 9px;
background: #525252; /*Color of the tab box background*/
width:355px;
color:#ffffff; /*color of the box text*/
height:150px; /*how tall it is*/
z-index: 9999;
}
 
#tablabel{
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-size:14px;
letter-spacing:1px;
text-align: center;
color:#ffffff;
height:20px;
padding: 7px 0px 3px 0px;
background:#525252; /*Color of the tab label background*/
width: 105px;
}

#userimage {
  position:fixed;
  margin-top:100px;
  margin-left:100px;
}
#userimage img {
  max-height: 150px;
  max-width:auto;
  border: 5px solid #939393;
  border-radius: 50%;
}
  
#container {
width: 950px;
margin: auto;
}
 
.section {
margin-bottom: 35px;
  margin-left:200px;
  margin-top:-150px;
  
}
 
td {
background-color: #ffffff;
padding: 2px;
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-size: 11px;
color: #857e7e;
text-transform: uppercase;
letter-spacing: 2px;
text-align: center;
}

.firsttitle {
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-size: 24px;
color: #525252;
text-transform: uppercase;
letter-spacing: 2px;
text-align: left;
}
 
td.firsttop {
background-color: #63d297;
padding: 2px;
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-size: 14px;
color: #ffffff;
text-transform: none;
letter-spacing: 2px;
text-align: center;
}
</style>
</head>
<body>
<div id="topbar">
<div id="title"><a href="/"><b>CPSC471 Group02</b></a></div>
<div id="subtitle">Fall 2015 | University of Calgary</div>
    <div id="userlinks">
	<a href="/"><b>log in</b></a>
	<a href="/"><b>register</b></a>
</div>
</div>

<div id="tabbox">
<div id="boxhover"><p>fillertext</p>
<p>
<font color="#fff">Andrew Dong, Charlie Cheung, Joshua Hong, Kyle Sutherland</br>CPSC471 Group02</br>Prof: Dr.  Nelson Wong</br>TA: Ibrahim Karakira
</p>
</div> <!--TABBOX END-->
<div id="tablabel">Student Info</div>
</div>

<p><span title="back to top"><a href="#top" style="position: fixed; bottom: 10px; right: 10px; text-decoration: none; color: #63d297; font-size: 20px; z-index: 9999999999;"><img src="http://i67.tinypic.com/2roma03.png"></a></span></p> 


<div id="thefooter">
    <div id="footertitle"><b>CPSC471 Group02</b></div>
    <div id="footernote">University of Calgary | Fall2015 | Dr. Nelson Wong | TA: Ibrahim Karakira</br>
    <i>Andrew Dong, Charlie Cheung, Joshua Hong, Kyle Sutherland</br>**This website is created for the purpose of completing the CPSC71 term project for Fall 2015 only.</br> The content on this webpage is not made for profit. </br>We claim no ownership for the photos and songs on this webpage.</i></div>
</div>

<div id="userimage">
  <img src="http://i63.tinypic.com/3128kr4.jpg">
<div id="container">
 
<!-- START FIRST SECTION -->
<div class="section">
<!-- TITLE --> <div class="firsttitle">User Playlist</div> <!-- TITLE -->
<table cellpadding="0">
 
<!-- FIRST INFO -->
<tr>
<td class="firsttop" width="50px">#</td> <td class="firsttop" width="475px">Title</td> <td class="firsttop" width="275px">Artist</td> <td class="firsttop" width="155px">Length</td>
<td class="firsttop" width="175px">Genre</td>
</tr>
<!-- FIRST INFO -->

<tr>
<td class="first" width="50px">1</td> <td class="first" width="175px">Shining Diamond</td> <td class="first" width="175px">Seventeen</td>
  <td class="first" width="175px">3:21</td>
  <td class="first" width="175px">K-Pop</td>
</tr>

<tr>
<td class="first" width="50px">2</td> <td class="first" width="175px">Whoop</td> <td class="first" width="175px">WhoopWhoop</td>
  <td class="first" width="175px">00:00</td>
  <td class="first" width="175px">N/A</td>
</tr>
  
</tr>
</table>
</div>

</div>
</div>

</body>
</html>

