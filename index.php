<!DOCTYPE php>
<php>
<head>
<title>Tourism information management system</title>
	<meta name="keywords" content="Tourism"/>
	<meta http-equiv="content-type" content="text/php; charset=utf-8"/>
</head>
<body>
<div id="container">
</div>
<div id="header">
  <h1>Tourism information management system</h1>
</div>
<div id="menu">
  <br>
  <br>
  <h2>Tourism information</h2>
  <ul>
     <br>
     <li><a href="query.php">Query information</a></li>
     <br>
     <li><a href="add.php">Add information</a></li>
     <br>
     <li><a href="about.php">About me</a></li>
     <br>
  </ul>
</div>
<div id="content">
	<ul>
    <li display=inline><a href="index.php">Home</a></li>
<?php
session_start();
if(isset($_SESSION['name'])):
?>
    <li><a href="logout.php">Logout(<?php echo $_SESSION['name']; ?>)</a></li>
<?php
else:
?>
    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Register</a></li>
<?php
endif;
?>
</ul>
<br>
=================
<table border=1>
<tr>
<td><center>Author</center></td><td><center>Title</center></td><td><center>Address</center></td><td><center>Time</center></td><td><center>Impression</center></td><td><center>修改</center></td>
</tr>

<?php
$db=mysqli_connect("127.0.0.1","root","","travel_information") or die('Could not connect:'.mysql_error());

mysqli_select_db($db,"travel_information");

$a="SELECT * FROM  `information` order by time desc";
$query = mysqli_query($db,$a);
$query_num = mysqli_num_rows($query);
for($i=0; $i<$query_num; ++$i)  {
$query_info = mysqli_fetch_assoc($query);
echo "<tr>
         <td><center>$query_info[name]</center></td><td><center>$query_info[title]</center></td><td><center>$query_info[address]</center></td><td><center>$query_info[time]</center></td><td><center>$query_info[impression]</center></td>";
if(isset($_SESSION['name']) && $_SESSION['name'] == $query_info['name'])
	echo "<td><center><a href='update.php?id=".$query_info['id']."'>修改</a></center></td>";
else 
	echo "<td><center>修改</center></td>";
}

// echo $a;
mysqli_close($db);
?>
</table>


</div>
<div id="footer">Copyright </div>
</div>
</body>
</php>
