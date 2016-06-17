<!DOCTYPE HTML>
<html>
<head>
	<title></title>
		<meta name="keywords" content="Introduction"/>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
		<?php include("header.php") ?>
	</head>
  <body>
	<div class="container">
	<?php include("menu.php"); ?>

<div class="row">
<div class="col-md-2">
	<?php include("vmenu.php"); ?>
</div>
<div class="col-md-10">

<div class="well well-lg">
	<table class="table table-striped table-hover ">
	  <thead>
	  <tr>
	    <th><i class="material-icons">person</i> Scenename</th>
	    <th><i class="material-icons">title</i> Location</th>
	    <th><i class="material-icons">gps_fixed</i> cost</th>
	    <th><i class="material-icons">date_range</i> Instructions</th>
	  
	  </tr>
	  </thead>
	  <tbody>

	<?php
	$db=mysqli_connect("127.0.0.1","root","","travel_information") or die('Could not connect:'.mysql_error());
	mysqli_query($db,"set names utf8");

	mysqli_select_db($db,"travel_information");

	$a="SELECT * FROM  `sceneinfor` order by time desc";
	$query = mysqli_query($db,$a);
	@$query_num = mysqli_num_rows($query);
	for($i=0; $i<$query_num; ++$i)  {
	$query_info = mysqli_fetch_assoc($query);
	if(isset($_SESSION['name']) && $_SESSION['name'] == $query_info['name'])
	echo "<tr class=info>";
	else echo "<tr>";

	echo " <td>$query_info[Scenename]</td><td>$query_info[Location]</td><td>$query_info[cost]</td><td>$query_info[Instructions]</td>";
	//if()
	//	echo "<td><a href='update.php?id=".$query_info['id']."'>Update</a></td>";
	//else
	//	echo "<td>Update</td>";
	}

	// echo $a;
	mysqli_close($db);
	?>
	</tbody>
	</table>

</div>

</div>
</div>

<?php include("footer.php"); ?>
	</body>
</html>
