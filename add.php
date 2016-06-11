<!DOCTYPE HTML>
<html>
<head>
	<title>Add information</title>
		<meta name="keywords" content="Add"/>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	</head>
	<body>
	<?php include("menu.php"); ?>
<?php
session_start();
if(isset($_SESSION['name'])):
?>
		<form method="post" action="addinf.php"> 
		 Title<br><input type="text" name="Title"><br>
     Address<br><input type="text" name="Address"><br>
		 Time<br><input type="text" name="Time" value="<?php  echo date('Y-m-d') ?>"><br>
		 Impressions<br><input type="text" name="Impression"><br>
     <input type="submit" value="Submit" />
<?php
endif;
?>

</form>
	</body>
</html>
