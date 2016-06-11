<!DOCTYPE html>
<html>
<head>
	<title>register</title>
		<meta name="keywords" content="register"/>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
	<body>
<?php 
include("menu.php"); 
?>

<form method="post" action="reg.php">
   Input name<input type="text" name="name">
	 <br>
	 Input password<input type="password" name="password">
	 <br>
   gender:
   <input type="radio" name="gender" value="female">female
   <input type="radio" name="gender" value="male">male
   <br><br>
   <input type="submit" name="submit" value="registered">
</form>

</body>
</html>
