<?php session_start();
unset($_SESSION['name']);
unset($_SESSION['gender']);
?>
<html>
<head>
	<title></title>
		<meta name="keywords" content="checklogin"/>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>

<?php include("menu.php"); ?>
<?php
$name=$_POST['name'];
$password=$_POST['password'];
$db=mysqli_connect("127.0.0.1","root","","travel_information")
     or die('Could not connect:'.mysql_error());
mysqli_select_db($db,"travel_information");
$sql=mysqli_query($db,"SELECT *
FROM  `register`
WHERE  `name` LIKE  '$name'");
$query = mysqli_fetch_assoc($sql);
		if( $query['password'] == $_POST['password'])
		{
				echo "登陆成功！<br>";
		}else
				echo "密码错误<br>";
mysqli_close($db);
$_SESSION['name'] = $name;
$_SESSION['gender'] = $query['gender'];

?>
</body>
</html>
