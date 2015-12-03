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
<div id="userbuttons">
<a href="/playlists.php"><b>My Playlists</b></a>
<a href="/music.php"><b>Browse Music</b></a>
</div>
<div id="userInfo">
  <h3><u>User Information:</u></h3>
  <?php echo '<p>Name: '.$_SESSION['userFname'].' '.$_SESSION['userLname'].'</p>'?>
  <?php echo '<p>Account Type: '.$_SESSION['accessLevel'].'</p>'?>
  <?php echo '<p>Email Address: '.$_SESSION['emailAddress'].'</p>'?>
</div>
<div id="userbuttons">
<a href="/changeEmailForm.php"><b>Change Email</b></a>
<a href="/changePassForm.php"><b>Change Password</b></a>
</div>
</div>
</div>
</div>

<?php include 'footer.php' ?>
