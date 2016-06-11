<!DOCTYPE HTML>
<html>
<head>
	<title>Update information</title>
		<meta name="keywords" content="Add"/>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	</head>
	<body>
	<?php include("menu.php"); ?>
<?php
session_start();


if(isset($_SESSION['name'])):
$db=mysqli_connect("127.0.0.1","root","","travel_information") or die('Could not connect:'.mysql_error());

if(isset($_POST['Title'])) {
$u = "UPDATE  `information` SET  `title` =  '$_POST[Title]',
`address` =  '$_POST[Address]',
`time` =  '$_POST[Time]',
`impression` =  '$_POST[Impression]' WHERE  `information`.`id` =$_GET[id]";
mysqli_query($db, $u);

}

$a="SELECT * 
FROM  `information` 
WHERE  `id` =$_GET[id]";

// echo $a;
$info=mysqli_fetch_assoc(mysqli_query($db,$a));
?>
		<form method="post" action="update.php?id=<?php echo $_GET['id'] ?>"> 
		 Title<br><input type="text" name="Title" value="<?php echo $info['title'] ?>"><br>
     Address<br><input type="text" name="Address" value="<?php echo $info['address'] ?>"><br>
		 Time<br><input type="text" name="Time" value="<?php  echo $info['time'] ?>"><br>
		 Impressions<br><input type="text" name="Impression" value="<?php echo $info['impression'] ?>"><br>
     <input type="submit" value="update" />
<?php
mysqli_close($db);
endif;
?>

</form>
	</body>
</html>
