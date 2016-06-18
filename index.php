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
		<div class="well well-lg">
		<p>Welcome to our travel information systems, here are most of the hot spots of the location, tickets, traffic and other information.</p>
		<p>There are a series of tour, thousands of popular courses for you to choose from.</p>
		<p>There to show you the tourist attractions of the latest news. Tourists select travel dates.</p>
		</div>
 </div>
</div>

</div>
<?php include("footer.php") ?>
</body>
</html>
