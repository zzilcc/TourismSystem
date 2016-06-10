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
		<form  align=center>
		 Title<br><input type="text" name="Title"><br>
     Address<br><input type="text" name="Address"><br>
		 StartTime<br><input type="text" name="StartTime"><br>
		 OverTime<br><input type="text" name="OverTime"><br>
		 Impressions<br><input type="text" name="Impressions"><br>
     <input type="submit" value="Submit" />
<?php
endif;
?>

</form>
	</body>
</html>
