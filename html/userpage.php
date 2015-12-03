<!--USER PAGE-->
<?php include 'requireslogin.php' ?>
<?php include 'header.php' ?>
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
<!-- TITLE --> <?php echo '<div class="firsttitle">'.$_SESSION['userFname'].'\'s Music</div>' ?><!-- TITLE -->
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
<div id="userInfo">
  <h3><u>User Information:</u></h3>
  <?php echo '<p>Name: '.$_SESSION['userFname'].' '.$_SESSION['userLname'].'</p>'?>
  <?php echo '<p>Account Type: '.$_SESSION['accessLevel'].'</p>'?>
  <?php echo '<p>Email Address: '.$_SESSION['emailAddress'].'</p>'?>
</div>
<div id="userbuttons">
<a href="/changeEmailForm.php"><b>Change Email</b></a>
<a href="/changePassForm.php"><b>Change Password</b></a>
<a href="/playlists.php"><b>My Playlists</b></a>
</div>
</div>
</div>
</div>

<?php include 'footer.php' ?>
