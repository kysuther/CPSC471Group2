<?php (include "header.php");

<link rel='stylesheet' type='text/css' href='css/style.php' />

<?php
    header("Content-type: text/css; charset: UTF-8");
	
	$backgroundColor = "#fff";
	$titleColor = "#525252";
	$textColor = "#525252";
	$titleBackground = "#63d297";
	$font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
?>

<?php (include "footer.php")?>

#title {
	color: <?php echo $titleColor; ?>;
	font-family: <?php echo $font-family; ?>;
}
