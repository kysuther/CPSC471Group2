<!--USER PAGE-->
<?php include 'header.php' ?>
<?php include 'requireslogin.php' ?>
<style type="text/css">
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
#userbuttons {
    position:relative;
    z-index:999999999;
    margin-top:27px;
    right:-1px;
}
#userbuttons a {
    text-decoration:none;
    text-transform:none;

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
#userbuttons a:hover {
    text-transform:none;
    text-decoration:none;
    color:#63d297;
    background:#fff;
    border:1px solid #525252;
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

<div id="userimage">
  <img src="http://i68.tinypic.com/16m4oia.png">
<div id="container">
 
<!-- START FIRST SECTION -->
<div class="section">
<!-- TITLE --> <?php echo '<div class="firsttitle">'.$_SESSION['userFname'].'\'s Playlists</div>' ?><!-- TITLE -->
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
<td class="second" width="50px">2</td> <td class="first" width="175px">Whoop</td> <td class="first" width="175px">WhoopWhoop</td>
  <td class="first" width="175px">00:00</td>
  <td class="first" width="175px">N/A</td>
</tr>
  
</tr>
</table>
<div id="userbuttons">
<a href="/changeEmailForm.php"><b>Change Email</b></a>
<a href="/changePassForm.php"><b>Change Password</b></a>
</div>
</div>
</div>
</div>

<?php include 'footer.php' ?>
