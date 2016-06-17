<!DOCTYPE html>
<html>
<head>
<title>Tourism information management system</title>
	<meta name="keywords" content="Tourism"/>
	<meta http-equiv="content-type" content="text/php; charset=utf-8"/>
<?php include("header.php") ?>

</head>
<body>
<div class="container">
<?php
session_start();
include("menu.php");
?>
<div class="row">
	<div class="col-md-2">
	<?php include("vmenu.php"); ?>
	</div>
	<div class="col-md-10">

<div class="well bs-component">
<table class="table table-striped table-hover ">
  <thead>
  <tr>
    <th><i class="material-icons">person</i> Author</th>
    <th><i class="material-icons">title</i> Title</th>
    <th><i class="material-icons">gps_fixed</i> Address</th>
    <th><i class="material-icons">date_range</i> Date</th>
    <th><i class="material-icons">speaker_notes</i> Impression</th>
    <th><i class="material-icons">update</i> Update</th>
  </tr>
  </thead>
  <tbody>

<?php
$db=mysqli_connect("127.0.0.1","root","","travel_information") or die('Could not connect:'.mysql_error());
mysqli_query($db,"set names utf8");
mysqli_select_db($db,"travel_information");
$a="SELECT * FROM  `information` order by time desc";
$query = mysqli_query($db,$a);
$query_num = mysqli_num_rows($query);
for($i=0; $i<$query_num; ++$i)  {
$query_info = mysqli_fetch_assoc($query);
if(isset($_SESSION['name']) && $_SESSION['name'] == $query_info['name'])
echo "<tr class=info>";
else echo "<tr>";
echo " <td>$query_info[name]</td><td>$query_info[title]</td><td>$query_info[address]</td><td>$query_info[time]</td><td>$query_info[impression]</td>";
if(isset($_SESSION['name']) && $_SESSION['name'] == $query_info['name'])
	echo "<td><a href='update.php?id=".$query_info['id']."'>Update</a></td>";
else
	echo "<td>Update</td>";
}
// echo $a;
mysqli_close($db);
?>
</tbody>
</table>
	</div>
	</div>
	</div>


</div>
<?php include("footer.php") ?>
</body>
</html>
