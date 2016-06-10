<!DOCTYPE HTML>
<html>
<head>
	<title></title>
		<meta name="keywords" content=""/>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	</head>
	<body>
	<?php
	include("menu.php");
	?>
	<?php
	$db=mysqli_connect("127.0.0.1","root","","travel_information");
	if(!$db)
	{
		die('Could not connect:'.mysql_error());
	}
	mysqli_select_db($db,'travel_information');
	$sql=mysqli_query("select * from information");
	while($row=mysql_fetch_assoc($sql)){
	?>
	<p>Please enter a search keyword<input type="text" name="keywords" /><br>
		$a= mysqli_query("select * from information where  like ’%%’");
	<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['title'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['time'];?></td>
	<td><?php echo $row['impression'];?></td>
	</tr>
	<?php
	}
	?>
	</body>
</html>
