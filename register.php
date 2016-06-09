<html>
<head>
	<tile></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<body>
<?php
$ab=mysqli_connect("127.0.0.1","root","");
if(!$db)
{
	die('Could not connect:'.mysql_error());
}
mysqli_select_db($ab,"travel_information");
$sql="CREATE TABLE register
(
	name varchar(15),
	passaword  varchar(15),
	gender   varchar(10)
)";
$a="INSERT INTO register (`name`, `passaword`,'gender') VALUES (' " . $_POST['name']. " ', ' " .  $_POST['passaword']. " ','".$_POST['gender']." ')";
echo $a;
mysqli_query($ab,$sql);
mysqli_query($ab,$a);

mysqli_close($db);
?>
</html>
</head>
</body>
