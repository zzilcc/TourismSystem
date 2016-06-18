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
			<?php

			session_start();
			if(isset($_SESSION['authentication']))
			if($_SESSION['authentication']==1):
					?>
			<a class="btn btn-raised" href="addsch.php"><i class="material-icons">add</i> Add News</a>
		<?php	else:
				echo "Add News";

			?>
			<?php
		  endif;
		  ?>
	    <th><i class="material-icons">timeline</i> route</th>
	    <th><i class="material-icons">attach_money</i> cost</th>
	    <th><i class="material-icons">sms</i> introduction</th>
	    <th><i class="material-icons">update</i> Update</th>
			<th><i class="material-icons">delete</i> delete</th>
	  </tr>
	  </thead>
	  <tbody>

	<?php

	if(isset($_SESSION['name'])):
	?>
	<?php

	$db=mysqli_connect("127.0.0.1","root","","travel_information") or die('Could not connect:'.mysql_error());
	mysqli_query($db,"set names utf8");

	mysqli_select_db($db,"travel_information");

	$sql_sce="SELECT * FROM  `schedule` ";
	$query = mysqli_query($db,$sql_sce);
	$query_num = mysqli_num_rows($query);

	for($i=0; $i<$query_num; ++$i){
	  $query_info = mysqli_fetch_assoc($query);
		//var_dump($query_info);
		//echo $query_info;
	  echo " <td>$query_info[route]</td><td>$query_info[cost]</td>
		<td>$query_info[introduction]</td> ";
//echo $query_info["id"];
  // var_dump($query_info);
		//echo $query_info;

	  if($_SESSION['authentication']==1)
      echo " <td><a href='updatesch.php?id=$query_info[id]'>Update</a></td><td><a href='deletesch.php?id= $query_info[id]'>Delete</a></td>";
	  else
    	echo "<td>Update</td><td>Delete</td>";
    echo '<tr>';
	}
	// echo $a;
	mysqli_close($db);
	?>


	</tbody>
	</table>

	<?php
	else:
	?>
	<div class="jumbotron">
	  <h2>Please Login</h2>

	  <p>请登录再操作！</p>

	<div class="row">
	<div class="col-md-offset-10">
	  <p><a class="btn btn-primary btn-lg" href="login.php">登陆...</a></p>
	  </div>
	 </div>
	</div>
	<?php
	endif;
	?>

</div>

</div>
</div>

<?php include("footer.php"); ?>
	</body>
</html>
